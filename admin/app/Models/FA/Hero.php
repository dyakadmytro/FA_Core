<?php

namespace App\Models\FA;

class Hero
{
    private \App\Models\Hero $model;

    public function __construct(
        \App\Models\Hero $model,
    )
    {
        $this->model = $model;
    }

    // Getters for each property

    public function getHeroId()
    {
        return $this->model->heroId;
    }

    public function getName()
    {
        return $this->model->name;
    }

    public function getNick()
    {
        return $this->model->nick;
    }

    public function getDescription()
    {
        return $this->model->description;
    }

    public function getProfileImg()
    {
        return $this->model->profileImg;
    }

    public function getHealth()
    {
        return $this->model->health;
    }

    public function getStrength()
    {
        return $this->model->strength;
    }

    public function getAgility()
    {
        return $this->model->agility;
    }

    public function getLuck()
    {
        return $this->model->luck;
    }
}

