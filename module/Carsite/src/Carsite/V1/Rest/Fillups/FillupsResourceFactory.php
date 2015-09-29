<?php
namespace Carsite\V1\Rest\Fillups;

class FillupsResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('Carsite\V1\Rest\Fillups\FillupsMapper');
        return new FillupsResource($mapper);
    }
}
