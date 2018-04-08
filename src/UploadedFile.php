<?php

namespace EpicKris\Http\Message;

use Psr\Http\Message\UploadedFileInterface;

/**
 * HTTP Uploaded file.
 *
 * @package EpicKris\Http\Message
 */
class UploadedFile implements UploadedFileInterface
{
    /**
     * @var Stream Stream.
     */
    protected $stream;

    /**
     * Get stream.
     *
     * @return Stream            Returns stream.
     * @throws \RuntimeException If no stream is available.
     */
    public function getStream()
    {
        if (! isset($stream)) {
            throw new \RuntimeException('Stream is not available.');
        }

        return $this->stream;
    }
}
