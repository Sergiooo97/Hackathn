<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class avatarModel extends Model
{
    protected $fillable = [
        'id','src',
    ];


    public static function setAvatar($avatar, $actual= false){
        if($avatar){
            if($actual){
                Storage::disk('public')->delete("imagenes/$actual");
            }
            $imageName = auth()->user()->matricula.'.jpg';
            $imagen = Image::make($avatar)->encode('jpg', 100);
            
            $imagen->resize(500, 500, function($constraint){
                    $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/$imageName", $imagen->stream());
            return $imageName;

        }else{
            return false;
        }


    }
}
