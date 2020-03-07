<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ["test_enum", "test_json"];
    protected $table = "test";
}
