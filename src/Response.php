<?php

namespace EpicKris\Http\Message;

use Psr\Http\Message\ResponseInterface;

/**
 * HTTP response.
 *
 * @package EpicKris\Http\Message
 */
class Response extends Message implements ResponseInterface
{
    /**
     * @var int Status code.
     */
    protected $statusCode = 0;

    protected $reasonPhrase = '';

    /**
     * Get status code.
     *
     * @return int Returns status code.
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Get reason phrase.
     *
     * @return string Returns reason phrase.
     */
    public function getReasonPhrase()
    {
        return $this->reasonPhrase;
    }
}
