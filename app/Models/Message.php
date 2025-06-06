<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Message extends Model
{
     protected $table = 'messages';
    protected $primaryKey = 'id';
     protected $fillable = [
          'code',
          'format',
          'messagetype',
        ];
     use HasFactory;
}