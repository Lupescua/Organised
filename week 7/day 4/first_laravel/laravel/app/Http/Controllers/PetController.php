<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        //find out owner
        $pet = Pet::find(2);
        $owner = $pet->owner;
        return $owner;

        //create new pet
        $newPet= new Pet();
        $newPet->name ='Gigi';
        $newPet->user_id=1;
        $newPet->save();

        //remove pet with id =1
        $pet = Pet::find(1);
        $pet->delete();
        return $pet;

        //rename pet with id =2
        $garfield = Pet::find(2);
        $garfield->name = "New Garfield";
        $garfield->save();

        return $garfield;
    }

}
