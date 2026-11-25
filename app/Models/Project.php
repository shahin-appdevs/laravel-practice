<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;



#[Fillable(['title', 'description', 'image', 'live_url', 'github_url'])] //specifies kon kon field gulo accept korbe
class Project extends Model
{
    //
}
