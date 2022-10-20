<?php

namespace Psr\Http\Message;

interface UriFactoryAwareInterface{

    public function setUriFactory(UriFactoryInterface $uriFactory): UriFactoryAwareInterface;

}
