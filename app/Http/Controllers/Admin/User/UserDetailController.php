<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdetails=User::where('role','>',1)->get();
        return view('admin.Users.userslist',["userdetails"=>$userdetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
       return view('admin.Users.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        request()->validate(
            [
                "user_name" => 'required',
                "email" => 'required|unique:users,email',
                "password" => 'required|min:6',
                "cpassword" => 'required_with:password|same:password',
                 "role" => 'required',
            ],
            [
                'user_name.required' => 'Field is mandatory.',
                'email.required' => 'Field is mandatory.',
                 'role.required' => 'Field is mandatory.',
                'password.required' => 'Field is mandatory.',
                'user_mobile.required' => 'Field is mandatory.',

                'cpassword.required_with' => 'The confirm password field is required when password is present..',
                'cpassword.required' => 'Field is mandatory.',
                'cpassword.same' => 'The confirm password and password must match..',

            ]
        );
       

        $random = rand(10000, 99999);
        $token=date('Ym').$random;
        $user = new User;
        $user->token = $token;
        $user->email = request("email");
        $user->password = Hash::make($request->password);
        $user->user_name = request("user_name");
        $user->role = request("role");
        $user->email_verified = 1;
        $user->status = 1;
        $user->save();

        return redirect()->route('admin.user-creation')->with('message', 'User created successfully!');
    }

   public function UserStatusChange($id, $status)
    {
       $user= User::find($id);
       $user->email_verified=$status;
       $user->save();
        return redirect()->back()->with('message', 'Status Update  Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword($id)
    {
        $user= User::find($id);
        return view("admin.Users.change-password",["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassowrd(Request $request, $id)
    {
         request()->validate(
            [
               
                "password" => 'required|min:6',
                "cpassword" => 'required_with:password|same:password',
               
            ],
            [
               
              
                'password.required' => 'Field is mandatory.',
                'cpassword.required_with' => 'The confirm password field is required when password is present..',
                'cpassword.required' => 'Field is mandatory.',
                'cpassword.same' => 'The confirm password and password must match..',

            ]
        );
       

       
        $user = User::find($id);;
      
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.user-creation')->with('message', 'Password updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
          $user->delete();
          return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
