<?php

namespace Others\CreateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OthersCreateBundle extends Bundle
{
    public function getParent()
    {
        return 'SymfonyCmfCreateBundle';
    }
}
