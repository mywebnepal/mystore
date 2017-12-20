<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\brandValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Brand;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;

class brandController extends Controller
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
        $page['page_title']       = 'Brand';
        $page['page_description'] = 'List of all brand name';
        
        $brand = Brand::orderBy('created_at', 'desc')->get();
    
        if ($brand) {
            return view('admin/brand/index', compact(['page', 'brand']));
        }else{
            return view('admin/brand/index', compact(['page']));
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
    public function store(brandValidation $request)
    {
        $date = date('Y-m-dh:i:s');
        $save = new Brand;
        $save->name = $request->name;
        $save->slug = $request->slug;
        if ($request->hasFile('brand_logo')) {
            $logo = $request->file('brand_logo');
            $logoName = str_replace(' ', '', $request->name).$date. '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize( 150, 150 )->save('brandLogo/' . $logoName );

            $save->brand_logo = 'brandLogo/'.$logoName;
        }
        $brand = $save->save();

        if ($brand) {
            return back()->withMessage('Successfully added');
        }else{
            return back()->withMessage('Oops sorry try it again');
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
    public function edit(Brand $brand)
    {
        if($brand) {
            return response()->json([
                'success'       => true,
                'id'            => $brand->id,
                'name'          => $brand->name,
                'slug'          => $brand->slug,
               'brand_logo'     => $brand->brand_logo,
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
        $brandUpdate = Brand::findOrFail($id);
        if ($brandUpdate) {
            $brandUpdate->name = $request->name;
            $brandUpdate->slug = $request->slug;

            if ($request->hasFile('brand_logo')) {
                $logo = $request->file('brand_logo');
                $logoName = str_replace(' ', '', $request->name).$date. '.' . $logo->getClientOriginalExtension();
                Image::make($logo)->resize( 150, 150 )->save('brandLogo/' . $logoName );

                $brandUpdate->brand_logo = 'brandLogo/'.$logoName;
            }

            $update = $brandUpdate->update();

            if ($update) {
                return response()->json([
                   'success' => true,
                   'message' => 'Successfully updated..'
               ], 200);
            }

            return response()->json([
                'success' => false,
                'message' => 'Unauthorized access!'
            ], 401);

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
        $brand = Brand::findOrFail($id);
                if ($brand) {
                    if (file_exists($brand->brand_logo)) {
                        File::delete($brand->brand_logo);
                    }
                   $brand->delete();
                   return response()->json([
                     'success' => true,
                     'message' => 'product delete'
                    ], 200);
                }
                return response()->json([
                     'success' => false,
                     'message' => 'sorry product is not delete'
                    ], 200);
    }
    
}
