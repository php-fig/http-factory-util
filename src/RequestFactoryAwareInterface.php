<?php

namespace Psr\Http\Message;

interface RequestFactoryAwareInterface{

    public function setRequestFactory(RequestFactoryInterface $requestFactory): RequestFactoryAwareInterface;

}
