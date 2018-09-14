<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Message;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllUsers = User::all();
        $AllAdmins = Admin::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.index')->withUserNum($AllUsers)->withAdminNum($AllAdmins)->withMessages($AllMessages);
    }
    public function show($id)
    {
        $admin = Admin::find($id);
        $books = Book::where('author', '=', $admin->name)->orderBy('id', 'desc')->get();
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.show')->withPost($admin)->withUserNum($AllUsers)->withBooks($books)->withMessages($AllMessages);
    }
    public function showRegisterForm()
    {
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.register')->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    public function getAdmins()
    {
        $admins = Admin::orderBy('id', 'desc')->paginate(5);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.alladmins')->withPosts($admins)->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    public function register(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'job_title' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        //Attempt to save
        $admin = new Admin;

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->job_title = $request->job_title;
        $admin->password= bcrypt($request->password);
        if($admin->save()){
            //if successful, then redirect to their intended location
            $request->session()->flash('success', 'The administrator was successfully saved!');
            return redirect()->route('admin.admins.show', $admin->id);
        }else{
            //if unsuccessful, then redirect back to the login with the form data
            return redirect()->back()->withInput($request->only('email', 'name', 'job_title', 'remember'));
        }
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        //validate the form data
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'job_title' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->job_title = $request->job_title;
        $admin->password= bcrypt($request->password);
        if($admin->save()){
            //if successful, then redirect to their intended location
            $request->session()->flash('success', 'The administrator was successfully edited!');
            return redirect()->route('admin.admins.show', $admin->id);
        }else{
            //if unsuccessful, then redirect back to the login with the form data
            return redirect()->back()->withInput($request->only('email', 'name', 'job_title', 'remember'));
        }
    }

    public function edit($id){
        $admin = Admin::find($id);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.edit')->withPost($admin)->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);

        $admin->delete();

        
        Session::flash('success', 'The post was successfully deleted.');
        

        return redirect()->route('admin.admins');
    }
}
