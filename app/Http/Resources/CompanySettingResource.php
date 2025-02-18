<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanySettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                 => $this->id,
            'company_name'       => $this->company_name ?? "",
            'company_title'      => $this->company_title ?? "",
            'phone'              => $this->phone ?? "",
            'bookbyphone'        => $this->bookbyphone ? json_decode($this->bookbyphone): '' ,
            'work_day'           => $this->work_day ?? "",
            'available_time'     => $this->available_time ?? "",
            'hotline'            => $this->hotline ?? "",
            'whats_app'          => $this->whats_app ?? "",
            'email'              => $this->email ?? "",
            'address'            => $this->address ?? "",
            'company_logo'       => $this->company_logo ? asset('storage/' . $this->company_logo) : "",
            'company_fav_icon'   => $this->company_fav_icon ? asset('storage/' . $this->company_fav_icon) : "",
            'admin_fav_icon'     => $this->admin_fav_icon ? asset('storage/' . $this->admin_fav_icon) : "",
            'signature'          => $this->signature ? asset('storage/' . $this->signature) : "",
            'website_link'       => $this->website_link ?? "",
            'facebook_link'      => $this->facebook_link ?? "",
            'linkdin_link'       => $this->linkdin_link ?? "",
            'x_link'             => $this->x_link ?? "",
            'tiktok_link'        => $this->tiktok_link ?? "",
            'instagram_link'     => $this->instagram_link ?? "",
            'google_tag'         => $this->google_tag ?? "",
            'youtube_link'       => $this->youtube_link ?? "",
            'about'              => $this->about ?? "",
            'footer_info'        => $this->footer_info ?? "",
        ];
    }
}
