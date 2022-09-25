<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Schema\Blueprint;


class Item extends Model
{
    use HasFactory;
    use \Orbit\Concerns\Orbital;

    public static function schema(Blueprint $table)
    {
        $table->increments('id');
        $table->string('text');
        $table->boolean('done');
        $table->softDeletes();
        $table->timestamps();
    }
}
