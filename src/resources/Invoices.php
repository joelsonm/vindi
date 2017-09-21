<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class Invoices extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("invoices", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->postRequest("invoices", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("invoices/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("invoices/{$id}", ['json' => $params]);
    }

    public function delete($id)
    {
        return $this->deleteRequest("invoices/{$id}");
    }

    public function retry($id)
    {
        return $this->postRequest("invoices/{$id}/retry");
    }
}
