<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $fillable = [
        'trackid',
        'category',
        'priority',
        'subject',
        'message',
        'message_html',
        'dt',
        'status',
        'openedby',
        'closedby',
        'attachments',
        'locked',
        'history',
    ];
    protected $hidden = ['history'];
    //protected $dates = ['dt'];
}
