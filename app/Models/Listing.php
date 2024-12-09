<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public static function getAllListings(){
        return [
            [
               'id' => 1,
               'title' => 'job 1',
               'description' => 'AKWOAKOAWKOAWKOAWKAOWKOAWKAWOKo'
            ],
            [
               'id' => 2,
               'title' => 'job 2',
               'description' => 'HAHAHAHHAHA'
            ]
        ];
    }

    // Ngefetch 1 buah Listing aja
    public static function findOneListing($id){
        $listings = self::getAllListings();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }    
    }
}
