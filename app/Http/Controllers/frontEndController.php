<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\Contact;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Image;
use App\News;
use App\Produk;
use App\Slider;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
class frontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $dataSlider=Slider::all();
        $dataFirst=Slider::first();
        $dataBanner=Banner::all();
        $produk=Produk::paginate(2);
        $tipe=Type::all();
        return view('FrontEnd.home',compact('dataSlider','dataFirst','dataBanner','produk','tipe'));
    }
    /**
     * Fungsi buat tampilin semua data Produk
     */

    public function Produkpage()
    {
         $produk=Produk::paginate(2);
          $tipe=Type::all();
        return view('FrontEnd.product',compact('produk'));
    }/**
     * Fungsi buat tampilan about us
     */

    public function aboutUs()
    {
         $about=About::first();
         $gallery=Image::all();
          $tipe=Type::all();
        return view('FrontEnd.aboutUs',compact('about','gallery','tipe'));
    }
    /**
     * Fungsi buat nunjukin salah satu detail Produk
     */
     public function ProdukDetail($id)
    {
        $navigasi=navPrevNextwithType($id,'App\Produk');
        return view('FrontEnd.productDetail')->with($navigasi);
    }
    
    /**
     * Fungsi untuk proses contact Us
     */
     public function contactUs()
    {
         $tipe=Type::all();
        return view('FrontEnd.contactUs',compact('tipe'));
    }
    
    /**
     * Fungsi untuk Pengiriman data setelah user mengirimknan pesan
     */
     public function sendMessage(Request $request)
    {
        $contact=new Contact();
        $contact->name=$request->get('name');
        $contact->phone=$request->get('phone');
        $contact->email=$request->get('email');
        $contact->message=$request->get('message');
        $contact->save();
        
        Session::flash('send','Data Berhasil di kirim');
        return Redirect('/contactUs');
    }
    /**
     * Fungsi buat tampilin semua data News
     */
     public function newsPage()
    {
         $news=News::paginate(2);
          $tipe=Type::all();
        return view('FrontEnd.news',compact('news','tipe'));
    }
    
    /**
     * Display Detail dari News yang dipilih
     *
     * @param  int  $id
     * @return Response
     */
    public function newsDetail($id)
    {
        //navPreNext fungsinya ada di App/cmsHelpers
       $navigasi=navPrevNext($id,'App\News');
        $tipe=Type::all();
        return view('FrontEnd.newsDetail',compact('tipe'))->with($navigasi);
    }
     /**
     * Fungsi buat tampilin semua data Gallery 
     * terdapat pagination
     */
      public function galleryPage()
    {
         $gallery=Gallery::paginate(4);
          $tipe=Type::all();
        return view('FrontEnd.gallery',compact('gallery','tipe'));
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
