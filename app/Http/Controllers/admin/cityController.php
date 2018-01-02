<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\City;
use App\Http\Requests\admin\citiesValidation;

class cityController extends Controller
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
       $page['page_title'] = 'City';
       $page['page_description'] = 'List of room type in nepal';

       $city = City::orderBy('name', 'asc')->get();
       if ($city) {
          return view('admin.city.index', compact(['page', 'city']));
       }else{ 
         return view('admin.city.index', compact(['page']));
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
    public function store(citiesValidation $request)
    {
        $save = new City;
        $save->name = $request->name;
        $save->slug = $request->slug;
        $save->desc = $request->desc;

        $saveCity= $save->save();

        if ($saveCity) {
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
      $edit = City::findOrFail($id);
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
        $update = City::findOrFail($id);
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
        $del = City::findOrFail($id);
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
