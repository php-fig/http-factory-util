<?php

namespace Psr\Http\Message;

interface ServerRequestFactoryAwareInterface{

    public function setServerRequestFactory(ServerRequestFactoryInterface $serverRequestFactory): ServerRequestFactoryAwareInterface;

}
