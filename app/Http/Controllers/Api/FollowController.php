<?php

namespace App\Http\Controllers\Api;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $workId)
    {
        //
        $validated = $request->validate([
            'news' => 'required|array'
        ]);

        $work = Work::find($workId);

        if (!$work){
            return response()->json([
                'message' => 'El trabajo donde se solicita seguimiento no existe'
                ], 404);
        }

        $followsData = collect($validated['news'])->map(function ($newsItem) use ($work) {
            return [
                'work_id' => $work->id,
                'news' =>  $newsItem,
            ];
        });

        $work->follows()->createMany($followsData);

        return response()->json([
            'message' => 'Novedades añadidas correctamente',
            'work' => $work->load('follows'),
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
