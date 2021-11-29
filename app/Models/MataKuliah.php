<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id_mata_kuliah';
    protected $fillable = ['nama_mata_kuliah'];
    public $incrementing = true;
    public $timestamp = false;
}
