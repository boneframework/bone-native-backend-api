<?php

namespace Bone\App;

use Bone\App\Controller\IndexController;
use Bone\Controller\Init;
use Bone\Http\Middleware\JsonParse;
use Bone\OAuth2\Http\Middleware\ResourceServerMiddleware;
use Bone\Router\Router;
use Bone\Router\RouterConfigInterface;
use Barnacle\RegistrationInterface;
use Barnacle\Container;
use Bone\View\ViewRegistrationInterface;

class AppPackage implements RegistrationInterface, RouterConfigInterface, ViewRegistrationInterface
{
    public function addToContainer(Container $c): void
    {
        $c[IndexController::class] = $c->factory(function (Container $c) {
            $controller = new IndexController();

            return Init::controller($controller, $c);
        });
    }

    public function addViews(): array
    {
        return [
            'app' => __DIR__ . '/View/index',
            'error' => __DIR__ . '/View/error',
            'layouts' => __DIR__ . '/View/layouts',
        ];
    }

    public function addViewExtensions(Container $c): array
    {
        return [];
    }

    public function addRoutes(Container $c, Router $router): Router
    {
        $auth = $c->get(ResourceServerMiddleware::class);
        $router->map('GET', '/', [IndexController::class, 'index']);
        $router->map('GET', '/listings', [IndexController::class, 'listings'])->middleware($auth);
        $router->map('POST', '/listings', [IndexController::class, 'addListing'])
            ->middlewares([$auth, new JsonParse()]);

        return $router;
    }
}
