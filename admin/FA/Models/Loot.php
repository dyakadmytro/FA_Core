<?php

namespace FA;

use FA\Models\AbstractFAModel;

class Loot extends AbstractFAModel
{
    private \App\Models\Loot $model;

    public function __construct(\App\Models\Loot $model)
    {
        $this->model = $model;
    }

    public function getId()
    {
        return $this->model->id;
    }

    public function getName()
    {
        return $this->model->name;
    }

    public function getDescription()
    {
        return $this->model->description;
    }

    public function getType()
    {
        return $this->model->type;
    }
//todo profile image can be something abstractive. I future it can be animations set or some other type
    public function getProfileImage()
    {
        return $this->model->profile_img;
    }
}
