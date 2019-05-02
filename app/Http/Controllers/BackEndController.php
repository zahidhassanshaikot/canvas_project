<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
use App\Comment;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use File;
use Image;

class BackEndController extends Controller
{
    public function addDemo(){
        return view('Admin.add-post');
    }
    public function demoList(){
        $demo=Demo::all();
        return view('Admin.demo-list',['demos'=>$demo]);
    }
    public function deleteDemo($id){
        $demo=Demo::find($id);

        if (File::exists($demo->image)) {
            unlink($demo->image);
        }
        $demo->delete();
        return redirect()->back();
        
    }
    public function saveDemo(Request $request){

          $this->validate($request, [
            'demo_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
            'owner' => 'required'
        ]);
        // dd($request->file('image'));
        $demo=new Demo();
        $demo->demo_type=$request->demo_type;
        $demo->demo_name=$request->demo_name;
        $demo->price=$request->price;
        $demo->availabe_size=$request->availabe_size;
        $demo->owner=$request->owner;

        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
            $imageDemo = $request->file('image');
            $fileType = $imageDemo->getClientOriginalExtension();
            $imageName = date('YmdHis') . "CV" . rand(5, 10) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($imageDemo)->resize(300, 300)->save($imageUrl);
            $demo->image = $imageUrl;
        }


        $demo->save();

   
        return redirect()->back()->with('message','Successfully Saved');
        ;
    }
    public function commentList(){
        $commentList=Comment::all();
        // return $commentList;
        return view('Admin.comment-list',['commentList'=>$commentList]);
    }
    public function deleteComment($id){
        Comment::find($id)->delete();
        // return $commentList;
        return redirect()->back()->with('message','comment deleted');
    }
    public function customerList(){
        $customerList=Customer::all();
        return view('Admin.customer-list',['customerList'=>$customerList]);
    }
}
