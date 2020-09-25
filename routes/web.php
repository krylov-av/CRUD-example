<?php

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
    //return view('welcome');
    return redirect()->to('login');
});

Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])
    ->name('login');


Route::get('/test',function(){
   // $users = \App\Models\User::all();     // get entire table users
   // $users = \App\Models\User::find(30);   // get user with id=30
   // $users = \App\Models\User::where('id','>',95)->get();
   //#########################################################
   //$users = \App\Models\User::with('projects')
   //    ->where('id','=',2)
   //    ->limit(50)
   //    ->get();
   //dd($users);
    //foreach ($users as $user)
    //{
        //print $user->id."<br>";
        //print $user->name."<br>";
        //print $user->country->country."<br>";
        //foreach ($user->projects as $project)
        //{
        //    print "-".$project->name."<br>";
        //}

    //}
    //######################################################
    //$users = \App\Models\User::with('linked_projects')
    //   ->where('id','=',2)
    //   ->limit(50)
    //   ->get();
    //dd($users);

    //$projects = \App\Models\Project::with('linked_users')
    //    ->where('id','=',5)
    //    ->limit(50)
    //    ->get();
    //dd($projects);
});
