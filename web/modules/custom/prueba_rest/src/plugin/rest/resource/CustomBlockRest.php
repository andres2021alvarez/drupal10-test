<?php

namespace Drupal\prueba_rest\Plugin\rest\resource;

use Drupal\Core\Cache\CacheableJsonResponse;
use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;
use Drupal\Core\KeyValueStore\KeyValueStoreInterface;
use Drupal\rest\Plugin\ResourceBase;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides REST API for Content Based on URL.
 *
 * @RestResource(
 *   id = "custom_block",
 *   label = @Translation("Custom Blocks"),
 *   uri_paths = {
 *     "canonical" = "/api-emb/custom-block/{type}/{id}",
 *   }
 * )
 */
class CustomBlockRest extends ResourceBase {

  /**
   * A current  user instance.
   *
   * @var \Drupal\Core\Session\AccoutnProxyInterface
   */
  protected $currentUser;

  /**
   * The key-value storage.
   */
  private readonly KeyValueStoreInterface $storage;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    array $serializer_formats,
    LoggerInterface $logger,
    KeyValueFactoryInterface $keyValueFactory,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger);
    $this->storage = $keyValueFactory->get('prueba_rest_prueba');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): self {
    return new self(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->getParameter('serializer.formats'),
      $container->get('logger.factory')->get('rest'),
      $container->get('keyvalue')
    );
  }

  /**
   * Responds to entity GET requests.
   *
   * @return \Drupal\rest\ResourceResponse
   *   Returning rest resource.
   */
  public function get($type, $id) {
    // $data = \Drupal::service('fsfb_emb_rest.restservices')->GetBlockContent($type, $id);
    $data = [
      "type" => $type,
      "id" => $id,
    ];
    $response = new CacheableJsonResponse($data);
    $response->getCacheableMetadata()->setCacheMaxAge(3600);

    return $response;
  }

}
