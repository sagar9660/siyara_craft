<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\register;
use App\Models\contact;
use App\Models\post;
use Illuminate\Http\Request;
use Hash;
use Session;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(post $post)
    {
        $data = array();
        if (Session::has('loginId')){
            $data = register::where('id', '=', Session::get('loginId'))->first();
        }
        $posts = post::all();
        return view('index', compact('posts'))->with('postArr',post::all());
        // $posts = post::all();
        // return view('index', compact('posts'));
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function collection()
    {
        $posts = post::all();
        return view('collection', compact('posts'));
        // return view("collection");
    }

    public function contact()
    {
        return view("contact");
    }

    public function post()
    {
        return view("post");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'user name'=>'required',
            'email'=>'required|email|unique:registers',
            'password'=>'required|min:5|max:12',

        ]);
         $res=new register;
        $res->user_name=$request->input('user_name');
        $res->first_name=$request->input('first_name');
        $res->last_name=$request->input('last_name');
        $res->email=$request->input('email');
        $res->password= Hash::make($request->input('password'));
        $res->confirm_password= Hash::make($request->input('confirm_password'));
        $res->save();

        return redirect('/login');
    //    return $pdf->stream();
    }

    public function loginstore(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            // 'password'=>'required'
            'password'=>'required|min:5|max:12'
        ]);
        $res = register::where('email', '=', $request->email)->first();
        if ($res){
            if (Hash::check($request->password, $res->password)){
                $request->session()->put('loginId', $res->id);
                return redirect('/');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else {
            return back()->with('fail','This email is not registered.');
        }
    }

    public function dashboard(){
        // $data = array();
        // if (Session::has('loginId')){
        //     $data = register::where('id', '=', Session::get('loginId'))->first();
        // }
        // return view('dashboard', compact('data'));
    }

    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
        }
    }

    public function contactstore(Request $request)
    {
        $res=new contact;
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->comments=$request->input('comments');
        $res->save();
        return back();
    }

    public function poststore(Request $request)
    {
        $photo=new post;
        $photo->name=$request->input('name');
        $photo->email=$request->input('email');
        $photo->title=$request->input('title');
        $photo->category=$request->input('category');
        // $res->file=$request->input('file');
        // $res->file('file')->storeAs('public/images/'. $file);
        $size = $request->file('image')->getSize();
        $imgname = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('/public/images/', $imgname);
        // $photo = new photo();
        $photo->imgname = $imgname;
        $photo->size = $size;
        // $photo->save();

        $photo->description=$request->input('description');
        $photo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
