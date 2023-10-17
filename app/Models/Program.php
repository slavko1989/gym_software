<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Trainer;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name','price'];

    public function trainer() :HasMany{
        return $this->hasMany(Trainer::class);
    }
}
