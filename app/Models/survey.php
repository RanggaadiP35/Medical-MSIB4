<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    use HasFactory;

    protected $table = 'masyarakat';

    protected $fillable = [
        'nama','gender', 'umur', 'tinggi_badan', 'berat_badan', 'domisli_id'
    ];

    public function domisli()
    {
        return $this->belongsTo(domisli::class);
    }

    public $timestamps = false;
}
