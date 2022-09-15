<?php

namespace App\Http\Controllers;

use App\Phn;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    //
    public function show()
    {
        $cus = Customer::all();
        return view('view')->with('data', $cus);
        dd($cus);
        // session()->put('message','Data has been successfully entered');
    }
    public function imageshow($id)
    {
        $cus = Customer::where('id', $id)->first();
        // dd($cus);
        return view('upload')->with('selectedrecord', $cus);
       
    }
    public function m($id){
echo "delete page";
        $d = Customer::find($id);
        $d->delete();
        return redirect()->back();
  
    }
    public function index()
    {
        return view('index');
    } 
    public function dashboard()
    {
        return view('Dashboard');
    }
    public function login()
    {   
        return view('login');
    }
    
    public function save(Request $r){
    
        if($r->hasFile('image'))
        {
            $post_data = Validator::make($r->all(),[
                'name'=>'required|string',
                'email'=>'nullable|email',
                'address'=>'nullable|string',
                'image' => 'required|image'
            ]);
            // dd($post_data);
                $newname=time().".".$r->file('image')->getClientOriginalExtension();
            // dd($newname);
            // $name = $r->file('image')->getClientOriginalName();
            $r->image->move(public_path('images'),$newname);         
            Customer::create(
                [
                'name' => $r->name,
                'email' => $r->email,
                'address' =>$r->address,
                'image' => $newname ,
                ]
        
            );
            return redirect()->back()->with('msg', 'Successfully Added'); 
            
            
        }
        else
        {
            return back()->with('msg','Please Choose a Picture and Try Again');
        }
       

        
    }
    public function edit_page($id)
    {
        $selectedrecord= Customer::where('id',$id)->first();
        // print($selectedrecord);
        return view('useredit')->with('selectedrecord',$selectedrecord);
    }
    
    public function edit_function(Request $req,$id){   
        //dd($req);
      $user = Customer::where('id',$id)->first();
      $user->name = $req->name;
      $user->email = $req->email;
      $user->address = $req->address;
      $user->image = $req->image;
      $user->save();
      return redirect('/view');
      
    }
      public function a()
      {
            return view('a');
      }
    public function v()
    {

        return view('task');
    }
     public function session(Request $request)
    {
        return redirect()->back()->with('view', 'Data Entered');
      

    }
    public function store(Request $request)
    {
       $email = $request->email;
       $password= $request->password;
       $user = User::where(['email' => $email, 'password' => $password])->first();
       if($user){
        $isadmin = $user->isadmin;
        Session::put('admin',$isadmin);
        return redirect('view');
       }else{
       echo "Please enter correct username and password.";
       }
    }


        
      
}
    

