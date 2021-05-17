<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnnounceResource;
use App\Models\Announce;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnnounceController extends Controller
{
    public function index()
    {
        return AnnounceResource::collection(Announce::paginate());
    }
    public function store(Request $request)
    {
        $announce = Announce::create($request->only('title','content','image'));
        return response(new AnnounceResource($announce),Response::HTTP_CREATED);
    }
    public function show($id)
    {
        return new AnnounceResource(Announce::find($id));
    }
    public function update(Request $request, $id)
    {
        $announce = Announce::find($id) ;
        $announce->update($request->only('title','content','image'));
        return response(new AnnounceResource($announce),Response::HTTP_ACCEPTED);
    }
    public function destroy($id)
    {
        Announce::destroy($id);
        return \response(null,Response::HTTP_NO_CONTENT);
    }
}
