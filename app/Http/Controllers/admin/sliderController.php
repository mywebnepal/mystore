<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\HomeSlider;
use App\Http\Requests\admin\sliderValidation;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;

class sliderController extends Controller
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
        $page['page_title']       = 'Home slider';
        $page['page_description'] = 'All home page images';

        $homeSlider = HomeSlider::all();

        if ($homeSlider) {
            return view('admin.slider.index', compact(['page', 'homeSlider']));
        }else{
            return view('admin.slider.index', compact(['page']));
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
    public function store(sliderValidation $request)
    {
        $date = date('Y-m-d');
        $row = HomeSlider::count();
        if ($row == 5) {
           return back()->withMessage('Oops only five slider is possible please delete one and upload again');
        }

        $save = new HomeSlider;
        $save->img_caption = $request->img_caption;
        if ($request->hasFile('img_path')) {
            $homeSlider = $request->file('img_path');
            $homeSliderName = str_replace(' ', '', $request->img_caption).$date. '.' . $homeSlider->getClientOriginalExtension();
            Image::make($homeSlider)->resize(680, 400 )->save('slider/' . $homeSliderName );
            $save->img_path = 'slider/'.$homeSliderName;
        }
        $save->call_action = $request->call_action ? $request->call_action : '';
        $save = $save->save();


        if ($save) {
            return back()->withMessage('successfully inserted');
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
        $edit = HomeSlider::findOrFail($id);
        if($edit) {
           return response()->json([
               'success'       => true,
               'id'            => $edit->id,
               'img_path'      => $edit->img_path,
               'img_caption'   => $edit->img_caption,
               'call_action'   => $edit->call_action
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
      $date = date('Y-m-d');
      $slider = HomeSlider::findOrFail($id);
      if ($slider) {
          $slider->img_caption = $request->img_caption;
          $slider->call_action = $request->call_action;
          if ($request->hasFile('img_path')) {
                File::delete($slider->img_path);
                $img = $request->file('img_path');
                $sliderImage = str_replace(' ', '', $request->img_caption).$date. '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(680, 400)->save('slider/' . $sliderImage );
                $slider->img_path = 'slider/'.$hotelImage;
            }
        $upd = $slider->update();

        if ($upd) {
            return response()->json([
                   'success' => true,
                   'message' => 'Successfully updated..'
               ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized access!'
            ], 401);
        }
    }else{
         return response()->json([
            'success' => false,
            'message' => 'Oops data loading fail'
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
        $slider = HomeSlider::findOrFail($id);
        if ($slider) {
            if (file_exists($slider->img_path)) {
                File::delete($slider->img_path);
            }
           $slider->delete();
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
