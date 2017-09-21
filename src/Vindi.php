<?php

namespace Joelsonm\Vindi;
/**
 *
 */
class Vindi
{
    private $apikey;

    public function __construct($apikey)
    {
        $this->apikey = $apikey;
    }

    function __call($method, $arguments = null)
    {
        $class = '\\Joelsonm\Vindi\Resources\\' . ucfirst($method);

        if (!class_exists($class, true)) {
            throw new \Exception("{$class} not found");
        }

        return new $class($this->apikey);
    }
}
