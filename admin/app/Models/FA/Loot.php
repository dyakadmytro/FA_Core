<?php

namespace App\Models\FA;

class Loot extends FaModelAbstract
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

    public function getProfileImage()
    {
        return $this->model->profile_img;
    }
}
