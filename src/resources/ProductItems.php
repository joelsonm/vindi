<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class ProductItems extends Resource
{
    public function get($id)
    {
        return $this->getRequest("product_items/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("product_items/{$id}", ['json' => $params]);
    }

    public function delete($id)
    {
        return $this->deleteRequest("product_items/{$id}");
    }

    public function create(array $params)
    {
        return $this->postRequest("product_items", ['json' => $params]);
    }
}
