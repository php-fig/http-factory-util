<?php

namespace Psr\Http\Message;

interface StreamFactoryAwareInterface{

    public function setStreamFactory(StreamFactoryInterface $streamFactory): StreamFactoryAwareInterface;

}
