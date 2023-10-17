<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Companies extends Model
{
    use HasFactory;
    protected $fillable =['name','email','phone','country','city','address'];

    public function members() :HasMany{
        return $this->hasMany(Member::class);
    }
}
