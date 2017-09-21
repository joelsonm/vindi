<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;

class Products extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("products", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->getRequest("products", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("products/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("products/{$id}", ['json' => $params]);
    }
}
