<?php


use \FA\Models\AbstractFAModel;

class HeroService extends \Contracts\AbstractFAModelServiceProvider
{

    public function create( $data ): AbstractFAModel {
        return $this->modelFactory->makeFromEloquent($data);
    }
}
