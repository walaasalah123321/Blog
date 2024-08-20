<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Setting extends Model implements TranslatableContract
{
    
    use HasFactory,Translatable;
    public $translatedAttributes = ['title', 'content',"address"];
    protected $fillable=["logo","facebook","favican","phone","email","instagram"];
    
    public static function ChangSetting()  {
        $setting=Self::all();
        if(count($setting)<1){
            $data=["id"=>1];
            foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
                $data[$localeCode]["title"]=$properties["native"];
            }
            Self::create($data);   
        }
        return Self::first();
    }
    
}
