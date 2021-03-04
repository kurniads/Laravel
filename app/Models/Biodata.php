<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biodata extends Model
{
    use HasFactory;
    use SoftDeletes;

    //nama yang ada di database
    protected $fillable = ['nama_bio','umur_bio','alamat_bio'];
    //atau
    // protected $guarded = ['id','created_at','updated_at'];

    //jika nama tabel database tidak mengikuti aturan(default) laravel
    //protected $table = 'namaTable';

    //jika ingin menambahkan primary key dari tabel database
    //protected $primaryKey = 'biodata_id';
}
