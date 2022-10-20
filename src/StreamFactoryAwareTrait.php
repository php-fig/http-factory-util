<?php

namespace Psr\Http\Message;

trait StreamFactoryAwareTrait{

    /** @var \Psr\Http\Message\StreamFactoryInterface */
    protected $streamFactory;

    public function setStreamFactory(StreamFactoryInterface $streamFactory): StreamFactoryAwareInterface{
        $this->streamFactory = $streamFactory;

        return $this;
    }

}
