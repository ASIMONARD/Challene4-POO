<?php

class Car
{
    private bool $hasParkBrake;

    public function setParkBrake(): void
    {
        $this->hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake = true)
        {
            throw new Exception ('Si le frein à main est actif, ');
        }
        return $this;
    }
}
try
{
    $parkBrake = new Car();
    $parkBrake->start();
}
catch (Exception $e)
{
    echo $e->getMessage();
}
finally 
{
    echo 'ma voiture roule comme un donut';
}
?>