<?php
namespace Joelsonm\Vindi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 *
 */
 class Vindi extends Facade
 {
     /**
      * Get the registered name of the component.
      *
      * @return string
      */
     protected static function getFacadeAccessor() { return 'Joelsonm\Vindi'; }
 }
