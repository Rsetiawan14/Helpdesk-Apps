<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table ='employee';
    protected $fillable= ['NIK','nama','divisi','bagian','user_id'];

    public function mstreport()
    {
        return $this->hasMany(Mstreport::class);
    }
}
