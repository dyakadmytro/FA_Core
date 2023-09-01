<?php

namespace App\Factories;


use App\Models\FA\Loot as LootFA;
use App\Models\Loot;
use Illuminate\Database\Eloquent\Model;

class LootFactory extends FaFactoryAbstract
{
    public function makeFromEloquent(Model $model): LootFA {
        if (!$model instanceof Loot) throw new \Exception('The model should be '. Loot::class);
        return new LootFA($model);
    }
}
