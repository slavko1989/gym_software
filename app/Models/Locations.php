<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Member;

class Locations extends Model
{
    use HasFactory;

    protected $fillable =['country','city','street','phone','email'];

    public function members() :HasMany{
        return $this->hasMany(Member::class);
    }
}
