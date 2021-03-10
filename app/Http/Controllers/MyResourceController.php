<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Facades\DB;
    use App\Models\PersonMessage;
    use App\Models\Company;

    class MyResourceController extends Controller{

        // get /myres
        function index(){
            // $users = DB::select('select * from person_message', [1]);
            // $users = DB::table('person_message')->where('id', '1')->first();
            // get, find(id), where(key, value)

            // retriveing a list of column value: pluck(col, col1, col2)
            // orderBy('id')->chunk(100, function)
            // update while chunking : chunkById(100, function)
            // count(). max("price"), avg(), exists()->boolean
            // doesntExist, select (col1, col2)
            // DB::row('SUM(price) as total_sales')
            // join, 
            // DB::table('person_message')->join('contacts', 'users.id', '=', 'contacts.userid')
            // ->select->get;
            // leftjoin, rightjoin, crossjoin
            // join('contacts', function($join){
            //     $join->on('','','')->orOn(..)
            // });
            //->paginate(15), ->simplePaginate(15)


            // $users = DB::table('person_message')->pluck("first_name");
            // $users = PersonMessage::where('first_name', 'Lamont')->get();
            $users = PersonMessage::where('first_name', 'Lamont')->first();
            // echo $users->last_name;
            // $users->last_name = "Schorah";
            // $users->save();

            echo "<br />".$users."<br />".$users->company;
            $company=Company::all();

            // model

            Log::channel("stderr")->debug('index');
            $data=['user'=>$users];
            return view('myresource/index', $data);
        }

        // get /myres/create
        function create(){
            Log::channel("stderr")->debug('create');
            $data=[];
            return view('myresource/create', $data);
        }

        // post /myres
        function store(Request $request){
            Log::channel("stderr")->debug('store');
            $first_name = $request->input('firstname', 'none');
            $last_name = $request->input('lastname', 'none');
            $email = $request->input('email', 'none');
            $sql = "insert into person_message (first_name, last_name, email) values (?, ?, ?)";
            DB::beginTransaction();
            $ret_bool = DB::insert($sql, [$first_name, $last_name, $email]);
            DB::commit();
            // DB::update();
            // DB::delete();
            
            // DB::rollBack();
            
            // return response()->json($data);
            return response($ret_bool);
        }

        // get /myres/{id}
        function show($id){
            Log::channel("stderr")->debug('show');
            $data=[
                "id"=>$id,
                "username"=>"default",
                "email"=>"default",
            ];
            return view('myresource/show', $data);
        }

        // get /myres/{id}/edit
        function edit($id){
            Log::channel("stderr")->debug('edit');

            $data=[
                "id"=>$id,
                "username"=>"default",
                "email"=>"default",
            ];
            return view('myresource/create', $data);
        }

        // put/patch /myres/{id}
        function update(Request $request, $id){
            Log::channel("stderr")->debug('update');
            $username = $request->input('username', 'none');
            $email = $request->input('email', 'none');
            $data = [
                "method" => "put",
                "id" => $id,
                "username" => $username,
                "email" => $email
            ];
            return response()->json($data);
        }

        // delete /myres/{id}
        function destroy($id){
            $data = [
                "method" => "delete",
                "id" => $id
            ];
            Log::channel("stderr")->debug('destroy');
            return response()->json($data);
        }
    }
?>