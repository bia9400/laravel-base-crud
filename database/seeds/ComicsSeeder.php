<?php

use App\Comics;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booleanFumetti=config("comics");
        
        foreach ($booleanFumetti as  $fumetto) {
            $newFumetto= new Comics();
            
            $newFumetto["title"]=$fumetto["title"];
            $newFumetto["description"]=$fumetto["description"];
            $newFumetto["thumb"]=$fumetto["thumb"];
            $newFumetto["price"]=$fumetto["price"];
            $newFumetto["series"]=$fumetto["series"];
            $newFumetto["sale_date"]=$fumetto["sale_date"];
            $newFumetto["type"]=$fumetto["type"];
            $newFumetto->save();
        }
    }
}
