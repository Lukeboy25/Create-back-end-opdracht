<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Species;
use App\People;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->getSpeciesFromAPI();
        $this->getPeopleFromAPI();       

        $people = People::all();
        $species = Species::all();
        return view('home')->with(compact('people','species'));
    }

    public function getSpeciesFromAPI() {
        // Receive all the species from url
        $jsonurl = "https://swapi.co/api/species";

        $json = file_get_contents($jsonurl);

        // Species in json format
        $species = json_decode($json);

        // Store every property into the database to table species
        foreach ($species->results as $specie)
        {
            $name = $specie->name;
            $classification = $specie->classification;
            $designation = $specie->designation;
            $average_height = $specie->average_height;
            $skin_colors = $specie->skin_colors;
            $hair_colors = $specie->hair_colors;
            $eye_colors =$specie->eye_colors;
            $average_lifespan = $specie->average_lifespan;
            $language = $specie->language;

            Species::updateOrCreate([
                'name' => $name,
                'classification' => $classification, 
                'designation' => $designation,
                'average_height' => $average_height,
                'skin_colors' => $skin_colors,
                'hair_colors' => $hair_colors,
                'eye_colors' => $eye_colors,
                'average_lifespan' => $average_lifespan,
                'language' => $language
            ]);
        }
    }

    private function getPeopleFromAPI() {
    // Receive all the species from url
    $jsonurl = "https://swapi.co/api/people";

    $json = file_get_contents($jsonurl);

    // Species in json format
    $peoples = json_decode($json);

    // Store every property into the database to table people
    foreach ($peoples->results as $people) {
        $name = $people->name;
        $height = $people->height;
        $mass = $people->mass;
        $hair_color = $people->hair_color;
        $skin_color = $people->skin_color;
        $birth_year = $people->birth_year;
        $gender = $people->gender;
        $specie = implode('', $people->species);

        People::updateOrCreate([
            'name' => $name,
            'height' => $height,
            'mass' => $mass,
            'hair_color' => $hair_color,
            'skin_color' => $skin_color,
            'birth_year' => $birth_year,
            'gender' => $gender,
            'specie' => $specie
        ]);   
    }
            
    }

}
