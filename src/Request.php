<?php

namespace EpicKris\Http\Message;

use Psr\Http\Message\RequestInterface;

/**
 * HTTP request.
 *
 * @package EpicKris\Http\Message
 */
class Request extends Message implements RequestInterface
{
    /**
     * @var string Request target.
     */
    protected $requestTarget = '';

    /**
     * @var string Method.
     */
    protected $method = '';

    /**
     * @var Uri URI.
     */
    protected $uri;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->uri = new Uri();
    }

    /**
     * Get request target.
     *
     * @return string Returns request target.
     */
    public function getRequestTarget()
    {
        return $this->requestTarget;
    }

    /**
     * Get method.
     *
     * @return string Returns method.
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Get URI.
     *
     * @return UriInterface Returns URI.
     */
    public function getUri()
    {
        return $this->uri;
    }
}
