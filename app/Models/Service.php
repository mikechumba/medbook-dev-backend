<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'tbl_service';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
