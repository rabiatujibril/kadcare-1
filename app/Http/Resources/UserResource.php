<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'othernames' => $this->othernames,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'marital_status' => $this->marital_status,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => $this->status,
            'fcm_token' => $this->fcm_token,
            'created_at' => $this->created_at->format('Y-m-d'),
            'updated_at' => $this->updated_at->format('Y-m-d'),
            'facility' => $this->facility()->facility_id ?? null,
            'is_health_worker' => $this->health_worker()->facility_id ?? null,
            'lga' => $this->lga()->lga_id ?? null,

        ];
    }
}
