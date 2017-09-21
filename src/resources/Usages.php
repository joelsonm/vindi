<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;

class Usages extends Resource
{
    public function create(array $params)
    {
        return $this->postRequest("usages", ['json' => $params]);
    }

    public function delete($id)
    {
        return $this->deleteRequest("usages/{$id}");
    }
}
