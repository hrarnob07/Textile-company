<?php

namespace App\Http\Controllers;

use App\FutureFashion;
use Illuminate\Http\Request;

class FutureFashionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FutureFashion::all();
        return view('admin.page.futureFashion',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'banner' => 'required',
            'heading' => 'required',
            'description' => 'required',
        ]);
        //dd($request->logo);

        $filename = "";
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/future_fashion';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        
        $site = new FutureFashion();
        $site->heading = $request->heading;
        $site->banner_title = $request->banner_title ? $request->banner_title:0;
        $site->banner = $filename;
        $site->description = $request->description;
        $site->save();
        return back()->with('status', 'Added Successfully!');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FutureFashion  $futureFashion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = FutureFashion::All();
        $edit = FutureFashion::find($id);
        return view('admin.page.futureFashion',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FutureFashion  $futureFashion
     * @return \Illuminate\Http\Response
     */
    public function edit(FutureFashion $futureFashion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FutureFashion  $futureFashion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/future_fashion';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $site = FutureFashion::find($id);
        $site->banner_title = $request->banner_title ? $request->banner_title:0;
        $site->heading = $request->heading;
        $site->banner = $filename;
        $site->description = $request->description;
        $site->save();
        return redirect('admin/future/fashion')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FutureFashion  $futureFashion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = FutureFashion::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
