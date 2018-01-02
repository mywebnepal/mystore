<?php
namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\ProductsValidation;
use App\models\Product;
use App\models\category;
use App\models\Brand;
use App\models\supportForm;
use App\models\subscribe;
use App\models\Comment;
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
        $brand = Brand::select('id', 'name')->get();
        if ($data) {
            return view('admin.products.index', compact(['page', 'data', 'catId', 'brand']));
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
        $save->product_slug = $request->product_slug;
        $save->author_manufactural_name = $request->author_manufactural_name ? $request->author_manufactural_name : 'N/A';
        $save->categories_id = $request->categories_id;
        $save->sub_categories_id  = $request->sub_categories_id ? $request->sub_categories_id  : 'N/A';
        $save->description   = $request->description;
        $save->size           = $request->size;
        $save->sku            = $request->sku;
        $save->quantity       = $request->quantity;
        $save->price          = $request->price;
        $save->discount       = $request->discount;
        $save->featured       = $request->featured;
        $save->brands_id     = $request->brands_id;
        $save->status         = $request->status;
        $save->featured_product = 0;
        $save->appreance      = 0;
        $save->vedio_link     = $request->vedio_link;
        $save->address        = $request->address ? $request->address  : 'N/A';
        $save->phone          = $request->phone ? $request->phone  : 'N/A';
        $save->email          = $request->email ? $request->email  : 'N/A';

        if ($request->hasFile('featured_img')) {
           $imgFile = $request->file('featured_img');

           $filename = str_replace(' ', '', $request->name).$time. '.' . $imgFile->getClientOriginalExtension();

           $this->resizeImageAndUpload($imgFile, 400, 400, 'product/featured_image_sm/',$filename);

           $this->resizeImageAndUpload($imgFile, 400, 400, 'product/featured_image_lg/', $filename);

           $save->featured_img_sm = 'product/featured_image_sm/'.$filename;
           $save->featured_img_lg = 'product/featured_image_lg/' .$filename;
        }
        if ($request->hasFile('product_image')) {
           $imgFile = $request->file('product_image');
           $filename = str_replace(' ', '', $request->name).$time . '.' . $imgFile->getClientOriginalExtension();
           
           $this->resizeImageAndUpload($imgFile, 400, 400, 'product/product_image/', $filename);
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
    public function edit(Product $products)
    {
        $page['page_title']      = 'Mywebnepal::Product edit';
        $page['page_description'] = 'Product edit ';
        $catId = category::select('id', 'name')->get();
        $brand = Brand::select('id', 'name')->get();
        if ($products) {
            return view('admin.products.edit', compact(['page', 'products', 'catId', 'brand']));
        }else{
            return back()->withMessage('Oops data is not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
               'categories_id' => 'required'
           ]);
        $product = Product::findOrFail($id);
        if ($product) {
            $time = date('Y-m-d h:i:s');
            $product->name = $request->name;
            $product->product_slug = $request->product_slug;
            $product->author_manufactural_name = $request->author_manufactural_name ? $request->author_manufactural_name : 'N/A';
            $product->categories_id = $request->categories_id;
            $product->description   = $request->description;
            $product->size           = $request->size;
            $product->sku            = $request->sku;
            $product->quantity       = $request->quantity;
            $product->price          = $request->price;
            $product->discount       = $request->discount;
            $product->featured       = $request->featured;
            $product->brands_id      = $request->brands_id;
            $product->status         = $request->status;
            $product->vedio_link     = $request->vedio_link;

            $product->address        = $request->address ? $request->address  : 'N/A';
            $product->phone          = $request->phone ? $request->phone  : 'N/A';
            $product->email          = $request->email ? $request->email  : 'N/A';



            if ($request->hasFile('featured_img')) {

                if ($product->featured_img) {
                    File::delete($product->featured_img_sm);
                }
                if ($request->$product->featured_img_lg) {
                   File::delete($product->featured_img_lg);
                }
               $imgFile = $request->file('featured_img');
               $filename = str_replace(' ', '', $request->name).$time. '.' . $imgFile->getClientOriginalExtension();

               $this->resizeImageAndUpload($imgFile, 400, 400, 'product/featured_image_sm/',$filename);

               $this->resizeImageAndUpload($imgFile, 400, 400, 'product/featured_image_lg/', $filename);

               $product->featured_img_sm = 'product/featured_image_sm/'.$filename;
               $product->featured_img_lg = 'product/featured_image_lg/' .$filename;
            }
            if ($request->hasFile('product_image')) {
                if ($product->product_image) {
                    File::delete($product->product_image);
                }
               $imgFile = $request->file('product_image');
               $filename = str_replace(' ', '', $request->name).$time . '.' . $imgFile->getClientOriginalExtension();
               
               $this->resizeImageAndUpload($imgFile, 400, 400, 'product/product_image/', $filename);
               $product->product_image = 'product/product_image/'.$filename;
            }
            $saveData = $product->update();

            if ($saveData) {
                return redirect()->route('sisadmin.products.index')->withMessage('successfully update');
            }else{
                return back()->withMessage('Oops sorry try it again');
            }
        }
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
            if (file_exists($product->featured_img_sm)) {
                File::delete($product->featured_img_sm);
               // unlink(asset($product->featured_img_sm));
            }
            if (file_exists($product->featured_img_lg)) {
                File::delete($product->featured_img_lg);
                // unlink(asset($product->featured_img_lg));
            }
            if (file_exists($product->product_image)) {
                File::delete($product->product_image);
                // unlink(asset($product->product_image));
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

    public function makeAppreanceProduct(Request $request){
          $id  = $request->id;
        $status = $request->status==1 ? 0 : 1;

        $product  = Product::findOrFail($id);
        if ($product) {
           $product->appreance = $status;
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

    public function supportForm(){
     $sprtForm  = supportForm::orderBy('created_at', 'desc')->paginate(10);
     if ($sprtForm) {
         return view('admin.customer.supportForm', compact(['sprtForm']));
     }else{
        return view('admin.customer.supportForm');
     }
     
    }
    public function productComment(){
      $productComment  = Comment::orderBy('created_at', 'desc')->paginate(10);
      if ($productComment) {
          return view('admin.customer.productComment', compact(['productComment']));
      }else{
         return view('admin.customer.productComment');
      }
    }
    public function commentDelete($id){
     $del = Comment::findOrFail($id);
     if ($del) {
         $del->delete();
         return response()->json([
             'success' => true,
             'message' => 'successfully delete'
            ], 200);
     }else{
          return response()->json([
             'success' => false,
             'message' => 'Oops sorry try it again'
            ], 200);
     }
    }
    /*comment status enable or disable*/
    public function changeCommentStatus($id){
    
    }
    /*subscribe */
    public function userSubscribe(){
      $subData  = subscribe::orderBy('created_at', 'desc')->paginate();

        return view('admin.customer.subscribe', compact(['subData']));
    }
}
