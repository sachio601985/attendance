<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stamps extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','work_date','work_start_time','work_end_time'];
}