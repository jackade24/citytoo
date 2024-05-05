<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\CoreCollection;
use Illuminate\Http\Request;

class BaseAdminCollection extends CoreCollection
{

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
