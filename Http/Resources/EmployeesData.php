<?php

namespace Modules\Personnel\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class EmployeesData extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $user = parent::toArray($request);

        $data = $this->load("contact", "group", "profile", "profile.department");
        return $data;;
    }
}
