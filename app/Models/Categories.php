<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;

    //protected $table = ["categories"];
    protected $fillable = ['id','name','price'];

    public function members() :HasMany{
        return $this->hasMany(Member::class);
    }
}
