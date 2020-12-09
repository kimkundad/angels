<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\our_service;
use Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::table('our_services')
                ->Orderby('id', 'desc')
                ->paginate(15);

        $data['objs'] = $objs;
        return view('admin.services.index', $data);
    }

    public function service_status(Request $request){

        //  dd($request->all());
    
          $user = our_service::findOrFail($request->user_id);
    
                  if($user->status == 1){
                      $user->status = 0;
                  } else {
                      $user->status = 1;
                  }
    
          return response()->json([
          'data' => [
            'success' => $user->save(),
          ]
        ]);
    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
        $data['url'] = url('admin/service');
        return view('admin.services.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $image = $request->file('image');

        $this->validate($request, [
             'image' => 'required',
             'title' => 'required',
             'url_btn' => 'required'
         ]);

         $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
         $img = Image::make($image->getRealPath());
         $img->resize(800, 800, function ($constraint) {
         $constraint->aspectRatio();
       })->save('img/service/'.$input['imagename']);


      $package = new our_service();
      $package->title = $request['title'];
      $package->url_btn = $request['url_btn'];
      $package->image = $input['imagename'];
      $package->save();

      return redirect(url('admin/service/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $objs = our_service::find($id);

        $data['url'] = url('admin/service/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.services.edit', $data);
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

        $image = $request->file('image');

        $this->validate($request, [
             'title' => 'required',
             'url_btn' => 'required'
         ]);


      $package = our_service::find($id);
      $package->title = $request['title'];
      $package->url_btn = $request['url_btn'];
      $package->save();

      if($image != NULL){

        $objs = DB::table('our_services')
               ->where('id', $id)
               ->first();

               if(isset($objs->image)){
                $file_path = 'img/service/'.$objs->image;
                 unlink($file_path);
              }

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
           $img = Image::make($image->getRealPath());
           $img->resize(800, 800, function ($constraint) {
           $constraint->aspectRatio();
         })->save('img/service/'.$input['imagename']);

         $package = our_service::find($id);
          $package->image = $input['imagename'];
          $package->save();

      }

      return redirect(url('admin/service/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_service($id)
    {
        //
        $objs = DB::table('our_services')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
              $file_path = 'img/service/'.$objs->image;
               unlink($file_path);
            }

             DB::table('our_services')->where('id', $id)->delete();

             return redirect(url('admin/service'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
