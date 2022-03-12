<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stocks extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'stocks';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['method', 'stockId', 'price', 'qty', 'transactionDate'];
    
    /**
     * Get the Company that owns the Stocks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company() {
        return $this->belongsTo(Company::class, 'stockId', 'stockId');
    }
}
