<?php

namespace Drupal\my_custom_module\Hook;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Hook\Attribute\Hook;
/**
 * Hook implementations for my_custom_module.
 */
class MyCustomModuleHooks
{
    /**
     * Implements hook_help().
     */
    #[Hook('help')]
    public function help($route_name, RouteMatchInterface $route_match)
    {
        switch ($route_name) {
            case 'help.page.my_custom_module':
                $output = '';
                $output .= '<h3>' . t('About') . '</h3>';
                $output .= '<p>' . t('This custom module demonstrates how to implement hooks.') . '</p>';
                return $output;
        }
    }
}
