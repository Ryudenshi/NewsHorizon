<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Project;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function projects(){

        return $this->hasMany(Project::class);
    } 

}
