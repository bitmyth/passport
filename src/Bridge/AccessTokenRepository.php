<?php

namespace Bitmyth\Passport\Bridge;

use DateTime;
use Bitmyth\Passport\TokenRepository;
use Illuminate\Contracts\Events\Dispatcher;
use Laravel\Passport\Events\AccessTokenCreated;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;

class AccessTokenRepository extends \Laravel\Passport\Bridge\AccessTokenRepository implements AccessTokenRepositoryInterface
{
    /**
     * Create a new repository instance.
     *
     * @param  \Bitmyth\Passport\TokenRepository  $tokenRepository
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     */
    public function __construct(TokenRepository $tokenRepository, Dispatcher $events)
    {
        $this->events = $events;
        $this->tokenRepository = $tokenRepository;
    }

    public function isAccessTokenRevoked($tokenId)
    {
        return $this->tokenRepository->isAccessTokenRevoked($tokenId);
    }
}
