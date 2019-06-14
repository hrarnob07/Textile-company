<?php

namespace App\Http\Controllers;

use App\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TrainingCenter::all();
        return view('admin.page.training_center',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
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
            $upload = 'upload/TrainingCenter';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        
        $site = new TrainingCenter();
        $site->heading = $request->heading;
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
     * @param  \App\TrainingCenter  $trainingCenter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = TrainingCenter::All();
        $edit = TrainingCenter::find($id);
        return view('admin.page.training_center',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainingCenter  $trainingCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingCenter $trainingCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainingCenter  $trainingCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/TrainingCenter';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $site = TrainingCenter::find($id);
        $site->heading = $request->heading;
        $site->banner = $filename;
        $site->description = $request->description;
        $site->save();
        return redirect('admin/Training/Center')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainingCenter  $trainingCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = TrainingCenter::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
