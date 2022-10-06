<?php

class Car{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;   
    private int $energyLevel = 40;

    public function __construct($color, $nbSeats,$energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;        
    }

    public function forward(): string{
        $this->currentSpeed = 40;
        $this->energyLevel--;
        return '<br> Vous roulez a '. $this->getCurrentSpeed().'km/h !!! <br> Chauffard!!';
    }

    public function brake(): string{

        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "<br>Je freine !!! Votre vitesse est de " . $this->currentSpeed ." km/h !!";
        }
        $sentence .= "<br> Laissez moi descendre! Je ne monterais plus jamais avec vous!!";    
        return $sentence;
      
    }

    public function start(): string{       
        return 'Start !';
    }

    public function getNbWheels(): int{
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): int{
        return $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int{
        return $this->currentSpeed;
    }

    public function getColor(): string{
        return $this->color;
    }

    public function getNbSeats(): int{
        return $this->nbSeats;
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



    
