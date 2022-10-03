<?php

namespace App\Http\Controllers;

use App\Models\Random;
use App\Models\Breakdown;
use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function generateRandom(){
        
        
        $randomDigit = fake()->numberBetween($min=5, $max=10);
        $breakdownDigit = fake()->numberBetween($min=5, $max=10);
       
        //insert random word to random table
        for($i = 0; $i < $randomDigit; $i++){

            $randomWord = fake()->word();
            $random = new Random;
            $random->value = $randomWord;
            $random->save();
            $randomId = $random->id;
            
             //insert 5 random character to breakdown table
            for($j = 0; $j < $breakdownDigit; $j++){
                $breakdownWord = fake()->regexify('([A-Za-z0-9]){5}');
                $breakdown = new Breakdown;
                $breakdown->value =  $breakdownWord;
                $breakdown->random_id = $randomId;    
                $breakdown->save();
            }

            
        }

       
    }
}
