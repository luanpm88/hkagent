<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'phone', 'phone_2'
    ];

    public static function initialize()
    {
        $contact = new self();

        return $contact;
    }

    public function updateFromArray($params): MessageBag
    {
        // validate input data
        $validator = Validator::make($params, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        // fill form params
        $this->fill($params);
        $this->fillMetadata($params['metadata']);

        // if has errors
        if ($validator->fails()) {
            return $validator->errors();
        }

        // save
        $this->save();

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
}
