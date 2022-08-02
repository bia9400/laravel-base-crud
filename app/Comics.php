<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
   public  $fillable=["title","description","thumb","price","series","sale_date","type"];
}
