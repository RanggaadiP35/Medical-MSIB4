<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domisili extends Model
{
    use HasFactory;

    protected $table = 'domisili';

    protected $filable = ['nama'];

    public function survey()
    {
        return $this->hasMany(survey::class);
    }

    public $timestamps = false;
}
