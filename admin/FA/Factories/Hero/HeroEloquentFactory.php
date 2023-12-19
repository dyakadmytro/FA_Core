<?php
namespace Hero;

use Contracts\AbstractFAFactory;
use FA\Models\AbstractFAModel;
use FA\Models\Hero as HeroFA;
use Illuminate\Database\Eloquent\Model;

class HeroEloquentFactory extends AbstractFAFactory
{
    public function make($data): AbstractFAModel
    {
        if (!$data instanceof Model) throw new \Exception('The model should be '. Model::class);

        return new HeroFA(100, 100, 100, 100, 100);
    }

}
