<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'nombre', 'telefono', 'mail','photo','direccion'
    ];

    public function getPhotoImageAttribute($value) {
        return $this->photo == null ? asset('images/null.png') : asset($this->photo);
    }
    public function getPhotoFilenameAttribute($value) {
        return substr($this->photo, 30, strlen($this->photo));
    }


    public function setPhotoAttribute($value) {
        $filename = substr(md5(rand(100000, 999999)),0,5) .'_'. $value->getClientOriginalName();
        $filepath = 'public/uploads/'.date('Y').'/'.date('m').'/';
        if ($value->isValid()) {
            $path = $value->storeAs($filepath, $filename);
        }
        $this->attributes['photo'] = str_replace('public', 'storage', $filepath) . $filename;
    }
}
