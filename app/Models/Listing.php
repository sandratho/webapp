<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                    [
                        'id' => 1,
                        'title' => 'Listing I',
                        'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Listing II',
                        'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et'
                    ]
                ];
        }

        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if ($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }