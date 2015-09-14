<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use Auth;
use Illuminate\Support\Facades\Input;
use DB; 
use App\Redirect;
use App\cmsHelpers;
class newsController extends Controller
{
    
    /**
     * Helper untuk melakukan Add new Data ke dalam database
     * 
     */
    private function addData()
    {
        $data=new News();      
        $data->judul=Input::get('judul');
        $data->isi=Input::get('isi');
        $file =Input::file('berita');
        $image_name=time()."-news-".$file->getClientOriginalName();
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
        $data=News::findOrFail($id);
        $data->judul=Input::get('judul');
        $data->isi=Input::get('isi');
        $file =Input::file('berita');
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
        // Bikin ada $this di depan kalau panggil function yang satu class
        //  $this->addData($id);
        // $showDefault=$this->cmsHelp();
        // Param Pertama nama Model Param kedua nama tabel database
        $showDefault=cmsHelp('App\News','news');
        return view('admin.news')->with($showDefault);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $showDefault=cmsHelp('App\News','news');
        return view('admin.addNews')->with($showDefault);   
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
        $showDefault=cmsHelp('App\News','news');
        return Redirect('newsAdmin')->with($showDefault);   
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
          $showDefault=cmsHelpWithId($id,'App\News','news');
         return view('admin.updateNews')->with($showDefault);
         
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
       $showDefault=cmsHelp('App\News','news');
        return Redirect('newsAdmin')->with($showDefault);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        News::destroy($id);
       $showDefault=cmsHelp('App\News','news');
        return Redirect('newsAdmin')->with($showDefault);   

    }
}
