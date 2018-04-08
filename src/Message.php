<?php

namespace EpicKris\Http\Message;

use Psr\Http\Message\MessageInterface;

/**
 * HTTP message.
 *
 * @package EpicKris\Http\Message
 */
class Message implements MessageInterface
{
    /**
     * @var string Protocol version.
     */
    protected $protocolVersion = '';

    /**
     * @var string[] Headers.
     */
    protected $headers = [];

    /**
     * @var Stream Body.
     */
    protected $body;

    /**
     * @var bool Secure.
     */
    protected $secure = false;

    /**
     * Message constructor.
     */
    public function __construct()
    {
        $this->body = new Stream();
    }

    /**
     * Get protocol version
     *
     * @return string Returns protocol version.
     */
    public function getProtocolVersion()
    {
        return $this->protocolVersion;
    }

    /**
     * Get headers.
     *
     * @return string[] Returns headers.
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Gets body.
     *
     * @return StreamInterface Returns body.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get secure.
     *
     * @return bool Returns true if secure, else false.
     */
    public function getSecure()
    {
        return $this->secure;
    }
}
