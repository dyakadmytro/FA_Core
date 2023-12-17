<?php

namespace Factories;

use App\Models\Hero;
use Contracts\EloquentToFAModel;
use FA\Models\Hero as HeroFA;
use Illuminate\Database\Eloquent\Model;

class HeroFactory implements EloquentToFAModel
{
    public function makeFromEloquent(Model $model): HeroFA {
        if (!$model instanceof Hero) throw new \Exception('The model should be '. Hero::class);
        return new HeroFA(100, 100, 100, 100, 100);
    }
}
