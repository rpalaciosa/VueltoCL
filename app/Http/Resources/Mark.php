<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Mark extends Resource
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
            'id_marca' => $this->id_marca,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'estado' => $this->estado,
            'logo' => $this->logo,
            'id_categoria' => $this->id_categoria,
            'url' => $this->url
        ];
    }
	
	public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://vuelto.cl')
        ];
    }
}
