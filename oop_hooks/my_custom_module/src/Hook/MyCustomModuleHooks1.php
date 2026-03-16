<?php

namespace Drupal\my_custom_module\Hook;

use Drupal\Core\Hook\Attribute\LegacyHook;
use Drupal\my_custom_module\Hook\MyCustomModuleHooks;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Entity\EntityInterface;
/**
 * Hook implementations for my_custom_module.
 */
class MyCustomModuleHooks1
{
    /**
     * Implements hook_entity_presave().
     */
    #[Hook('entity_presave')]
    public function entityPresave(EntityInterface $entity)
    {
        //die($entity->bundle()); exit;
        if ($entity->bundle() == 'article' && $entity->getEntityTypeId() == 'node') {
            // Modify a field value
            $entity->setTitle($entity->getTitle() . ' - ' . date('Y-m-d'));
            // CAUTION: Do not call $entity->save() inside this hook, as it happens automatically.
        }
    }
}
