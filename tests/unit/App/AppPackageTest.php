<?php

namespace Bone\Test;

use Bone\App\Controller\IndexController;
use Barnacle\Container;
use Bone\View\ViewEngine;
use Bone\Server\SiteConfig;
use Bone\App\AppPackage;
use Codeception\TestCase\Test;
use Bone\Router\Router;
use Laminas\I18n\Translator\Translator;

class AppPackageTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /** @var AppPackage $package */
    protected $package;

    /**
     * @throws \Exception
     */
    protected function _before()
    {
        $this->package = new AppPackage();
    }

    protected function _after()
    {
        unset($this->package);
    }
}
