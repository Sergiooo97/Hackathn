<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','avatar','name','lastName', 'carrera','matricula','semestre','rol','equipoName','equipoNumber', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function profile(){
        $usuario = Auth::user();
        return view('infoAlumno.index', compact('user'));
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function setAvatar($avatar, $actual= false){
        if($avatar){
            if($actual){
                Storage::disk('public')->delete("imagenes/$actual");
            }
            $imageName = Str::random(20).'.jpg';
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

    public function avatar_models()
{
   return $this->hasMany(avatarModel::class);
}
public function users()
{
   return $this->belongsTo(User::class);
}
}
