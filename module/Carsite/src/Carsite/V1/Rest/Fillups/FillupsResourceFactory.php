<?php
namespace Carsite\V1\Rest\Fillups;

class FillupsResourceFactory
{
    public function __invoke($services)
    {
        return new FillupsResource();
    }
}
