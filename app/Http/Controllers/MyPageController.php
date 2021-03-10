<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

    class MyPageController extends Controller{
        //request and response
        function actionRequest(Request $request){
            
            // Log::channel('stdout')->debug();
            // return view("mypages/index");
            // return redirect()
            // return response("hello world", 200)
            //     ->header("Content-Type", "text/plain");
            Log::channel('stdout')->debug($request->input('callback'));

            $data=["username"=>"euewrqe", "age"=>20];
            // $data=json_encode($data);
            $minute=2;
            setcookie("key01", "value01");
            return response("responseTest");
            // Cookie::queue(name, value, minute)
            // Cookie::queue(Cookie::forget())
            // return response($data)
            //     ->header("Content-type", "text/plain")
            //     ->header("X-Header-One", "Header Value")
            //     ->cookie("name222", "value", $minute);
                // withHeaders([])
                // withoutCookie(key)
            // return redirect()->action(controller, action)
            // return redirect()->away();
            // return response()->view()->header()
            // return response()->json($data);
            // return response()->download("README.md", "oki.md");
            // return response()->file(filename); // such as pdf
                // ->withCallback($request->input('callback'));
        }
        function index(Request $request){
            return view("mypages/index");
        }
        function create(Request $request){
            // TODO:insert into mysql
            // echo $_POST["username"];
            // $request->input(), $request->all()
            // $request->query() : header
            // $request->boolean()
            // Retrieving a portion of the input data

            $input = $request->only(["username", "age"]);
            // $request->except(); $request->has()
            // $request->whenHas('name', function($input){});

            // $request->hasAny(), request->filled()
            // whenFilled(key, function)
            // $request->missing()

            // flash to session
            // $request->flash()
            // $request->cookie(), $request->file("photo")->isValid(), hasFile
            // $request->file("photo")->path();, extension();
            // $request->file("photo")->store('images')
            // $request->file("photo")->storeAs('images')


            Log::channel("stdout")->debug($request->expectsJson());
            Log::channel("stdout")->debug($request->getAcceptableContentTypes());
            // $request->accepts(['text/html', 'application/json'])
            // request json:
            
            // url, path, ip, isMethod("post")
            // $value=$request->("X-Header-Name", default);
            /*
  1 => 'application/xhtml+xml',
  2 => 'image/webp',
  3 => 'image/apng',
  4 => 'application/xml',
  5 => 'application/signed-exchange',
  6 => '',
             */

            // $request->is("admin/:"); // url
            // $request->routeIs("admin/:"); // name


            return "created";
        }
    }
?>