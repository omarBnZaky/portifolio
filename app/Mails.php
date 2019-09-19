<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mails extends Model
{
    protected $fillable=['name','email','body'];
}
