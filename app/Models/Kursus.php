<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kursus extends Model
{

    protected $guarded = [];
    protected $table = 'kursuses';
    use HasFactory, SoftDeletes;

        /**
         * Get the sampah that owns the JenisSampah
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function Jadwal(): HasMany
        {
            return $this->hasMany(Jadwal::class, 'kursuses_id', 'id');
        }

}
