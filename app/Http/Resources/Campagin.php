<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use App\Http\Resources\Mark as MarkResource;
use App\Mark;
use App\CAtegory;
class Campagin extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
			'category_id' => $this->id,
            'category_title' => Category::findOrFail(Mark::findOrFail($this->mark_id)->category_id)->title,
			'category_fa_icon' => Category::findOrFail(Mark::findOrFail($this->mark_id)->category_id)->fa_icon,
			'mark_id' => $this->mark_id,
            'mark_name' => Mark::findOrFail($this->mark_id)->name,
			'value' => $this->value,
			'description' => $this->description,
			'status' => $this->status,
        ];
    }
	
	public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://vuelto.cl')
        ];
    }
	
}
