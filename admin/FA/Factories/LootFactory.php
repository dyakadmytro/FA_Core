<?php

namespace Factories;


use App\Models\Loot;
use Contracts\EloquentToFAModel;
use FA\Loot as LootFA;
use Illuminate\Database\Eloquent\Model;

class LootFactory implements EloquentToFAModel
{
    public function makeFromEloquent(Model $model): LootFA {
        if (!$model instanceof Loot) throw new \Exception('The model should be '. Loot::class);
        return new LootFA($model);
    }
}
