<?php

namespace Bitmyth\Passport;

use Laravel\Passport\Token;

class TokenRepository extends \Laravel\Passport\TokenRepository
{
    public function find($id)
    {
        return new Token(['id' => $id]);
    }

    public function isAccessTokenRevoked($id)
    {
        return false;
    }

}
