<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function screen1(Request $request)
    {
        $search = $request->get('search');
        $query = Animal::query();
        $query->orWhere('title', 'like', "%$search%");
        $query->orWhere('status', 'like', "%$search%");
        $query->orWhere('notes', 'like', "%$search%");
        $result = $query->paginate(20);

        return response()->json($result);
    }
}
