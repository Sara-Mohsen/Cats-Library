<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cats;
use App\Http\Resources\CatResource;

class CatController extends Controller
{

public function index()
{
    return CatResource::collection(Cats::all());
}

public function show(Cats $cat)
{
    return new CatResource($cat);
}

public function store(Request $request)
{
    $cat = Cats::create($request->all());

    return new CatResource($cat);
}

public function update(Request $request, Cats $cat)
{
    $cat->update($request->all());

    return new CatResource($cat);

}

public function destroy(Cats $cat)
{
    $cat->delete();

    return response()->json(null, 204);
}
}
