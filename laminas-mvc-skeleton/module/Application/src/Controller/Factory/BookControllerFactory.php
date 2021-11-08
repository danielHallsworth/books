<?php

namespace Application\Controller\Factory;

use Application\Controller\BookController;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;


/**
 * Class BookControllerFactory
 * @package Application\Controller\Factory
 */
class BookControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): BookController
    {
        return new BookController();
    }
}