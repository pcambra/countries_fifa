<?php

/**
 * @file
 * Contains \Drupal\countries_fifa\CountriesFifaBundle.
 */

namespace Drupal\countries_fifa;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * FIFA country manager dependency injection container.
 */
class CountriesFifaBundle extends Bundle {

  /**
   * Implements \Symfony\Component\HttpKernel\Bundle\BundleInterface::build().
   */
  public function build(ContainerBuilder $container) {
    $container->addCompilerPass(new FifaCountryManagerPass());
  }
}
