<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'district',
        'zonalEducationOffice',
        'schoolName',
        'student_or_teacher',
        'grade',
        'telNo',
        'postalAddress',
        'reason'

    ];

    //protected $table ="tab_requests";

    protected $guarded = [ ];

    //one-to-one relationship with user table
    public function user(){
        return $this->belongsTo(User::class, 'userId', 'id');
    }


}
