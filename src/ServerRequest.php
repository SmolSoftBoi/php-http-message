<?php

namespace EpicKris\Http\Message;

use Psr\Http\Message\ServerRequestInterface;

/**
 * HTTP server request.
 *
 * @package EpicKris\Http\Message
 */
class ServerRequest extends Request implements ServerRequestInterface
{
    /**
     * @var array Server parameters.
     */
    protected $serverParams = [];

    /**
     * @var array Cookie parameters.
     */
    protected $cookieParams = [];

    /**
     * @var array Query parameters.
     */
    protected $queryParams = [];

    /**
     * @var UploadedFile[] Uploaded files.
     */
    protected $uploadedFiles = [];

    /**
     * @var array|object|null Parsed body.
     */
    protected $parsedBody = null;

    /**
     * @var array Attributes.
     */
    protected $attributes = [];

    /**
     * Get server parameters.
     *
     * @return array Returns server parameters.
     */
    public function getServerParams()
    {
        return $this->serverParams;
    }

    /**
     * Get cookie parameters.
     *
     * @return array Cookie parameters.
     */
    public function getCookieParams()
    {
        return $this->cookieParams;
    }

    /**
     * Get query parameters.
     *
     * @return array Query parameters.
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Get uploaded files.
     *
     * @return UploadedFile[] Returns uploaded files.
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }

    /**
     * Parsed body.
     *
     * @return null|array|object Returns parsed body.
     */
    public function getParsedBody()
    {
        return $this->parsedBody;
    }

    /**
     * Get attributes
     *
     * @return array Attributes derived from the request.
     */
    public function getAttributes()
    {
        return $this->getAttributes();
    }
}
