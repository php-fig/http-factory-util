<?php

namespace Psr\Http\Message;

trait UriFactoryAwareTrait{

    /** @var \Psr\Http\Message\UriFactoryInterface */
    protected $uriFactory;

    public function setUriFactory(UriFactoryInterface $uriFactory): UriFactoryAwareInterface{
        $this->uriFactory = $uriFactory;

        return $this;
    }

}
