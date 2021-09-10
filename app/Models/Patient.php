<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'tbl_patient';

    
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'date_of_birth', 'general_comments', 'gender_id', 'service_id'

    ];


    /**

     * Get the phone record associated with the user.

     */

    public function gender()
    {

        return $this->belongsTo(Gender::class, 'gender_id', 'id');

    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
