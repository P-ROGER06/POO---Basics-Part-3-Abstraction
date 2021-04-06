<?php



final class MotorWay extends Highway
{ 
    protected array $currentVehicles;

    protected int $nbLane = 4;

    protected int $maxSpeed = 130;

    

    public function addVehicle($vehicle)
    {
       if ($vehicle instanceof Truck === true || $vehicle instanceof Car === true)
        {
            $this->setCurrentVehicles($vehicle);
    }
}


    /**
     * Get the value of currentVehicles
     */ 
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @return  self
     */ 
    public function setCurrentVehicles($vehicle)
    {
        $truck = [$vehicle];

        $this->currentVehicles[] = $truck;

        return $this;
    }


    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}