<?php

namespace App\Http\Controllers;

use App\trait\Common;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    
    public function update(Request $request , Setting $setting )
    {
        // need validate  
        
        
        $data=$request->except("_token");
        if($request->has('logo')) 
        $data["logo"]=$this->uploadFile($request->logo,"assets/images");
        if($request->has('favican'))
         $data["favican"]=$this->uploadFile($request->favican,"assets/images");
        $setting->update($data);
      return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
