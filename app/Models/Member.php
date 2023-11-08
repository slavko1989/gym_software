<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Categories;
use App\Models\Companies;
use App\Models\Trainer;
use App\Models\Locations;


class Member extends Model
{
    use HasFactory;
    //protected $table = ['members'];
    protected $fillable =['name','email','phone','country','city','address','profile','date_begin','date_ex','cat_id','comp_id','status','payment','trainer_id','location_id'];

      public function categories() : BelongsTo{
        return $this->belongsTo(Categories::class,'cat_id');
    }

      public function company() : BelongsTo{
        return $this->belongsTo(Companies::class,'comp_id');
    }

      public function trainer() : BelongsTo{
        return $this->belongsTo(Trainer::class,'trainer_id');
    }

     public function location() : BelongsTo{
        return $this->belongsTo(Locations::class,'location_id');
    }

}
