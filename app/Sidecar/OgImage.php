<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;

class OgImage extends LambdaFunction
{
    public function handler()
    {
        return 'resources/lambda/image.handler';
    }

    public function package()
    {
        return [
            'resources/lambda',
        ];
    }
}