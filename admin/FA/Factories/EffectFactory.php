<?php

namespace Factories;

use App\Models\Effect;
use Contracts\EloquentToFAModel;
use FA\Effect as EffectFA;
use Illuminate\Database\Eloquent\Model;

class EffectFactory implements EloquentToFAModel
{
    public function makeFromEloquent(Model $model): EffectFA {
        if (!$model instanceof Effect) throw new \Exception('The model should be '. Effect::class);

        return new EffectFA($model);
    }
}
