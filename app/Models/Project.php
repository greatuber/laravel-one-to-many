<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["name_project", "description"];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function redDescription($n_chars = 20)
    {
        return(strlen($this->description) > $n_chars) ? substr($this->description, 0, $n_chars) . "..." : $this->description;
    }
}
