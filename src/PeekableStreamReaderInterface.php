<?php
namespace Toxygene\PeekableStreamReaderDecorator;

use Toxygene\StreamReader\StreamReaderInterface;

interface PeekableStreamReaderInterface extends StreamReaderInterface
{

    /**
     * Get the current peek column number
     *
     * @var integer
     */
    public function getPeekColumnNumber();

    /**
     * Get the current peek line number
     *
     * @var integer
     */
    public function getPeekLineNumber();

    /**
     * Check if there are any more characters available to peek at in the decorated stream
     *
     * @return boolean
     */
    public function isPeekEmpty();

    /**
     * Peek ahead at the stream
     *
     * @param integer $count
     * @return string
     */
    public function peek($count = 1);

    /**
     * Read the stream to the peek counter
     *
     * @return string
     */
    public function readCharsToPeek();

    /**
     * Reset the peek offset
     *
     * @return $this
     */
    public function resetPeek();

}
