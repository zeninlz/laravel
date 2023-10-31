<?php
// opdracht 4 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanetController;

Route::get('/', [PlanetController::class, 'index']);
Route::get('/planets/{name}', [PlanetController::class, 'show']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    






//Route::get('//{name?}', function ($name = null) { //  hier mee zeg je van get route voor de web naam  en dat je iets kan direct zoeken als je de naam zoekt en als het niet bestaat geeft het aan de er niks over dat gegevens staat 
    /*$planets = [
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
    // Dit is de array van planeten met hun namen en beschrijvingen.

    if ($name !== null) {
        $planets = collect($planets)->filter(function ($planet) use ($name) {
            return strtolower($planet['name']) === strtolower($name);
        })->toArray();
    }

    // dit controleert de namen wat in de array staat zodat je gegevens kunt krijgen anders niet  de funtie strtolower geeft aan dat niet hoofdletter gevoelig is   

    return view('welcome', [
        'planets' => $planets,
        'selected_name' => $name,
    ]);
    // Als er een name parameter is doorgegeven dan is de $selected_name gelijk aan de doorgegeven naam.
});
 //Route::Post ('/register',[UserController::class, 'register']);
//Route::post ('/logout', [UserController::class, 'logout']);
*/