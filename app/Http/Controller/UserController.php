 <?php

// namespace App\Http\Controllers;
// use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

//  collect al data and all type of data 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('learners')
        //  pagination 
        // ->simplePaginate(5);
        ->paginate(5);

        // ->get();

        // $users = DB::table('learners')->find(4);
        // return $users;
        //  dd( $users);  it will direct show the data 
        // dump( $users); 
   
        //  help for debuging 
        // foreach($users as $user){
        //     echo $user->name."<br>";
        // }


// dd($users->all());

        //  all data to be pass in users to data varible  

        return view('allusers',['data'=>$users]);


   

    }
         public function singleUser( string $id ){
             $users = DB::table('learners')->where("id",$id)->get();
             return view('user',[ 'data' =>$users]);


        }

        

        //  ******************* Insert ***********
        //  *******************  Dynamicaly Insert ***********

public function addUser(Request $req){
    $user =DB::table('learners')
    //  uspert it is update the unique data updata check him 
    //  insertGetID or insertOrIgnore
            ->insert([
                
    "name"  =>  $req->username,
    "age" =>  $req->userage,
    "email" =>  $req->useremail,
    "address" =>  $req->useraddress,
    "city" =>  $req->usercity,
    "phone" =>  $req->userphone,
    "password" =>  "password123 (hashed in Laravel, not shown here)",

    "created_at" =>  now(),
    "updated_at" =>  now()
            ]);
//    use for debuding 
            // dd($user);
            if($user){
             
                            return redirect()->route('allusers');
        
                
            }else{
                echo "<h1>  Data not Added</h1>";
            }

}





// ye bas data ko feth kar raha hai 
public function updatePage( string $id){

    $users = DB::table('learners')->find($id);
    //  data varible ko updateuser file mai send kar rahah hai 
       return view('updateuser',['data'=>$users]);

    //  it will return a data  in array formate 
    // return $users;
}
// ********** Update *************

public function updateUser(Request $req, $id)
{
    // return $req;

    $user = DB::table('learners')
        ->where('id', $id)
        //  updateOrInsert check kar lena  
        //  increment 
        ->update([
                "name"  =>  $req->username,
                "age" =>  $req->userage,
                "email" =>  $req->useremail,
                "address" =>  $req->useraddress,
                "city" =>  $req->usercity,
                "phone" =>  $req->userphone,
                "password" =>  "password123 (hashed in Laravel, not shown here)",
                "created_at" =>  now(),
                "updated_at" =>  now()
        ]);
               if($user){
                            return redirect()->route('home');

                

            }else{
                echo "<h1>  Data not Update. </h1>";
            }

    return "Updated $user record(s)";
}


// ********** delete *************
public function deleteUser(string $id)
    {
        $deleted = DB::table('learners')
        ->where('id', $id)
        //  truncate
        ->delete();

        if ($deleted) {
            return redirect()->route('home')->with('success', 'User deleted successfully.');
        }

        return back()->with('error', 'User not found.');
    }


    //  search 
    public function search(Request $request)
{
    $query = $request->get('search');

    $users = DB::table('learners')
        ->where('name', 'LIKE', "%{$query}%")
        ->orWhere('email', 'LIKE', "%{$query}%")
        ->orWhere('city', 'LIKE', "%{$query}%")
        ->get();

    $output = '';
    foreach ($users as $user) {
        $output .= '
        <tr>
            <td>'.$user->id.'</td>
            <td>'.$user->name.'</td>
            <td>'.$user->age.'</td>
            <td>'.$user->email.'</td>
            <td>'.$user->phone.'</td>
            <td>'.$user->city.'</td>
            <td><a href="'.route('view.user', $user->id).'" class="btn btn-view btn-sm">View</a></td>
            <td><a href="'.route('delete.user', $user->id).'" class="btn btn-delete btn-sm">Delete</a></td>
            <td><a href="'.route('update.page', $user->id).'" class="btn btn-update btn-sm">Update</a></td>
        </tr>';
    }

    return $output;
}



//  login page handle 
public function loginPage()
{
    return view('login');
}

public function login(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required|string',
        'password' => 'required|string'
    ]);

    // Fetch user from 'learners' table
    $user = DB::table('learners')->where('name', $request->name)->first();

    // Check password
    if ($user && Hash::check($request->password, $user->password)) {
        // Save user info in session
        session([
            'user_id' => $user->id,
            'user_name' => $user->name
        ]);

        // Redirect to allusers page
        return redirect()->route('allusers');
    }

    // Invalid credentials
    return redirect()->back()->with('error', 'Invalid cres');
}


public function allUsers()
{
    $users = DB::table('learners')->get();
    return view('allusers', compact('users'));
}







}


// "$2y$12$BCnkrCG1pikrsqpgGnZjvucowYwnPwUzFpQcWhSI5VO73z1E0w/SO"
//  password123 

