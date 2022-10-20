<?php

namespace Psr\Http\Message;

trait ServerRequestFactoryAwareTrait{

    /** @var \Psr\Http\Message\ServerRequestFactoryInterface */
    protected $serverRequestFactory;

    public function setServerRequestFactory(ServerRequestFactoryInterface $serverRequestFactory): ServerRequestFactoryAwareInterface{
        $this->serverRequestFactory = $serverRequestFactory;

        return $this;
    }

}
