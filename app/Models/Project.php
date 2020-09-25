<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function linked_users()
    {
        return $this->belongsToMany(User::class);
    }

    public function linked_labels()
    {
        return $this->belongsToMany(Label::class);
    }
}
