<?php
/**
 * @file `src/FancyService.php`
 *
 * Fancy service provides lyric segments from Iggy Azalea's song, "Fancy".
 */

namespace Drupal\example;

use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FancyService {

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $language_manager;

  /**
   * Constructs a new FancyService.
   *
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   *   The language manager.
   */
  public function __construct(LanguageManagerInterface $language_manager, EntityTypeManagerInterface $entity_type_manager) {
    $this->language_manager = $language_manager;
	$this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Get fancy lyrics.
   *
   * @return string
   */
  public function getFancy() {
    $lang_code  = $this->language_manager->getCurrentLanguage()->getId();
    $entity = $this->entityTypeManager->getStorage('node')->load(16);
	//print_r($entity->label()); 
    if ($lang_code === 'en') {
      return "I'm so fancy. You already know.";
    } else {
      return "Estoy en el carril rápido. De LA a Tokio.";
    }
  }
}
