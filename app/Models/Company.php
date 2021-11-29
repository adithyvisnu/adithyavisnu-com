<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    public $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get all of the Stocks for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks() {
        return $this->hasMany(Stocks::class, 'stockId', 'stockId');
    }
}