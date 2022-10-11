<?php
require_once 'Vehicle.php';

class Car extends Vehicle{

    private string $energy;   

    private int $energyLevel = 40;
    // peut etre definie comme finale  en ajoutant le mot clef "final" au debut de la declaration de la constante de classe.
    // ainsi la constant ne pourra pas etre redefinie par les calsse enfant.
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct($color, $nbSeats,$energy){
       parent::__construct($color, $nbSeats);
        $this->energy = $energy;        
    }
    public function changeWheel(): string{
        return 'Changed !<br>' .  PHP_EOL;
    }
    public function start(): string{       
        return 'Start !' .  PHP_EOL;
    } 
    public function getEnergy(): string{
        return $this->energy;
    }
    public function setEnergy(string $energy): string{
        return $this->energy = $energy;
    }

    public function getEnergyLevel(): int{
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): int{
        return $this->energyLevel = $energyLevel;
    }

}



    
