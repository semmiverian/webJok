<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Roles;
use Auth;
use Session;
use App\Redirect;
class userControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $showDefault=cmsHelp('App\User','users');
        return view('admin.user')->with($showDefault);
    }
    /**
     * Fungsi untuk memvalidasi user dari Unvalidate menjadi Staff
     *@param int $id
     */
    public function validateUser($id)   
    {
       // User::find($id)->assignRoles('staff');
       $user=User::find($id);
       $user->assignRoles(2);
       $showDefault=cmsHelp('App\User','users');
       Session::flash('add','$alert->name');
       // return Redirect('usercontrol')->with($showDefault);
       return Redirect('usercontrol')->with($showDefault);
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
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       User::destroy($id);
       $showDefault=cmsHelp('App\User','users');
       return Redirect('usercontrol')->with($showDefault);
    }
}
