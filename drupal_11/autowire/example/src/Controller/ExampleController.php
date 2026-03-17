<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\example\FancyService;
/**
 * An example controller.
 */
class ExampleController extends ControllerBase {

protected $myCustomService;

/**
* Constructs a new CustomController object.
*
* @param \Drupal\custom_module\MyCustomService $myCustomService
* The custom service.
*/
	public function __construct(FancyService $myCustomService) {
		$this->myCustomService = $myCustomService;
	}

	/**
	* {@inheritdoc}
	*/
	public static function create(ContainerInterface $container) {
		return new static(
			$container->get('example.fancy_service')
		);
	}

	/**
	* A controller method to use the custom service.
	*/
	public function myCustomPage() {
		$message = $this->myCustomService->getFancy();
		return [
			'#type' => 'markup',
			'#markup' => $message,
		];
	}

}