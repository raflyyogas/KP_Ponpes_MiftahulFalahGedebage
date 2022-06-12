<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use Sluggable, HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
          
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('judul', 'like', '%' . $search . '%')
                             ->orWhere('deskripsi', 'like', '%' . $search . '%');
             });
         });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
