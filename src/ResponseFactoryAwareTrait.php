<?php

namespace Psr\Http\Message;

trait ResponseFactoryAwareTrait{

    /** @var \Psr\Http\Message\ResponseFactoryInterface */
    protected $responseFactory;

    public function setResponseFactory(ResponseFactoryInterface $responseFactory): ResponseFactoryAwareInterface{
        $this->responseFactory = $responseFactory;

        return $this;
    }

}
