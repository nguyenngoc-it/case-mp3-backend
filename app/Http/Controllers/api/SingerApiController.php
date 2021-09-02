<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerApiController extends Controller
{
    public function getAllSinger()
    {
        $singers = Singer::all();
        return response()->json($singers);
    }

    public function store(Request $request)
    {
        $singer = new Singer();
        $singer->name = $request->input('name');
        $singer->save();
        return response()->json($singer, 201);
    }

    public function updateSinger(Request $request, $id)
    {
        $singer = Singer::findOrFail($id);
        $singer->name = $request->input('name');
        $singer->save();
        return response()->json($singer, 202);
    }

    public function deleteSinger($id)
    {
        $singer = Singer::findOrFail($id);
        $singer->delete();
    }

    public function findSinger(Request $request)
    {
        $keyword = $request->input('search');
        $singers = Singer::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return response()->json($singers, 201);
    }

    public function singerDetail($id)
    {
        $singer = Singer::findOrFail($id);
        return response()->json($singer);
    }

    public function getListSongBySinger($singer_id)
    {
        $songs = Song::where('singer_id' , 'LIKE' ,'%' . $singer_id)->get();
        return response()->json($songs,201);
    }
}