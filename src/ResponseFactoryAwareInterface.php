<?php

namespace Psr\Http\Message;

interface ResponseFactoryAwareInterface{

    public function setResponseFactory(ResponseFactoryInterface $responseFactory): ResponseFactoryAwareInterface;

}
