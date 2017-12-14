<?php
namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\ProductsValidation;
use App\models\Product;
use App\models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;

class ProductsController extends Controller
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
        $page['page_title']      = 'Mywebnepal:Product';
        $page['page_description'] = 'List of all product';

        $catId = category::select('id', 'name')->get();
        
        $data = Product::paginate(10);
        if ($data) {
            return view('admin.products.index', compact(['page', 'data', 'catId']));
        }else{
            return view('admin.products.index', compact(['page']));
        } 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsValidation $request)
    {
        $time = date('Y-m-d h:i:s');
        $save = new Product;
        $save->name = $request->name;
        $save->categories_id = $request->categories_id;
        $save->description   = $request->description;
        $save->size           = $request->size;
        $save->sku            = $request->sku;
        $save->quantity       = $request->quantity;
        $save->price          = $request->price;
        $save->discount       = $request->discount;
        $save->featured       = 'it will goes later';
        $save->brand_name     = $request->brand_name;
        $save->status         = $request->status;
        $save->vedio_link     = $request->vedio_link;

        if ($request->hasFile('featured_img')) {
           $imgFile = $request->file('featured_img');
           $filename = time() . '.' . $imgFile->getClientOriginalExtension();
           $lgImgPath = public_path('product_image/lg_image/');
           $smImgPath = public_path('product_image/sm_image/');
           Image::make( $imgFile )->resize( 300, 200 )->save($smImgPath . $filename );
           Image::make( $imgFile )->fit( 400, 300)->save($lgImgPath . $filename );

           $db_filename_sm = $smImgPath.$filename;
           $db_filename_lg = $lgImgPath .$filename;

           $save->featured_img_sm = $db_filename_sm;
           $save->featured_img_lg = $db_filename_lg;
        }
        if ($request->hasFile('img_path2')) {
           $imgFile = $request->file('img_path2');
           $filename = 'image2'.time() . '.' . $imgFile->getClientOriginalExtension();
           $lgImgPath = public_path('product_image/lg_image/');
           $smImgPath = public_path('product_image/sm_image/');
           Image::make( $imgFile )->resize( 300, 200 )->save($smImgPath . $filename );
           Image::make( $imgFile )->fit( 400, 300)->save($lgImgPath . $filename );

           $db_filename_sm = $smImgPath.$filename;
           $db_filename_lg = $lgImgPath .$filename;

           $save->img_path2_sm = $db_filename_sm;
           $save->img_path2_lg = $db_filename_lg;
        }

        if ($request->hasFile('img_path3')) {
            $imgFile = $request->file('img_path3');
            $filename = 'image3'.time() . '.' . $imgFile->getClientOriginalExtension();
            $lgImgPath = public_path('product_image/lg_image/');
            $smImgPath = public_path('product_image/sm_image/');
            Image::make( $imgFile )->resize( 300, 200 )->save($smImgPath . $filename );
            Image::make( $imgFile )->fit( 400, 300)->save($lgImgPath . $filename );

            $db_filename_sm = $smImgPath.$filename;
            $db_filename_lg = $lgImgPath .$filename;

            $save->img_path3_sm = $db_filename_sm;
            $save->img_path3_lg = $db_filename_lg;
        }

        $saveData = $save->save();
        if ($saveData) {
            return back()->withMessage('successfully inserted your product');
        }else{
            return back()->withMessage('Oops try it again')->withInput();
        }







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
