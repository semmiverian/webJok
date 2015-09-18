<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Redirect;
class aboutController extends Controller
{
    /**
     * Helper untuk melakukan Update new Data ke dalam database
     * @param int $id
     */
     private function updateData($id=0)
    {
        $data=About::findOrFail($id);
        $file =Input::file('headline');
        $image_name=time()."-headline-".$file->getClientOriginalName();
        $file->move(public_path().'/upload',$image_name);
        $data->gambar=$image_name;
        $data->save();
        return true;
    }
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
        $aboutUs=About::first();
        return view('admin.about',compact('user','aboutUs'));
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
        //
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
     * Update Headline About Us
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->updateData($id);
        $user=Auth::user();
        $aboutUs=About::find($id);
        return Redirect('aboutUsAdmin')->with('user','aboutUs');
    } 
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function updateDescription(Request $request, $id)
    {
        //
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
