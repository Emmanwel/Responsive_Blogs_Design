<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    use HasFactory;

       
    protected $guarded = [];
       
//Indivates that both of the fields are nullable

    //  protected $fillable = [
    //     'title',
    //     'short_title',
    //     'home_slide',
    //     'video_url',
    // ];
}
