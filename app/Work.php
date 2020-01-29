<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function getSummary()
    {
        $description = strip_tags($this->description);
        $explode = explode(' ', $description);
        if (count($explode) > 10) {
            $description = implode(' ', array_slice($explode, 0, 10)) . '...';
        }
        
        return $description;
    }

    public function getImageUrl()
    {
        if (\Request::secure()) {
            return \Cloudder::secureShow($this->image);
        }
        return \Cloudder::show($this->image);
    }
}
