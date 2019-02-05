<?php

namespace IceMaD\LeekWarsApiBundle;

use IceMaD\LeekWarsApiBundle\DependencyInjection\ServicesExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LeekWarsApiBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ServicesExtension();
    }
}
