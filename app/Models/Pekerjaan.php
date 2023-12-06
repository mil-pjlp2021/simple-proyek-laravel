<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the tipe that owns the Pekerjaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipe(): BelongsTo
    {
        return $this->belongsTo(TipePekerjaan::class, 'tipe_pekerjaan_id', 'id');
    }
}
