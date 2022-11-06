<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\usersDataTable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(usersDataTable $data)
  {
    return $data->render('dashboard.users.users',['title'=>'Users Table']);
    // $users= User::all();
    // return view('dashboard.users',compact('users'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
   return view('dashboard.users.add',['title'=>'add new user']);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'name' => 'required|max:255',
      'username' => 'required|unique:users|max:255',
      'email' => 'required|unique:users|max:255',
      'phone' => 'required|unique:users|max:11|min:11',
      'job' => 'required',
      'password' => 'required',

  ]);
  if ($validator->fails()) {
    // dd($validator->errors()->messages()->name()->get());
    return redirect()
    ->back()
    ->withErrors($validator->errors())
    ->withInput();
  }

    user::create([
      'name'=>$request->name,
      'username'=>$request->username,
      'phone'=>$request->phone,
      'email'=>$request->email,
      'job'=>$request->job,
      'password'=>Hash::make($request->password)

    ]);
    return redirect()->route('user.index');

  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    dd('hello');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>