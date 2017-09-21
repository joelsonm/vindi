<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class Customers extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("customers", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->postRequest("customers", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("customers/{$id}");
    }

    public function delete($id)
    {
        return $this->deleteRequest("customers/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("customers/{$id}", ['json' => $params]);
    }

    public function unarchive($id)
    {
        return $this->postRequest("customers/{$id}/unarchive");
    }
}
