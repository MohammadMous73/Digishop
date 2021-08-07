<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'title',
        'processormodel',
        'rammemory',
        'internalmemorycapacity',
        'gpumodel',
        'graphicmemory',
        'screensize',
        'screenaccuracy',
        'opticaldrive',
        'operatingsystem',
        'price',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
