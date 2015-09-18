<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class galleryController extends Controller
{
    // Middleware Default sementara
    public function __construct()
    {
        $this->middleware('admin');
    }
      /**
     * Helper untuk melakukan Add new Data ke dalam database
     * 
     */
    private function addData()
    {
        $data=new Gallery();      
        $file =Input::file('gallery');
        $image_name=time()."-gallery-".$file->getClientOriginalName();
        $file->move(public_path().'/upload',$image_name);
        $data->image=$image_name;
        $data->save();
        return true;
    }
    /**
     * Helper untuk melakukan Update new Data ke dalam database
     * @param int $id
     */
     private function updateData($id=0)
    {
        $data=Gallery::findOrFail($id);
       $file =Input::file('gallery');
        $image_name=time()."-gallery-".$file->getClientOriginalName();
        $file->move(public_path().'/upload',$image_name);
        $data->image=$image_name;
        $data->save();
        return true;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $showDefault=cmsHelp('App\Gallery','galleries');
        return view('admin.gallery')->with($showDefault); 
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
        $this->addData();
       
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
        $showDefault=cmsHelpWithId($id,'App\Gallery','galleries');
         return view('admin.updateGallery')->with($showDefault);
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
        $this->updateData($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
       $showDefault=cmsHelp('App\Gallery','galleries');
       return Redirect('galleryAdmin')->with($showDefault);  
    }
}
