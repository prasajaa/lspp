<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Sampah;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Checkout extends Model
{
    protected $guarded = [];
    protected $table = 'pendaftaran';
    use HasFactory, SoftDeletes;
/**
 * Get the Sampah that owns the Checkout
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function kursus(): BelongsTo
{
    return $this->belongsTo(Kursus::class ,'kursuses_id','id');
}

/**
 * Get the user that owns the Checkout
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function User(): BelongsTo
{
    return $this->belongsTo(User::class);
}


}
