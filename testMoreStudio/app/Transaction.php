<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table		= 'transaction';
    protected $primaryKey	= 'id';
    public    $timestamps 	= true;
}
