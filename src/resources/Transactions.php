<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class Transactions extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("transactions", ['query' => $query]);
    }

    public function create($id, array $params)
    {
        return $this->postRequest("transactions/{$id}/charge", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("transactions/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("transactions/{$id}", ['json' => $params]);
    }
}
