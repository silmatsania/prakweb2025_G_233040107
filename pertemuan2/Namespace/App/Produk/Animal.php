<?php
abstract class Animal
{
    public $name = 'Kucing';
    // Wajib dimiliki oleh child nya
    public abstract function run();
}