<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/15/2017
 * Time: 20:51
 */
class Trainer
{

    public $name;
    private $badges = 0;
    private $pokemons = [];

    public function __construct(string $trainerName, Pokemon $pokemon)
    {

        $this->name = $trainerName;
        $this->pokemons[] = $pokemon;

    }

    /**
     * @param int $badges
     */
    public function addBadge()
    {
        $this->badges += 1;
    }

    public function addPokemon(Pokemon $pokemon)
    {

        $this->pokemons[] = $pokemon;
    }

    public function getPokemons()
    {

        return $this->pokemons;

    }

    public function badgesCount()
    {

        return $this->badges;

    }

    public function pokemonsCount()
    {
        var_dump($this);
        return count($this->pokemons);


    }

    public function hurtPokemons()
    {

        foreach ($this->pokemons as $pokemon) {

            $pokemon->damage();
            if ($pokemon->health <= 0) {

                $key = array_search($pokemon, $this->pokemons);
                 array_splice($this->pokemons, $key, 1);
            }

        }

    }

}

class Pokemon
{

    public $name;
    public $element;
    public $health;

    public function __construct(string $pokemonName, string $element, int $health)
    {
        $this->name = $pokemonName;
        $this->element = $element;
        $this->health = $health;

    }

    public function damage()
    {

        $this->health -= 10;

    }

}


$trainers = [];

while (true) {

    $input = explode(' ', trim(fgets(STDIN)));
    if ($input[0] == 'Tournament') {

        break;
    }

    $trainerName = $input[0];
    $pokemonName = $input[1];
    $pokemonElement = $input[2];
    $pokemonHealth = intval($input[3]);

    if (isset($trainers[$trainerName])) {

        $trainers[$trainerName]->addPokemon(new Pokemon($pokemonName, $pokemonElement, $pokemonHealth));

    } else {

        $trainers[$trainerName] = new Trainer($trainerName, new Pokemon($pokemonName, $pokemonElement, $pokemonHealth));
    }

}

while (true) {

    $input = trim(fgets(STDIN));
    if ($input == 'End') {

        break;
    }

    $elementNeeded = $input;

    foreach ($trainers as $trainer) {

        if (searchForElement($trainer->getPokemons(), $elementNeeded, $trainer)) {


        } else {

            $trainer->hurtPokemons();
        }

    }


}

function searchForElement($arrayOfPokemons, $elementNeeded, $trainer)
{
    $found = false;
    foreach ($arrayOfPokemons as $pokemon) {

        if ($pokemon->element == $elementNeeded) {

            $trainer->addBadge();
            $found = true;
        }

    }
    if ($found) {
        return true;
    } else return false;

}



usort($trainers, function ($a, $b) {

    if ($a->badgesCount() == $b->badgesCount()) {
        return 0;
    } else {
        return ($a->badgesCount() < $b->badgesCount());
    }


});

foreach ($trainers as $trainer) {

    echo "$trainer->name {$trainer->badgesCount()} {$trainer->pokemonsCount()}" . PHP_EOL;

}

//print_r($trainers);