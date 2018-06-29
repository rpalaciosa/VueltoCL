<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark;
use App\Category;
use App\Campagin;
use App\Http\Resources\Campagin as CampaginResource;

class SiteController extends Controller
{
    public function listOffers()
    {
         // Obtenemos las marcas
        $campagin = Campagin::paginate(50);

        return CampaginResource::collection($campagin);
    }
	
	public function index()
    {
         // Obtenemos las marcas
        $campagin = Campagin::paginate(50);

        return CampaginResource::collection($campagin);
    }
}
