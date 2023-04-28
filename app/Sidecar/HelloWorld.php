<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;

class HelloWorld extends LambdaFunction
{
  public function handler()
  {
    return 'resources/lambda/index.handler';
  }

  public function package()
  {
    return [
      'resources/lambda/index.js',
    ];
  }
}