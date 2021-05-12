<?php

use App\Mail\mailBlast;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('email', function () {
    // email send
    echo "I shall send thy email! 📫️ \n";

    \Mail::send(new mailBlast(), [], function ($message) {
        $message->from('omargponce@gmail.com', 'Omar Ponce');
        $message->sender('omargponce@gmail.com', 'Omar Ponce');
        $message->to('omargponce@hotmail.com', 'Omar Dev');
        $message->subject('Hello Omar');
        // $message->attach('pathToFile');
    });

    // \Mail::raw('Hello!!!', function ($message) {
    //     $message->from('omargponce@gmail.com', 'Omar Ponce');
    //     $message->sender('omargponce@gmail.com', 'Omar Ponce');
    //     $message->to('omargponce@hotmail.com', 'Omar Ponce Dev');
    //     $message->subject('Hello Me!');
    // });


    echo "Done! - ✅️✅️✅️✅️ 📫️ \n";
});
