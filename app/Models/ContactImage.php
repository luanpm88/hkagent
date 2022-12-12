<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Contact;

class ContactImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'path'
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function getUrl()
    {
        return route('app_assets', [
            'path' =>  base64_encode($this->path),
        ]);
    }

    public function deleteAndCleanup()
    {
        Storage::delete($this->path);

        $this->delete();
    }
}
