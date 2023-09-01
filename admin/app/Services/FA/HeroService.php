<?php

namespace App\Services\FA;

use App\Factories\HeroFactory;
use App\Models\FA\Hero as HeroFA;
use \App\Models\Hero;

class HeroService
{
    private HeroFactory $heroFactory;
    // composition or aggregation for factory?
    public function __construct(HeroFactory $heroFactory) {
        $this->heroFactory = $heroFactory;
    }

    public function createHero(Hero $hero ): HeroFA {
        return $this->heroFactory->makeFromEloquent($hero);
    }
}
