<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
/**
     * Helper untuk show data secara default pada Controller ini
     * Param Pertama nama Model Param kedua nama tabel database
     * @param string $data
     * @param string $count
     */
     function cmsHelp($data='',$count='')
    {
         $user=Auth::user();
          $data=$data::all();
         $count=DB::table($count)->count();     
        // $this->user=$user;
        // $this->data=$data;
        // $this->count=$count;
        return $array = array('user' => $user ,'data' => $data,'count' => $count );
    }
    /**
     * Helper untuk show data secara default pada Controller ini jika membutuhkan ID
     * @param int $id
     * @param string $data
     * @param string $count  
     */
     function cmsHelpWithId($id=0,$data='',$count='')
    {
        $user=Auth::user();
        $data=$data::findOrFail($id);
        $count=DB::table($count)->count();
       return $array = array('user' => $user ,'data' => $data,'count' => $count );
    }
    /**
     * Fungsi Navigasi Prev dan Next
     * @param  int $id
     * @param  string $model
     * 
     */
     function navPrevNext($id=0,$model="")
    {
         $data=$model::findOrfail($id);
        $checkNext=$model::orderBy('id','desc')->first();
         // Ngecek data yang di show paling akhir atau engga
        // Kalau dia paling akhir maka tombol Next akan di Disabled 
            if($checkNext->id==$id){
                $next=0;
            }else{
                $next=$id+1;
                while (is_null($model::find($next))){
                    $next++;    
                }   
            }
                  
               
        // Ngecek data yang di show paling awal atau engga
        // Kalau dia paling awal maka tombol Prev akan di Disabled
        $checkPrev=$model::first();
        if($checkPrev->id==$id){
            $prev=0;
        }else{
            $prev=$id-1;  
             while (is_null($model::find($prev))){
                    $prev--;    
                }     
        }
        return $array = array('data' =>$data ,'prev'=>$prev,'next'=>$next );
    }