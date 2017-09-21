<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;
/**
 *
 */
class Periods extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("periods", ['query' => $query]);
    }

    public function get($id)
    {
        return $this->getRequest("periods/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("periods/{$id}", ['json' => $params]);
    }

    public function bill($id)
    {
        return $this->postRequest("periods/{$id}/bill");
    }
}
