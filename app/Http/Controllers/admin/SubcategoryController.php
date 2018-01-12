<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\subcategoryValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\category;
use App\models\SubCategory;
use File;

class SubcategoryController extends Controller
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
        $page['page_title']      = 'Mywebnepal:SubCategory';
        $page['page_description'] = 'List of all SubCategory';



        $data = SubCategory::orderBy('name', 'asc')->get();
        $cat  = category::select('id', 'name')->get();
        if ($data) {
            return view('admin.subcategory.index', compact(['page', 'data','cat']));
        }else{
           return view('admin.subcategory.index', compact(['page', 'cat']));
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
    public function store(subcategoryValidation $request)
    {
        $save = new SubCategory;
        $save = $save->create([
                          'categories_id' => $request->categories_id,
                          'name'          => $request->name,
                          'slug'          => $request->slug
                        ]);
        if ($save) {
            return back()->withMessage('successfully inserted subcategory');
        }else{
            return back()->withMessage('Oops try it again ');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = SubCategory::findOrFail($id);
        $delProduct = Product::where('sub_categories_id', $id)->first();

        if ($delProduct) {
            if (file_exists($delProduct->featured_img_sm)) {
                File::delete($delProduct->featured_img_sm);
               // unlink(asset($$delProduct->featured_img_sm));
            }
            if (file_exists($delProduct->featured_img_lg)) {
                File::delete($delProduct->featured_img_lg);
                // unlink(asset($$delProduct->featured_img_lg));
            }
            if (file_exists($delProduct->$delProduct_image)) {
                File::delete($delProduct->$delProduct_image);
                // unlink(asset($$delProduct->product_image));
            }
            
        }
        if ($del) {
            $del->delete();
            return response()->json([
               'success'  => true,
               'message'  => 'successfully deleted'
                ], 200);
        }else{
            return response()->json([
               'success'  => false,
               'message'  => 'Oops sorry try it again'
                ], 401);
        }
    }

    public function getSubCategory($id){
     $subCat = SubCategory::select('id', 'name')->where('categories_id', $id)->get();
     if ($subCat) {
        return $subCat;
         /*return response()->json([
            
            ]);*/
     }
    }
}
