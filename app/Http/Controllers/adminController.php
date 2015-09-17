<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Pesan;
use App\Redirect;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
class adminController extends Controller
{
    // Middleware Default sementara
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $user=Auth::user();
        $contact=Contact::all();
        return view('admin.index',compact('user','contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Fungsi untuk read mail yang masuk dari Contact Us
     * @param int $id 
     */
    public function readMail($id)
    {
        $user=Auth::user();
        $data=Contact::findOrFail($id);
        return view('admin.readMail',compact('user','data'));
    }
    /**
     * Fungsi untuk Send mail yang admin kirim
     * @param int $id 
     */
    public function sendEmail($id)
    {
        $user=Auth::user();
        $data=Contact::findOrFail($id);
        return view('admin.sendEmail',compact('user','data'));
    }
    /**
     * Fungsi untuk Save reply yang admin kirim
     * 
     */
    public function saveEmail(Request $request)
    {
        $testing=Contact::latest()->first();
        
        $pesan=new Pesan();
        $pesan->email=$request->get('email');
        $pesan->name=$request->get('name');
        $pesan->message=$request->get('message');
        $pesan->save();

        $reply=Pesan::latest()->first();
        Mail::send('emails.reply',['reply'=>$reply],function ($message)  use ($reply){
            $message->to($reply->email)
                    ->subject('Membalas Pertanyaan Anda');
        });
        $user=Auth::user();
        $contact=Contact::all();
        return view('admin.index',compact('user','contact'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        return view('admin.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Upload an image to become avatar
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    
    public function UpImage( )
    {
         $dataUser=Auth::user();
         $UserID=$dataUser->id;
         $file =Input::file('image');
         $image_name=time()."-".$file->getClientOriginalName();
         $file->move(public_path().'/upload',$image_name);
         $imageUpload=User::findOrFail($UserID);
         $imageUpload->image=$image_name;
         $imageUpload->save();
         return Redirect('admin')->with('user');
    }
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
