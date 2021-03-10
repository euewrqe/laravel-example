<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// support undefined
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\MyResourceController;
use App\Http\Resources\UserResource;
use App\Models\PersonMessage;
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
// Route::get('/mypage', function (){
//     $data = ["name"=>"euewrqe"];
//     // return view("mypage", $data);
//     return response("hello world", 200);
// });
// controller
Route::match(["get", "post"], '/mypage', [MyPageController::class, 'actionRequest']);

// Route::get("/mypage_index", [MyPageController::class, 'index'])
//     ->middleware('mymiddleware');

Route::middleware(['mymiddleware'])->group(function(){
    Route::get("/mypage_index", [MyPageController::class, 'index']);
    Route::post("/mypage_post", [MyPageController::class, 'create']);
});

Route::middleware(['mymiddleware'])->group(function(){
    Route::get('/myres', [MyResourceController::class, 'index']);
    Route::get('/myres/create', [MyResourceController::class, 'create']);
    Route::get('/myres/{id}', [MyResourceController::class, 'show']);
    Route::post('myres', [MyResourceController::class, 'store']);
    Route::get('/task', function(){
        return view("task");
    });
    Route::get('/php_info', function(){
        phpinfo();

    });
});

Route::get('/userres', function(){
    return UserResource::collection(PersonMessage::all());
});

// get(url, action)
// url: /a/b/c, /a/{id}/{name}->action(name, id){}->where([id=>xxx])
// action: function, [controller, method]

// require __DIR__.'/auth.php';


// Route::get()->middleware()
// Route::redirect('URI', 'URI', 301);
// Route::permanentRedirect();
// Route::view('URI', 'viewName');
// Route::get()->whereNumber()->whereAlpha();

// where: whereNumber, whereAlpha



//Route::middleware('token.ensure')->group(function (){
//    Route::get('/s_login', function(Request $request){
//        return view('s_login');
//    })->withoutMiddleware('token.ensure');
//});

//Route::domain('{account}.example.com')->group(function (){
//    Route::get('/s_dashboard2/{id}/{name?}', function($account, $id, $name=null){
//        return view('s_dashboard', ['s_id'=>$id, 's_name'=>$name, "s_account"=>$account]);
//    })->where('name', '[a-zA-Z]*');
//});

// Route::name('admin.')->group(function (){
//     Route::get('/s_dashboard/{id}', function($id){
// //        $url = route('admin.dashboard', ['id'=>$id]);

//         $current_url = Route::current();
//         $current_route_name = Route::currentRouteName();
//         $current_route_action = Route::currentRouteAction();
//         echo "current_route_name:". $current_route_name. "<br />";
//         return view('s_dashboard', ['s_id'=>$id,
//             'current_url'=>$current_url,
//             'current_route_name'=>$current_route_name,
//             'current_route_action'=>$current_route_action]);
//     })->name('dashboard');
// });

//Route::middleware(['xsend'])->group(function (){
//
//});
//use App\Models\User;
//Route::get('/users/{user}', function (User $user){
//    return $user->email;
//});


/**
 * request.method
 * get(), post(), delete()...
 * match(['get', 'post'], function)
 * any(function)
 *
 * request never care about method: `Route::view`
 * Route::view(url, view, data)
 *
 * global pattern filter is within RouteServiceProvider.php
 * `root(){...; Route::pattern('id', '[0-9]*'); ...}`
 * a request with pattern parameters:
 * get()->where()
 * where->whereNumber, whereAlpha, whereAlphaNumber, whereUuid
 * namedRouted: `get()->name('')`
 *
 * how to use the named urls: `$url=route(name, params)`
 *
 * - domain
 * Route::domain(domain)->group()
 *
 * - prefix
 * Route::prefix(prefix)->group()
 *
 * - missing
 * Route::get()->missing(function) return a page if respond 404
 *
 * - current route
 * Route::current()
 */

