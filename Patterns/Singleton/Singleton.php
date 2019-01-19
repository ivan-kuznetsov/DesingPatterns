<?php

namespace Patterns\Singleton;

class Singleton
{
    private static $instance;
    protected $id;

    protected function __construct($id)
    {
        $this->id = $id;
    }

    public static function getInstance(): Proxy
    {
        if (static::$instance === null) {
            static::$instance = new Proxy(mt_rand(1, 1000));
        }

        return static::$instance;
    }

    public function getId()
    {
        return $this->id;
    }
}