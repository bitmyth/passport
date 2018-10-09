<?php

namespace Bitmyth\Passport;

class ClientRepository extends \Laravel\Passport\ClientRepository
{
    /**
     * Get a client by the given ID.
     *
     * @param  int $id
     * @return \Laravel\Passport\Client|null
     */
    public function find($id)
    {
        return null;
    }

    public function revoked($id)
    {
        return false;
    }
}
