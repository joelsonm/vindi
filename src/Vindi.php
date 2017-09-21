<?php

namespace Joelsonm\Vindi;
/**
 *
 */
class Vindi
{
    function __call($method, $arguments)
    {
        dd($method, $arguments);
    }
}
