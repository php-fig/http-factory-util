<?php

namespace Psr\Http\Message;

trait UploadedFileFactoryAwareTrait{

    /** @var \Psr\Http\Message\UploadedFileFactoryInterface */
    protected $uploadedFileFactory;

    public function setUploadedFileFactory(UploadedFileFactoryInterface $uploadedFileFactory): UploadedFileFactoryAwareInterface{
        $this->uploadedFileFactory = $uploadedFileFactory;

        return $this;
    }

}
