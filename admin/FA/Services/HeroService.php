<?php


use App\Models\Hero;
use FA\Models\Hero as HeroFA;
use Factories\HeroFactory;

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
