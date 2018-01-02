<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\roomType;
use App\Http\Requests\admin\roomtypeValidation;


class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:sisadmin');
    }

    public function index()
    {
        $page['page_title'] = 'Room';
        $page['page_description'] = 'List of room type in nepal';

        $room = roomType::orderBy('name', 'asc')->get();
        if ($room) {
           return view('admin.room.index', compact(['page', 'room']));
        }else{ 
          return view('admin.room.index', compact(['page']));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = new roomType;
        $save->name = $request->name;
        $save->slug = $request->slug;
        $save->desc = $request->desc;

        $saveRoom = $save->save();

        if ($saveRoom) {
             return back()->withMessage('successfully added');
        }else{
             return back()->withMessage('Oops try it again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = roomType::findOrFail($id);
        if ($edit) {
           return response()->json([
             'success' => true,
             'id'      => $edit->id,
             'name'    => $edit->name,
             'slug'    => $edit->slug,
             'desc'    => $edit->desc
            ], 200);
        }else{
            return response()->json([
             'success' => false,
             'message'    => 'oops data is not found',
            ], 200);
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
        $update = roomType::findOrFail($id);
        if ($update) {
            $update->name = $request->name;
            $update->slug = $request->slug;
            $update->desc = $request->desc;

            $update->update();

            return response()->json([
            'success' => true,
            'message' => 'successfully updated'
                ], 200);
        }
        return response()->json([
           'success' => false,
           'message' => 'Oops data not found try it again'
        ], 419);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = roomType::findOrFail($id);
        if ($del) {
            $del->delete();
            return response()->json([
               'success' => true,
               'message' => 'success deleted'
                ], 200);
        }else{
            return response()->json([
             'success' => false,
             'message' => 'Oops try it again'
                ], 419);
        }
    }
}
