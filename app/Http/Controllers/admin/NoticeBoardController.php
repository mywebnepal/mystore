<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\noticeValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\NoticeBoard;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;

class NoticeBoardController extends Controller
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
        $notice = NoticeBoard::paginate(5);
        $page['page_title']       = 'notice Board';
        $page['page_description'] = 'my web site notice board';
        return view('admin.notice.index', compact(['page', 'notice']));
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
    public function store(noticeValidation $request)
    {
        $date = date('Y-m-dh:i:s');
        $save = new NoticeBoard;
        $save->name     = $request->name;
        $save->slug     = $request->slug;
        $save->desc     = $request->desc;
        $save->end_date = $request->end_date;

        if ($request->hasFile('img_path')) {
            $noticeImg = $request->file('img_path');
            $noticeImgName = str_replace(' ', '', $request->name).$date. '.' . $noticeImg->getClientOriginalExtension();
            Image::make($noticeImg)->resize( 150, 150 )->save('noticeImage/' . $noticeImgName );

            $save->img_path = 'noticeImage/'.$noticeImgName;
        }
        $save->save();
        return back()->withMessage('successfully inserted your notice');
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
        $noticeData = NoticeBoard::findOrFail($id);
     if($noticeData) {
         return response()->json([
             'success'       => true,
             'id'            => $noticeData->id,
             'name'          => $noticeData->name,
             'slug'          => $noticeData->slug,
             'desc'          => $noticeData->desc,
             'img_path'      => $noticeData->img_path,
             'end_date'      => $noticeData->end_date
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
        $date = date('Y-m-dh:i:s');
        $noticeUpdate = NoticeBoard::findOrFail($id);
        if ($noticeUpdate) {
            $noticeUpdate->name = $request->name;
            $noticeUpdate->slug = $request->slug;
            $noticeUpdate->desc = $request->desc;
            $noticeUpdate->end_date = $request->end_date;

            if ($request->hasFile('img_path')) {
                File::delete($noticeUpdate->img_path);
                $img = $request->file('img_path');
                $noticeImage = str_replace(' ', '', $request->name).$date. '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(400, 400)->save('noticeImage/' . $noticeImage );

                $noticeUpdate->img_path = 'noticeImage/'.$logoName;
            }

            $update = $noticeUpdate->update();

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
        $notice = NoticeBoard::findOrFail($id);
        if ($notice) {
            if (file_exists($notice->img_path)) {
                File::delete($notice->img_path);
            }
           $notice->delete();
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
