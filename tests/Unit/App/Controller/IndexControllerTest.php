<?php

namespace Tests\Unit\App\Controller;

use Barnacle\Container;
use Bone\App\Controller\IndexController;
use Bone\Controller\Init;
use Bone\Http\Response\HtmlResponse;
use Bone\Router\Router;
use Bone\Server\SiteConfig;
use Bone\View\ViewEngineInterface;
use Bone\Contracts\Service\TranslatorInterface;
use Codeception\Test\Unit;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Uri;

class IndexControllerTest extends Unit
{
    /**
     * @var \Tests\Support\UnitTester
     */
    protected $tester;

    /** @var IndexController */
    protected $controller;

    /**
     * @throws \Exception
     */
    protected function _before()
    {
        $container = new Container();

        $router = new Router();
        $view = $this->getMockBuilder(ViewEngineInterface::class)->getMock();
        $view->expects($this->any())->method('render')->willReturn('x');
        $translator = $this->getMockBuilder(TranslatorInterface::class)->getMock();
        $site = $this->getMockBuilder(SiteConfig::class)->disableOriginalConstructor()->getMock();

        $container[Router::class] = $router;
        $container[SiteConfig::class] = $site;
        $container[TranslatorInterface::class] = $translator;

        $view = $this->make(ViewEngine::class, ['render' => function() {
            return 'rendered content';
        }]);
        $container[ViewEngine::class] = $view;
        $this->controller = new IndexController();
        $this->controller = Init::controller($this->controller, $container);
    }

    protected function _after()
    {
        unset($this->controller);
    }

    public function testIndexAction()
    {
        $this->assertInstanceOf(HtmlResponse::class, $this->controller->index(new ServerRequest([], [], new Uri('/')), []));
    }
}
