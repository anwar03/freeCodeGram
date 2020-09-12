<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ( $this->image ) ?  $this->image : 'profile/2DgwLJXNC9QcuXSVCrRces5sdaRc8Xwc601xrTK2.png';
        return '/storage/'. $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
