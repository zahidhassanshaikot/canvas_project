<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
use App\Customer;
use App\Comment;
use App\Message;
use App\OrderDemo;
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
        $orderInfo=OrderDemo::orderBy('id','desc')->get();
        return view('Admin\order-info',[
            'orderInfos'=>$orderInfo
        ]);
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
    public function newOrder($id){
        if(Session::get('customer_id')){
        return view('order',[
            'demo_id'=>$id
        ]);
        }else {
            return redirect()->back()->with('message','Login please');
        }
    }
    public function sendOrderReq(Request $request){
      $this->validate($request, [
            'demo_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);
        $order=new OrderDemo();
        $order->demo_id=$request->demo_id;
        $order->name=$request->name;
        $order->address=$request->address;
        $order->email=$request->email;
        $order->phone_no=$request->phone_no;
        $order->quentity=$request->quentity;
        $order->status='Pending';
        $order->save();

        return redirect()->back()->with('message','Order Request send successfully');
    }
    public function acceptOrderRreq($id){

        $order=OrderDemo::find($id);
    
        $order->status='Accepted';
        $order->save();

        return redirect()->back()->with('message','Order Request Accepted');
    }
    public function rejectOrderRreq($id){

        $order=OrderDemo::find($id);
    
        $order->status='Rejected';
        $order->save();

        return redirect()->back()->with('message','Order Request Accepted');
    }
    public function myOrder(){
        if(Session::get('customer_id')){
        $customer_id= Session::get('customer_id');
        $order=OrderDemo::join('product', 'order_demo.demo_id', '=', 'product.id')
        ->where('customer_id',$customer_id)
        ->select('order_demo.*','product.demo_name','product.demo_type')->get();

        return view('my-order',['orders'=>$order]);
        }else {
            return redirect()->route('login-page');
        }
    }
    public function customerLogout(){
        if(Session::get('customer_id')){
        Session::forget('customer_id');
        Session::forget('customer_fname');
        return redirect()->route('/');
        
        }else {
            return redirect()->back()->with('message','Login please');
        }
    }
    public function customerLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $objCustomer=Customer::where('email',$request->email)->first();
        if (Hash::check($request->password,$objCustomer->password)) {
        Session::put('customer_id', $objCustomer->id);
        Session::put('customer_fname', $objCustomer->fname); 
        return redirect()->route('/');
        
        }else{
            return redirect()->back();
        }
    }
    public function searchResult(Request $request){
           $this->validate($request, [
            'search_key' => 'required'
        ]);
        $searchKeyword=$request->search_key;
        $queryDemo=Demo::where("demo_type", "LIKE","%$searchKeyword%")
            
            ->orWhere("demo_name", "LIKE", "%$searchKeyword%")
            ->orWhere("price", "LIKE", "%$searchKeyword%")
            ->orWhere("owner", "LIKE", "%$searchKeyword%")
            ->orderBy('id','DESC')
            ->paginate(8);

        return view('search-result',['queryDemo'=>$queryDemo]);
    }
    public function userMessages(){
        if(Session::get('customer_id')){
            $customer_id= Session::get('customer_id');
            $messages=Message::where('customer_id',$customer_id)->orderBy('id','DESC')->get();

        return view('user-message',['messages'=>$messages]);
        
        }else {
            return redirect()->back()->with('message','Login please');
        }
    }
    public function sendUserMessages(Request $request){
        $this->validate($request, [
            'message' => 'required'
        ]);
        $message=new Message();

        $message->customer_id=Session::get('customer_id');
        $message->message=$request->message;
        $message->status='Unseen';
        $message->save();

        return redirect()->back();
    }
    public function messagesList(){
        $messageUser=Message::join('customer','customer.id','=','messages.customer_id')
        ->select('customer.id','customer.fname','messages.status')->groupBy('customer.id','customer.fname','messages.status')->get();
        // return $messageUser;
        return view('Admin.user-message-list',['messageUser'=>$messageUser]);
    }
    public function admimMessage($id){
        $messages=Message::where('customer_id',$id)->orderBy('id','DESC')->get();

        foreach($messages as $message){
           
            $message->status='Seen';
            $message->save();
        }

        return view('Admin.admin-message',[
            'messages'=>$messages,
            'customer_id'=>$id
            ]);
    }
    public function sendAdminMessage(Request $request){
         $this->validate($request, [
            'message' => 'required'
        ]);
        $message=new Message();

        $message->message=$request->message;
        $message->customer_id=$request->customer_id;
        $message->admin=1;
        $message->status='Unseen';
        $message->save();

        return redirect()->back();
    }
}
