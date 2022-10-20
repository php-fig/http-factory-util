<?php

namespace Psr\Http\Message;

trait RequestFactoryAwareTrait{

    /** @var \Psr\Http\Message\RequestFactoryInterface */
    protected $requestFactory;

    public function setRequestFactory(RequestFactoryInterface $requestFactory): RequestFactoryAwareInterface{
        $this->requestFactory = $requestFactory;

        return $this;
    }

}
