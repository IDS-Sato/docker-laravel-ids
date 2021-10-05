<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kojidaicyo;

class KojidaicyoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kojidaicyos = kojidaicyo::all();
        return response()->json([
            'message' => 'ok',
            'data' => $kojidaicyos
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kojidaicyo = kojidaicyo::create($request->all());
        return response()->json([
            'message' => 'Book created successfully',
            'data' => $kojidaicyo
        ], 201, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kojidaicyo = kojidaicyo::find($id);
        if ($kojidaicyo) {
            return response()->json([
                'message' => 'ok',
                'data' => $kojidaicyo
            ], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json([
                'message' => 'kojidaicyo not found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'title' => $request->title,
            'author' => $request->author
        ];
        $kojidaicyo = kojidaicyo::where('id', $id)->update($update);
        if ($kojidaicyo) {
            return response()->json([
                'message' => 'kojidaicyo updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'kojidaicyo not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kojidaicyo = kojidaicyo::where('id', $id)->delete();
        if ($kojidaicyo) {
            return response()->json([
                'message' => 'kojidaicyo deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'kojidaicyo not found',
            ], 404);
        }
    }
}