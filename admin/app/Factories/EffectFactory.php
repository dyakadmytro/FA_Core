<?php

namespace App\Factories;

use App\Models\FA\Effect as EffectFA;
use App\Models\Effect;
use Illuminate\Database\Eloquent\Model;

class EffectFactory extends FaFactoryAbstract
{
    public function makeFromEloquent(Model $model): EffectFA {
        if (!$model instanceof Effect) throw new \Exception('The model should be '. Effect::class);

        return new EffectFA($model);
    }
}
