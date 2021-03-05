<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mstreport extends Model
{
    protected $table ='mstreport';
    protected $fillable= ['nama_req','laporan','catatan_req','nama_tech','catatan_tech','status','tgl_req','tgl_tech'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
