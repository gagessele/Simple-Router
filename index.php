<?php

#[Attribute()]
class Route
{
    public function __construct(
        public string $route,
        public array $methods
    ) {
    }
}

abstract class AbstractController
{
    protected static array $instances;

    function __construct()
    {
        self::$instances[] = $this;
    }

    static function geetInstances()
    {
        return self::$instances;
    }
}

class Controller extends AbstractController
{

    #[Route(route: "/get", methods: ['GET'])]
    function soma()
    {
        print("soma");
    }

    #[Route(route: "/post", methods: ['POST'])]
    function subtracao()
    {
        print("subtracao");
    }
}
