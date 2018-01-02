<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Hotel;
use App\Http\Requests\admin\hotelValidation;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;

class HotelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sisadmin');
    }

    public function index()
    {
        $hotel = Hotel::paginate(5);
        $page['page_title']       = 'Hotel';
        $page['page_description'] = 'Hotel details of nepal';

        if ($hotel) {
            return view('admin.hotel.index', compact(['page', 'hotel']));
        }
        return view('admin.hotel.index', compact(['page']));
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
    public function store(hotelValidation $request)
    {
        $date = date('Y-m-d');
        $save = new Hotel;
        $save->name = $request->name;
        $save->slug = $request->slug;
        $save->room_types_id = $request->room_types_id;
        $save->cities_id = $request->cities_id;
        $save->address = $request->address;
        $save->phone = $request->phone;
        $save->email = $request->email;
        $save->desc = $request->desc;
        $save->vedio_link = $request->vedio_link;
        $save->price = $request->price;
        $save->featured = 0;


        if ($request->hasFile('img_path')) {
            $hotelImage = $request->file('img_path');
            $hotelImageName = str_replace(' ', '', $request->name).$date. '.' . $hotelImage->getClientOriginalExtension();
            Image::make($hotelImage)->resize( 300, 200 )->save('hotel/' . $hotelImageName );

            $save->img_path = 'hotel/'.$hotelImageName;
        }

        $save = $save->save();

        if ($save) {
            return back()->withMessage('successfully add');
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
        $page['page_title']       = 'update-Hotel';
        $page['page_description'] = 'Hotel details of nepal';
        $hotel = Hotel::findOrFail($id);
        if ($hotel) {
            return view('admin.hotel.edit', compact(['page', 'hotel']));
        }else{
           return view('admin.hotel.edit', compact(['page']))->withMessage('Oops data is not found');
        }
       /*if($edit) {
           return response()->json([
               'success'       => true,
               'id'            => $edit->id,
               'name'          => $edit->name,
               'slug'          => $edit->slug,
               'type'          => $edit->type,
               'city'          => $edit->city,
               'address'       => $edit->address,
               'phone'         => $edit->phone,
               'email'         => $edit->email,
               'desc'          => $edit->desc,
               'vedio_link'    => $edit->vedio_link,
               'price'         => $edit->price,
               'img_path'      => $edit->img_path
           ], 200);
       }
       return response()->json([
           'success' => false,
           'message' => 'Unauthorized access!'
       ], 401);*/
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
        $hotel = Hotel::findOrFail($id);
        if ($hotel) {
            $hotel->name       = $request->name;
            $hotel->slug       = $request->slug;
            $hotel->desc       = $request->desc;
            $hotel->room_types_id       = $request->room_types_id;
            $hotel->cities_id       = $request->cities_id;
            $hotel->email      = $request->email;
            $hotel->address    = $request->address;
            $hotel->vedio_link = $request->vedio_link;
            $hotel->price      = $request->price;
            $hotel->featured   = $request->featured ? $request->featured : 0;
            

            if ($request->hasFile('img_path')) {
                File::delete($hotel->img_path);
                $img = $request->file('img_path');
                $hotelImage = str_replace(' ', '', $request->name).$date. '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(400, 400)->save('hotel/' . $hotelImage );

                $hotel->img_path = 'hotel/'.$hotelImage;
            }

            $update = $hotel->update();

            if ($update) {
               /* return response()->json([
                   'success' => true,
                   'message' => 'Successfully updated..'
               ], 200);*/
               return redirect()->route('sisadmin.hotel.index')->withMessage('successfully update');
            }

            /*return response()->json([
                'success' => false,
                'message' => 'Unauthorized access!'
            ], 401);*/
            return redirect()->route('sisadmin.hotel.index')->withMessage('Oops sorry try it again');
    }else{
        return redirect()->route('sisadmin.hotel.index')->withMessage('Oops data not fount');
       /* return response()->json([
            'success' => false,
            'message' => 'Oops data loading fail'
        ], 401);*/
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
        $hotelId = Hotel::findOrFail($id);
        if ($hotelId) {
            if (file_exists($hotelId->img_path)) {
                File::delete($hotelId->img_path);
            }
           $hotelId->delete();
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

    public function makeFeaturedHotel(Request $request){
        $id  = $request->id;
        $status = $request->status==1 ? 0 : 1;

        $hotel  = Hotel::findOrFail($id);
        if ($hotel) {
           $hotel->featured = $status;
            $hotel->update();
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
