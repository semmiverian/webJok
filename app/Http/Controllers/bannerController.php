<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Banner;
use Auth;
use Illuminate\Support\Facades\Input;
use DB; 
use App\Redirect;
class bannerController extends Controller
{
    /**
     * Helper untuk melakukan Add new Data ke dalam database
     * 
     */
    private function addData()
    {
        $data=new Banner();      
        $file =Input::file('banner');
        $image_name=time()."-banner-".$file->getClientOriginalName();
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
        $data=Banner::findOrFail($id);
        $file =Input::file('banner');
        $image_name=time()."-banner-".$file->getClientOriginalName();
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
        $showDefault=cmsHelp('App\Banner','banners');
        return view('admin.banner')->with($showDefault);
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
         $showDefault=cmsHelp('App\Banner','banners');
         return Redirect('banner')->with($showDefault);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $showDefault=cmsHelpWithId($id,'App\Banner','banners');
         return view('admin.updateBanner')->with($showDefault);
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
        $showDefault=cmsHelp('App\Banner','banners');
         return Redirect('banner')->with($showDefault);   
    }
    public function showForm()
    {
         $showDefault=cmsHelp('App\Banner','banners');
        return view('admin.addBanner')->with($showDefault);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Banner::destroy($id);
        $showDefault=cmsHelp('App\Banner','banners');
        return Redirect('banner')->with($showDefault);   
    }
}
