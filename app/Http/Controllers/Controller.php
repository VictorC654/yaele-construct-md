<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        return View('yaele-construct-md.home');
    }

    public function displayProject($id)
    {
        return View('yaele-construct-md.project-view', [
            'project' => Project::find($id),
        ]);
    }
    public function displayApartment($id)
    {
        return View('yaele-construct-md.apartment-view', [
            'apartment' => Apartment::find($id),
        ]);
    }
}
