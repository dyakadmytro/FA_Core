<?php

namespace App\Factories;

use App\Models\FA\Hero as HeroFA;
use App\Models\Hero;
use Illuminate\Database\Eloquent\Model;

class HeroFactory
{
    public function makeFromEloquent(Model $model): HeroFA {
        if (!$model instanceof Hero) throw new \Exception('The model should be '. Hero::class);
        return new HeroFA($model);
    }
}
