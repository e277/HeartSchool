<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'f_name',
        'm_initial',
        'l_name',
        'dob',
        'email',
        'mobile',
        'course_name',
        'comments'
    ];

    public function enrollment() {
        return $this->belongsTo(Enrollments::class, 'user_id');
    }
}
