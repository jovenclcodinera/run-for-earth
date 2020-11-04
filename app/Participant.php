<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $key = 'id';
    protected $guarded = [];

    public function setCreatedAtAttribute($value) {
        $this->attributes['created_at'] = $value->setTimezone('Asia/Manila');
    }
}
