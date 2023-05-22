<?php

#importamos esto

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name as NodeName;
use App\Mail\contactanosMailable;
use Illuminate\Support\Facades\Mail;



#just here route give acces to the differents methods in this case using get
#recibe two parameters in this case the url "/" 
#and "function"
#basically at the beginning first choose the function to happen, in this case the root

Route::get('/', function () {
    #in that clousures we can use for instrtuctions or return strings, arrays and more others things...
    return view('welcome'); # the welcome is located in the folder view 
});

#the parameters os URL and second parameter is de view.
Route::view('/', 'welcome')->name('home');#Responf internally the permisions of the get and head, 
Route::view('/contact', 'contact')->name('contacto');#with that we can access to the proyject in the website''--

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
])->middleware('auth');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');


Route::view('/about', 'about')->name('about');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('contactanos', function(){
    
    $correo = new contactanosMailable;
    Mail::to('eadv7777@gmail.com')->send($correo);

    return "Mensaje enviado";
});

##other petitions
#route::post();
#route::oatch();
#route::put();
#route::delete();
#route::options();
#
##for reponse a lot of petions we use
#route::match(['put','match'], '/', function(){
#    //
#});
#
##for response all the petions.
#Route::any('/', function(){
#    //
#});#