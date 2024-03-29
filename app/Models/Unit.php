<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['unit_name', 'qualification', 'objective', 'subject_id'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

}
