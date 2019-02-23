<?php

// Valid Genes
const GENES = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ 1234567890, .-;:_!\\#%&/()=?@{[]}$";

// Target Genes
const TARGET = "Pondok IT Bisa";

// Generate random number of mutation
if (!function_exists("random_num")) {
    function random_num(int $start, int $end) {
        $range = ($end-$start)+1;
        $random_number = $start+ (rand()%$range);
        return $random_number;
    }
}

if (!function_exists("mutated_genes")) {
    function mutated_genes() {
        $length = strlen(GENES);
        $random = random_num(0, $length-1);
        return GENES[$random];
    }
}

if (!function_exists("create_gnome")) {
    function create_gnome() {
        $leng = strlen(TARGET);
        $gnome = "";
        for($i=0; $i<$leng; $i++) {
            $gnome = mutated_genes();
        }
        return $gnome;
    }
}

class Individual
{
    // Representing chromosome of individual
    public $chromosome;
    // Probably the fitness
    public $fitness;

    public function __construct(string $chromosome)
    {
        $this->chromosome = $chromosome;


