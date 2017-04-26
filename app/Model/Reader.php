<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
class Reader extends Model
{
    use Authorizable;
    protected $table = 'user';
    public $timestamps=false;
}
