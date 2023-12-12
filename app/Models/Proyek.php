<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proyek extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the klien that owns the Proyek
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function klien(): BelongsTo
    {
        return $this->belongsTo(Klien::class, 'klien_id', 'id');
    }
}
