<?php

namespace Contracts;

use FA\Models\AbstractFAModel;

abstract class AbstractFAFactory
{
    abstract public function make($data): AbstractFAModel;
}
