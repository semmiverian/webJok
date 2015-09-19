<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Produk;
use App\Redirect;
use App\Type;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class produkController extends Controller
{
    /**
     * Helper untuk melakukan Add new Data ke dalam database
     * 
     */
    private function addData()
    {
        $data=new Produk();      
         $data->nama=Input::get('nama');
        $data->harga=Input::get('harga');
        $data->telepon=Input::get('telepon');
        $data->detail=Input::get('detail');
        $data->type_id=Input::get('tipe');
        $file =Input::file('produk');
        $image_name=time()."-produk-".$file->getClientOriginalName();
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
        $data=Produk::findOrFail($id);
        $data->nama=Input::get('nama');
        $data->harga=Input::get('harga');
        $data->telepon=Input::get('telepon');
        $data->detail=Input::get('detail');
        $data->tipe=Input::get('tipe');
        $file =Input::file('produk');
        $image_name=time()."-news-".$file->getClientOriginalName();
        $file->move(public_path().'/upload',$image_name);
        $data->image=$image_name;
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
        $showDefault=cmsHelp('App\Produk','produks');
        return view('admin.produk')->with($showDefault);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $showDefault=cmsHelp('App\Produk','produks');
        $tipe=Type::lists('name','id');
        return view('admin.addProduk',compact('tipe'))->with($showDefault);
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
         $showDefault=cmsHelp('App\Produk','produks');
         return Redirect('product')->with($showDefault);   
    }   
     /**
     * Add new type of car.
     *
     * @param  Request  $request
     * @return Response
     */
    public function addType(Request $request)
    {
         $tipe=new Type();
         $tipe->name=$request->get('type');
         $tipe->save();
         $showDefault=cmsHelp('App\Produk','produks');
         return Redirect('product')->with($showDefault);   
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
         $showDefault=cmsHelpWithId($id,'App\Produk','produks');
         return view('admin.updateProduk')->with($showDefault);
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
         $user=Auth::user();
        $data=Produk::findOrFail($id);
        $count=DB::table(produks)->count();
        $tipe=Produk::lists('tipe','tipe');
        return view('admin.updateProduk',compact('user','data','count','tipe'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Produk::destroy($id);
        $showDefault=cmsHelp('App\Produk','produks');
         return Redirect('product')->with($showDefault);   
    }
}
