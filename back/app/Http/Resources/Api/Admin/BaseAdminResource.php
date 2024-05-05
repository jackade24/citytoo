<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\CoreResource;
use Illuminate\Http\Request;

class BaseAdminResource extends CoreResource
{
   
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
