<?php

namespace App;

use App\Userid;
use Illuminate\Database\Eloquent\Model;

class Userid extends Model
{
    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtolower($value);
    }

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }
}