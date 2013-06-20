<?php
/**
 * @file
 * Contains Drupal\countries_fifa\FifaCountryManagerPass.
 */

namespace Drupal\countries_fifa;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Replaces country list by the one provided by the FIFA.
 */
class FifaCountryManagerPass implements CompilerPassInterface {

  /**
   * Replaces country list by the one provided by the FIFA.
   *
   * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
   *   The container to process.
   */
  public function process(ContainerBuilder $container) {
    $definition = $container->getDefinition('country_manager');
    $definition->setClass('Drupal\countries_fifa\FifaCountryManager');
  }

}
