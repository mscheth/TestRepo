<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;



class studentsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
    {
        // Validate the request...
        
        $std = students::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address
        ]);
        return $std;
    } 

    //update the values
    public function update(Request $request){

        $reqdata = $request->all(); 
 
         $reqdata['name'] = $request->name;
         $reqdata['email'] = $request->email;
         $reqdata['address'] = $request->address;
 
          $lesson= students::where('id',$request->id)->update($reqdata);
          
 
         if ($lesson) {
 
             return 'true';
 
         }else{
 
             return 'false';
 
         }
 
     }

     //to show the value usimg id

     public function show(Request $request)
     {
         return students::all();

     }

     public function delete(Request $request)
     {
         $del=students::find($request->id);
         return $del->delete();
     }
     
     public function showone(Request $request,$id)
     {      
         $showonee=students::find($request->id);

         return $showonee;

     }
     public function showw()
     {
         return view('show')->with('data',students::all());
     }
}

