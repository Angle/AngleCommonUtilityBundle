<?php

namespace Angle\Common\UtilityBundle\Cookie;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Cookie;

/**
 * RedirectResponseWithCookie represents an HTTP response doing a redirect and sending cookies
 */
class RedirectResponseWithCookie extends RedirectResponse
{

    /**
     * Creates a redirect response so that it conforms to the rules defined for a redirect status code.
     *
     * @param string $url The URL to redirect to
     * @param integer $status The status code (302 by default)
     * @param array $cookies An array of Cookie objects
     * @param array $headers An array of Header configuration
     * @throws \InvalidArgumentException
     */
    public function __construct($url, $status = 302, $cookies = array(), $headers = array())
    {
        parent::__construct($url, $status);

        foreach ($cookies as $cookie) {
            if (!$cookie instanceof Cookie) {
                throw new \InvalidArgumentException(sprintf('One of third parameter array is not a valid Cookie object.'));
            }
            $this->headers->setCookie($cookie);
        }

        foreach ($headers as $key => $value) {
            $this->headers->set($key, $value);
        }

    }

}