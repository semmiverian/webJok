<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Redirect;
use App\Slider;
use DB;
class slideController extends Controller
{   
      /**
     * Helper untuk melakukan Add new Data ke dalam database
     * 
     */
    private function addData()
    {
        $data=new Slider();      
        $file =Input::file('slide');
        $image_name=time()."-slideshow-".$file->getClientOriginalName();
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
        $data=Slider::findOrFail($id);
        $file =Input::file('slide');
        $image_name=time()."-news-".$file->getClientOriginalName();
        $file->move(public_path().'/upload',$image_name);
        $data->image=$image_name;
        $data->save();
        return true;
    }
    // Middleware Default sementara
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $showDefault=cmsHelp('App\Slider','sliders');
        return view('admin.slider')->with($showDefault);
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
        $showDefault=cmsHelp('App\Slider','sliders');
        return Redirect('slider')->with($showDefault);
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
         $showDefault=cmsHelpWithId($id,'App\Slider','sliders');
         return view('admin.updateSlideShow')->with($showDefault);
        
    }

    public function showForm()
    {
        $showDefault=cmsHelp('App\Slider','sliders');
        return view('admin.addSlideShow')->with($showDefault);
         
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
        $showDefault=cmsHelp('App\Slider','sliders');;
        return Redirect('slider')->with($showDefault);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       Slider::destroy($id);
       $showDefault=cmsHelp('App\Slider','sliders');;
       return Redirect('slider')->with($showDefault);   
    }
}
