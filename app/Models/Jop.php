<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Jop //extends Model
{
    public static function all()
    {
        return[
            ["title"=>"SoftWare" , "salary"=>"$1000"],
            ["title"=>"CyberSecurity" , "salary"=>"$2000"]
        ];
    }
}
