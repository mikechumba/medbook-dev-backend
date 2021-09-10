<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'tbl_gender';


    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
