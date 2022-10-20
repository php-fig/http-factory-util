<?php

namespace Psr\Http\Message;

interface UploadedFileFactoryAwareInterface{

    public function setUploadedFileFactory(UploadedFileFactoryInterface $uploadedFileFactory): UploadedFileFactoryAwareInterface;

}
