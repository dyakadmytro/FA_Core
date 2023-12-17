<?php

namespace FA\Models;


class Hero extends AbstractFAModel
{
    protected $uuid;
    protected $health;
    protected $strength;
    protected $agility;
    protected $luck;

    const subActive = [
        'health', 'strength', 'agility', 'luck'
    ];

    const addActive = [
        'health', 'strength', 'agility', 'luck'
    ];

    /**
     * @param $uuid
     * @param $health
     * @param $strength
     * @param $agility
     * @param $luck
     */
    public function __construct($uuid, $health, $strength, $agility, $luck)
    {
        $this->uuid = $uuid;
        $this->health = $health;
        $this->strength = $strength;
        $this->agility = $agility;
        $this->luck = $luck;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return mixed
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * @return mixed
     */
    public function getLuck()
    {
        return $this->luck;
    }


    public function sub(string $attr, int $value): void
    {
        if(!in_array($attr, $this::subActive)) {
            // log it
            return;
        }
        if($value < 0) {
            // log it
            return;
        }
        $result = $this->$attr - $value;
        if($result < 0) $result = 1;
        $this->setAttrValue($attr, $result);
    }

    protected function setAttrValue(string $attr, int $value): void
    {
        $this->$attr = $value;
    }
}

