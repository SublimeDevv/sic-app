<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students_has_activity extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'activity_id'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
