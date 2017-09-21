<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class Messages extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("messages", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->postRequest("messages", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("messages/{$id}");
    }
}
