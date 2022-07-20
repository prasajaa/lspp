<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{

    protected $guarded = [];
    protected $table = 'jadwal';
    use HasFactory, SoftDeletes;

        /**
         * Get the sampah that owns the JenisSampah
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function Kursus(): BelongsTo
        {
            return $this->belongsTo(Kursus::class, 'kursuses_id', 'id');
        }

}
