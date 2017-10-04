<?php

namespace Drupal\bbb_workflow\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Drupal\bbb_workflow\Controller\PanelizerIPEController;
use Symfony\Component\Routing\RouteCollection;

/**
 * Reacts to routing events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    $route = $collection->get('panelizer.panels_ipe.revert_to_default');
    if ($route) {
      $route->setDefault('_controller', PanelizerIPEController::class . '::revertToDefault');
    }
  }

}
