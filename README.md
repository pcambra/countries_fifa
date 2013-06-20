Drupal 8 services dependency injection
======================================

Demonstrative example on how to swap a service with dependency injection.

Motivation
----------

Drupal 8 provides swapable services that can be altered or even replaced by using dependency injection compiler passes. The purpose of this module is to display a straightforward way to do it.
The example will replace the countries service by the country list provided by another authorised entity, such as the FIFA, which works with a different set of rules :).

Step 1: Create the module structure
-----------------------------------

As for Drupal 8, you need a .info.yml file declaring your module and a .module file.
Alternatively, we're relying on PSR-0 for loading the libraries, so a lib/Drupal/countries_fifa folder will be needed too. You could use whatever structure inside lib/Drupal folder if you update the namespaces accordingly.

Step 2: Building an alternative service
---------------------------------------

Declaring a new service in Drupal 8 has two parts, a .services.yml file and the class that provides the service.

This is the countries_fifa.services.yml file, note that you need to respect the namespaces to get PSR-0 working. You could send whatever arguments you might need, in this case I wanted to keep it simple.
<code>
services:
  fifa_country_manager:
    class: Drupal\countries_fifa\FifaCountryManager
    arguments: [{  }, {  }]
</code>

The class we need is extending/replacing the country list, so it needs to extend & include CountryManagerInterface.

<code>
namespace Drupal\countries_fifa;

use Drupal\Core\Locale\CountryManagerInterface;

/**
 * Provides list of countries coming from the FIFA.
 */
class FifaCountryManager implements CountryManagerInterface {
</code>

Step 3: The compiler pass
-------------------------

Service containers are compiled into a cached file that lives in our files/php folder, before this happen, the configuration files are processed by the compiler passes that build this file that is then used by Drupal and its symfony components to locate and use the services.

What we're doing in this compiler pass is telling the Depenency injection container that instead of using the default country list provided by the service country_manager, uses ours.

<code>
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
</code>

We could potentially do other stuff in here, such as validations and alterations, not just plain replacement. Think of this as of a very sophisticated hook_alter.

Step 4: The Bundle
------------------

There's still another thing we need to do in order to get the service altered, we need to declare a Bundle component that will add the compiler pass declared on step 3 using addCompilerPass method.

<code>
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
</code>

References
----------

* http://drupal.org/node/2019329
* http://symfony.com/doc/current/cookbook/bundles/override.html
* http://symfony.com/doc/current/cookbook/service_container/compiler_passes.html
* http://symfony.com/doc/current/components/dependency_injection/tags.html
* http://richardmiller.co.uk/2012/02/15/symfony2-service-container-compiler-passes/
* http://katbailey.github.io/2013/05/11/dependency-injection/
* http://en.wikipedia.org/wiki/List_of_FIFA_country_codes
* http://en.wikipedia.org/wiki/Comparison_of_IOC,_FIFA,_and_ISO_3166_country_codes
