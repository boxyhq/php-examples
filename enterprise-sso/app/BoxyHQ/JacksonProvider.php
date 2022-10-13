<?php

namespace App\BoxyHQ;

use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;
use GuzzleHttp\RequestOptions;

class JacksonProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The SAML Jackson instance host.
     *
     * @var string
     */
    protected $host;

    /**
     * Set the SAML Jackson instance host.
     *
     * @param  string|null  $host
     * @return $this
     */
    public function setHost($host)
    {
        if (! empty($host)) {
            $this->host = rtrim($host, '/');
        }

        return $this;
    }

    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase($this->host . '/api/oauth/authorize', $state);
    }
 
    protected function getTokenUrl()
    {
        return $this->host . '/api/oauth/token';
    }
 
    protected function getUserByToken($token)
    {
        $response = $this->getHttpClient()->get($this->host . '/api/oauth/userinfo', [
            RequestOptions::QUERY => ['access_token' => $token],
        ]);

        return json_decode($response->getBody(), true);
    }
 
    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['firstName'].' '.$user['lastName'],
            'first_name' => $user['firstName'],
            'last_name' => $user['lastName'],
            'requested' => $user['requested'],
            'nickname' => null,
            'avatar' => null,
        ]);
    }
}
