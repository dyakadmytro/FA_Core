<?php

namespace App\Factories;

use App\Models\FA\FaModelAbstract;
use Illuminate\Database\Eloquent\Model;

abstract class FaFactoryAbstract
{
    abstract public function makeFromEloquent(Model $model): FaModelAbstract;
}
