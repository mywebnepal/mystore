<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\CategoriesValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\category;

class CategoriesController extends Controller
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
        $page['page_title']       = 'mywebnepal | list categories';
        $page['page_description'] = 'mywebnepal | list categories';

        $data = category::paginate(10);

        if ($data) {
           return view('admin/categories.index', compact('page', 'data'));
        }else{
           return view('admin/categories.index', compact('page'));
        }
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $page_title = 'admin/categories';
        $page_description = 'all product key categories';
        return view('admin.categories.create', compact(['page_title', 'page_description']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesValidation $request)
    {
        $store = category::create([
            'name'        =>$request->name,
            'slug'        => $request->slug,
            'description' =>$request->description
            ]);

        if ($store) {
            return back()->withMessage('successfully create');
        }else{
            return back()->withMessage('Oops Category is not created');
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
        $editData = category::findOrFail($id);
        if($editData) {
            return response()->json([
                'success'       => true,
                'id'            => $editData->id,
                'name'          => $editData->name,
                'slug'          => $editData->slug,
                'description'     => $editData->description,
            ], 200);
        }


        return response()->json([
            'success' => false,
            'message' => 'Unauthorized access!'
        ], 401);
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
        $update = category::findOrFail($id);
        if ($update) {
           $update->name = $request->name;
           $update->slug = $request->slug;
           $update->description = $request->description;

           $catUpdate = $update->update();

           if ($catUpdate) {
              return response()->json([
                 'success' => true,
                  'message' => 'successfully update!'
                ]);
           }else{
               return response()->json([
                   'success' => false,
                   'message' => 'Oops try it again !'
               ], 401);
           }
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
        dd('ia ma sdf');
        if ($id) {
            category::findOrFail($id)->delete();
            return back()->withMessage('successfully delete data');
        }
    }
}
