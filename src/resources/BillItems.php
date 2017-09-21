<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class BillItems extends Resource
{
    public function get($id)
    {
        return $this->getRequest("bill_items/{$id}");
    }
}
