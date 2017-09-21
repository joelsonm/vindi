<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;

class Plans extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("plans", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->postRequest("plans", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("plans/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("plans/{$id}", ['json' => $params]);
    }
}
