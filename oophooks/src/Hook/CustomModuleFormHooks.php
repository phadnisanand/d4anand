<?php
declare(strict_types=1);
namespace Drupal\oophooks\Hook;
use Drupal\Core\Hook\Attribute\Hook;
/**
 * Module hooks for altering forms.
 */
class CustomModuleFormHooks {
  public function __construct() {}
  #[Hook('form_node_article_form_alter')]
  #[Hook('form_node_article_edit_form_alter')]
  public function formAlter(&$form, &$form_state, $form_id): void {
   // $form['#attached']['library'][] = 'custom_module/form';
   die('coming inside');
  }
}