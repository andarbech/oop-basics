<?php

// https://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@github.com/andarbech/oop-basics.git/
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 01 - Classes */

// To create classes we use reserved word class.
class Mobile
{
    public $name;
    public $description;
    public $price;

    public function characteristics($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

// We can instantitate classes like this
$modernMobile = new Mobile($name, $description, $price);
$oldMobile = new Mobile($name, $description, $price);

$modernMobile->characteristics("apple", "expensive", "1200");
$oldMobile->characteristics("Nokia", "cheap", "50");

// we can use var_dump so we can visualize our new class objects

var_dump($modernMobile);
echo "<br>";
var_dump($oldMobile);
