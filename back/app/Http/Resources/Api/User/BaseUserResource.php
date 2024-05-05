<?php

namespace App\Http\Resources\User;

use App\Http\Resources\CoreResource;
use Illuminate\Http\Request;

class BaseUserResource extends CoreResource
{
   
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
