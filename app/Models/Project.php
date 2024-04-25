<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['project_title', 'price', 'discount'];

    public function getTotalPriceAttribute()
    {
        return $this->price - $this->discount;
    }

    public static function getProjects()
    {
        return DB::select('CALL sp_get_projects();');
    }
}
