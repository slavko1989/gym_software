<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


use App\Models\Program;
use App\Models\Member;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable =['name','email','phone','country','city','address','profile','pr_id'];

     public function program() : BelongsTo{
        return $this->belongsTo(Program::class,'pr_id');
    }
    public function members() :HasMany{
        return $this->hasMany(Member::class);
    }
}
