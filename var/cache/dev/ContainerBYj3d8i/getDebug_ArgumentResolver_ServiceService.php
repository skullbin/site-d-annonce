<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\AccountController::login' => ['privates', '.service_locator.oHXyyai', 'get_ServiceLocator_OHXyyaiService.php', true],
    'App\\Controller\\AccountController::profile' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\AccountController::register' => ['privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true],
    'App\\Controller\\AccountController::updatePassword' => ['privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true],
    'App\\Controller\\AdController::create' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\AdController::delete' => ['privates', '.service_locator.0c_I6Iz', 'get_ServiceLocator_0cI6IzService.php', true],
    'App\\Controller\\AdController::edit' => ['privates', '.service_locator.0c_I6Iz', 'get_ServiceLocator_0cI6IzService.php', true],
    'App\\Controller\\AdController::index' => ['privates', '.service_locator.m2hZxMx', 'get_ServiceLocator_M2hZxMxService.php', true],
    'App\\Controller\\AdController::show' => ['privates', '.service_locator.5BH.j.y', 'get_ServiceLocator_5BH_J_YService.php', true],
    'App\\Controller\\UserController::index' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\AccountController:login' => ['privates', '.service_locator.oHXyyai', 'get_ServiceLocator_OHXyyaiService.php', true],
    'App\\Controller\\AccountController:profile' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\AccountController:register' => ['privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true],
    'App\\Controller\\AccountController:updatePassword' => ['privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true],
    'App\\Controller\\AdController:create' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\AdController:delete' => ['privates', '.service_locator.0c_I6Iz', 'get_ServiceLocator_0cI6IzService.php', true],
    'App\\Controller\\AdController:edit' => ['privates', '.service_locator.0c_I6Iz', 'get_ServiceLocator_0cI6IzService.php', true],
    'App\\Controller\\AdController:index' => ['privates', '.service_locator.m2hZxMx', 'get_ServiceLocator_M2hZxMxService.php', true],
    'App\\Controller\\AdController:show' => ['privates', '.service_locator.5BH.j.y', 'get_ServiceLocator_5BH_J_YService.php', true],
    'App\\Controller\\UserController:index' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));