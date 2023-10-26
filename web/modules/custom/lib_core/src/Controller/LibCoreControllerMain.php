<?php

namespace Drupal\lib_core\Controller;

use Drupal\Component\Serialization\Yaml;
use Drupal\Core\Controller\ControllerBase;
use Drupal\webform\Entity\Webform;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Controller routines for lib_core module.
 */
class LibCoreControllerMain extends ControllerBase {

  /**
   * SinistersCitiesSelect.
   */
  public function sinistersCitiesSelect() {
    $opts = [];
    $path_lib_core_module = drupal_get_path('module', 'lib_core');
    $cities_decode = Yaml::decode(file_get_contents($path_lib_core_module . '/data/ciudades-liberty.yaml'));
    if (!empty($cities_decode)) {
      foreach ($cities_decode as $key => $value) {
        $opts[$key] = $value;
      }
    }
    return $opts;
  }

  /**
   * SinistersVehiclesBrandsSelect.
   *
   * @return array
   *   An array of vehicle brands.
   */
  public function sinistersVehiclesBrandsSelect() {
    $opts = [];
    $path_lib_core_module = drupal_get_path('module', 'lib_core');
    $brand_vehicles = Yaml::decode(file_get_contents($path_lib_core_module . '/data/marca_vehiculos_liberty.yaml'));
    if (!empty($brand_vehicles)) {
      foreach ($brand_vehicles as $value) {
        $opts[$value] = $value;
      }
    }
    return $opts;
  }

  /**
   * Post custom form to webforms.
   *
   * @param string $webform_id
   *   ID webform.
   * @param array $values
   *   Values from form.
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   *   A redirect response.
   */
  public function webformRestPost(string $webform_id, array $values) {

    $config = \Drupal::config('lib_core.environmentvars.settings');

    // Post to SalesForce.
    $client = new Client();

    $urlApi = $config->get('ENDPOINT_SALESFORCE') ?? '';

    $sf = $client->request(
      'POST',
      $urlApi,
      [
        'headers' => [
          'Content-Type' => 'application/x-www-form-urlencoded',
        ],
        'form_params' => $values,
      ]
    );

    $response = $sf->getBody()->getContents();

    \Drupal::logger('salesforce_logger')->notice('Respuesta de Salesforce: @response', ['@response' => strip_tags($response)]);

    $url = $values['retURL'];
    $webform = Webform::load($webform_id);
    $values = [
      'webform_id' => $webform->id(),
      'data' => $values,
    ];
    lib_core_createsubmit($values);
    $response = new RedirectResponse($url);
    return $response->send();
  }

}
