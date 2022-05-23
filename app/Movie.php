<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function changeDateFormat($date)
    {
        return date("d-m-Y", strtotime($date));
    }
}
