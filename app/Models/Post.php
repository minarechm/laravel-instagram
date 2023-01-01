<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];/* docasne vypnutie protekcie, bacha na to, treba zmenit! */

    public function user(){
        return $this->belongsTo(User::class);
    }
}
