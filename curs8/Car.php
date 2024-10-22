<?php

class Car
{
    public string $model;
    public function __construct()
    {
        //echo 'hello from construct method<br>';
        $this->model = "Car";
    }
    public function setModel(string $model) : void
    {
        $this->model = $model;  //$this este pentru obiectul car, nu clasa car
    }
    public function __destruct()
    {
        echo ' unsetted ';
    }
}