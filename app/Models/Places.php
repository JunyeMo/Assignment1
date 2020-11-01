<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Stephen Curry',
            'high' => '191cm',
            'weight' => '83.9kg',
            'image' => 'Curry.jpg',
            'number' => '30',
            'age' => '32 years old',
            
        ],
        '2' => [
            'id' => 2,
            'name' => 'Klay Thompson',
            'high' => '198cm',
            'weight' => '97.5kg',
            'image' => 'Klay.jpg',
            'number' => '11',
            'age' => '30 years old',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Kevin Durant',
            'high' => '208cm',
            'weight' => '108.9kg',
            'image' => 'Durant.jpg',
              'age' => '32 years old',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Andre Iguodala',
            'high' => '198cm',
            'weight' => '94kg',
            'image' => 'Andre.jpg',
            'number' => '9',
            'age' => '36 years old',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Draymond Green',
            'high' => '198cm',
            'weight' => '104kg',
            'image' => 'Green.jpg',
            'number' => '23',
            'age' => '30 years old',
        ],
                '6' => [
            'id' => 6,
            'name' => 'Shaun Livingston',
            'high' => '201cm',
            'weight' => '83.9kg',
            'image' => 'Livingston.jpg',
            'number' => '34',
             'age' => '35 years old',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
