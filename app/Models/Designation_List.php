<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation_List extends Model
{ 
    protected $table = "designation_list";
    use HasFactory;

    protected $fillable = [
        "id",
        "designation_name",
        "usertype_id",
    ];


    public function user_type()
    {   
        //Model name tapos name sa column sa imong database
        return $this->belongsTo(UserType::class, 'usertype_id');
    }
}
