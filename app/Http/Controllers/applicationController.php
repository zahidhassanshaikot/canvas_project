<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
use App\Customer;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use File;
use Image;

class applicationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function reg()
    {
        return view('register');
    }

    public function saveCustomerInfo(Request $request)
    {
         $this->validate($request, [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customer'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        // return $request;
        $customer=new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->phone_no = $request->phone_no;
        $customer->password = Hash::make($request->password);
        $customer->save();

        Session::put('customer_id', $customer->id);
        Session::put('customer_fname', $customer->fname);
        // Session::get('variableName');
        return redirect()->route('/');
    }

    public function demos($id)
    {
        $demos=Demo::where('demo_type',$id)->get();
        return view('demos',[
            'demos'=>$demos
        ]);
    }

    public function orderInfo()
    {
        return view('Admin\order-info');
    }
    public function singlePost($id)
    {
        $demo=Demo::find($id);
        // return $demo;
        $cmts=Comment::where('demo_id',$id)->get();
        return view('single-post',[
            'demo'=>$demo,
            'cmts'=>$cmts
        ]);
    }
    public function commentOnPost(Request $request){
        $this->validate($request, [
            'demo_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        $cmt= new Comment();
        $cmt->demo_id=$request->demo_id;
        $cmt->name=$request->name;
        $cmt->email=$request->email;
        $cmt->comment=$request->comment;
        $cmt->save();

        return redirect()->back();
        ;
    }
}
