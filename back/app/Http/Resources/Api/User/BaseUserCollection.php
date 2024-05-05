<?php

namespace App\Http\Resources\User;

use App\Http\Resources\CoreCollection;
use Illuminate\Http\Request;

class BaseUserCollection extends CoreCollection
{

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
