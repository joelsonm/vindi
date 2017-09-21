<?php

namespace Joelsonm\Vindi\Resources;

use Joelsonm\Vindi\Resources\Resource;

class PaymentProfiles extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("payment_profiles", ['query' => $query]);
    }

    public function create(array $params)
    {
        return $this->postRequest("payment_profiles", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("payment_profiles/{$id}");
    }

    public function delete($id)
    {
        return $this->deleteRequest("payment_profiles/{$id}");
    }

    public function verify($id)
    {
        return $this->postRequest("payment_profiles/{$id}/verify");
    }
}
