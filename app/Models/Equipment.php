<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded =[];
    
    protected $table = 'equipments';

    protected $dates = ['deleted_at'];
    
    public function type()
    {
        return $this->belongsTo(Type::class, 'code_type', 'id');
    }
}
