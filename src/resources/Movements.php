<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class Movements extends Resource
{
    public function create(array $params)
    {
        return $this->postRequest("movements", ['json' => $params]);
    }
}
