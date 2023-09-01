<?php

namespace App\Models\FA;


class Effect extends FaModelAbstract
{
    private \App\Models\Effect $model;

    public function __construct(\App\Models\Effect $model)
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

    public function getProfileImage()
    {
        return $this->model->profile_img;
    }

    public function getType()
    {
        return $this->model->type;
    }

    public function getDirection()
    {
        return $this->model->direction;
    }

    public function getFireOnEvent()
    {
        return $this->model->fire_on_event;
    }

    public function getValue()
    {
        return $this->model->value;
    }

    public function getScale()
    {
        return $this->model->scale;
    }
}
