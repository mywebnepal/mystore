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
        $save->featured_product = 0;
        $save->vedio_link     = $request->vedio_link;

        if ($request->hasFile('featured_img')) {
           $imgFile = $request->file('featured_img');

           $filename = str_replace(' ', '', $request->name).$time. '.' . $imgFile->getClientOriginalExtension();

           $this->resizeImageAndUpload($imgFile, 300, 200, 'product/featured_image_sm/',$filename);

           $this->resizeImageAndUpload($imgFile, 400, 300, 'product/featured_image_lg/', $filename);

           $save->featured_img_sm = 'product/featured_image_sm/'.$filename;
           $save->featured_img_lg = 'product/featured_image_lg/' .$filename;
        }
        if ($request->hasFile('product_image')) {
           $imgFile = $request->file('product_image');
           $filename = str_replace(' ', '', $request->name).$time . '.' . $imgFile->getClientOriginalExtension();
           
           $this->resizeImageAndUpload($imgFile, 400, 300, 'product/product_image/', $filename);
           $save->product_image = 'product/product_image/'.$filename;
        }

        $saveData = $save->save();
        if ($saveData) {
            return back()->withMessage('successfully inserted your product');
        }else{
            return back()->withMessage('Oops try it again')->withInput();
        }

    }

    /*public function getFileName($title, $request){
       $time = date('Y-m-d h:i:s');
        $filename = str_replace(' ', '', $title).$time . '.' . $request->featured_img->getClientOriginalExtension();
        return $filename;
    }*/

    public function resizeImageAndUpload($file, $sizeWidth, $sizeHeight, $path, $imageName){
     $upload = Image::make( $file )->resize( $sizeWidth, $sizeHeight )->save($path . $imageName );
     if ($upload) {
         return true;
     }else{
        return false;
     }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        $page['page_title']      = 'Mywebnepal::singleProduct';
        $page['page_description'] = 'Product Details';
        return view('admin.products.show', compact('products', 'page'));
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
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            if (file_exists(asset($product->featured_img_sm))) {
               unlink(asset($product->featured_img_sm));
            }
            if (file_exists(asset($product->featured_img_lg))) {
                unlink(asset($product->featured_img_lg));
            }
            if (file_exists(asset($product->product_image))) {
                unlink(asset($product->product_image));
            }
           $product->delete();

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

    public function changeProductStatus(Request $request){
      $id  = $request->id;
      $status = $request->status==1 ? 0 : 1;

      $product  = Product::findOrFail($id);
      if ($product) {
         $product->status = $status;
          $product->update();
          return response()->json([
             'success' => true,
             'message' => 'product status chnaged'
            ], 200);
      }else{
        return response()->json([
          'success' => false,
            'message' => 'product status could not changed'
        ], 401);
      }
    }
    public function makeFeaturedProduct(Request $request){
        $id  = $request->id;
      $status = $request->status==1 ? 0 : 1;

      $product  = Product::findOrFail($id);
      if ($product) {
         $product->featured_product = $status;
          $product->update();
          return response()->json([
             'success' => true,
             'message' => 'this product became featured product'
            ], 200);
      }else{
        return response()->json([
          'success' => false,
            'message' => 'Oops sorry this try it again'
        ], 401);
      }
    }
}
