<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueueNumModel extends Model
{
    use HasFactory;
    protected $table = 'queue_number';

    protected $fillable = [
        'id',
        'queue_name_number',
        'usertype_id',
        'designation_id',
        'user_id',
        'que_status',
    ];

    public function user_type()
    {   
        //Model name tapos name sa column sa imong database
        return $this->belongsTo(UserType::class, 'usertype_id');
    }

    public function usersID()
    {   
        //Model name tapos name sa column sa imong database
        return $this->belongsTo(User::class, 'user_id');
    }
}
