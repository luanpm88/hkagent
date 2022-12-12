<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'path'
    ];

    public function getUrl()
    {
        return route('app_assets', [
            'path' =>  base64_encode($this->path),
        ]);
    }
}
