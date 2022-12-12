<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\ContactImage;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'phone', 'phone_2', 'note'
    ];

    public function images()
    {
        return $this->hasMany(ContactImage::class);
    }

    public static function initialize()
    {
        $contact = new self();

        return $contact;
    }

    public function getImagesPath()
    {
        return "contacts/$this->id/images";
    }

    public function updateFromRequest($request): MessageBag
    {
        // validate input data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        // fill form params
        $this->fill($request->all());
        $this->fillMetadata($request->metadata);

        // if has errors
        if ($validator->fails()) {
            return $validator->errors();
        }

        // save
        $this->save();

        // upload images
        if ($request->images) {
            foreach($request->file('images') as $key => $image) {
                $path = $image->store($this->getImagesPath());

                $this->images()->create([
                    'path' => $path,
                ]);
            }
        }

        // delete images
        if($request->delete_images) {
            foreach($request->delete_images as $deleteId => $ok) {
                if ($ok == 'yes') {
                    $image = ContactImage::find($deleteId);
                    $image->deleteAndCleanup();
                }
            }
        }

        return $validator->errors();
    }

    public function getMetadata()
    {
        if (!$this->metadata) {
            return [];
        }

        return json_decode($this->metadata, true);
    }

    public function getMetadataByName($name)
    {
        return $this->getMetadata()[$name] ?? null;
    }

    public function fillMetadata($data)
    {
        $currentMetadata = $this->getMetadata();

        $data = array_merge($currentMetadata, $data);

        $this->metadata = json_encode($data);
    }

    public function updateMetadata($data)
    {
        $this->fillMetadata($data);
        $this->save();
    }

    public function getImages()
    {
        if (!$this->images()->count()) {
            return collect([]);
        }

        return $this->images()->get();
    }
}
