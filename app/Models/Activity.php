<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['activity_name', 'percentage', 'unit_id'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function students()
{
    return $this->belongsToMany(Student::class, 'activity_student');
}

}
