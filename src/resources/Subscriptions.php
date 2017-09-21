<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;

class Subscriptions extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("subscriptions", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->postRequest("subscriptions", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("subscriptions/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("subscriptions/{$id}", ['json' => $params]);
    }

    public function delete($id)
    {
        return $this->deleteRequest("subscriptions/{$id}");
    }

    public function renew($id)
    {
        return $this->postRequest("subscriptions/{$id}/renew");
    }

    public function reactivate($id)
    {
        return $this->postRequest("subscriptions/{$id}/reactivate");
    }
}
