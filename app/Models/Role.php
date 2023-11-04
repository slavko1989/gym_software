<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function user_role() :BelongsTo{
        return $this->belognsTo(User::class,'role_id');
    }
}
