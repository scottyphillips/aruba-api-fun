<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RejectedAuths extends Model
{
    protected $fillable = ['switch_id', 'port', 'mac_address'];

}
