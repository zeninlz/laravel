<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    public function index()
    {

        //dd($this->planets);
        return view('welcome', [
            'planets' => $this->planets,
            'selected_name' => null
        ]);
    }

    public function show($name)
    {
        $filtered = collect($this->planets)
                        ->filter(function ($planet) use ($name) {
                            return strtolower($planet['name']) === strtolower($name);
                        })
                        ->toArray();
        return view('/welcome', [
            'planets' => $filtered,
            'selected_name' => $name,
        ]);
    }
}