<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Redirect;
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
        return view('admin.index',compact('user'));
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
