<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'route_name', 'parent_id', 'order', 'icon'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
