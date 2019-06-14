<?php

namespace App\Http\Controllers;

use App\Consultancy;
use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Consultancy::all();
        return view('admin.page.consultancy',['data'=>$data]);
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
            $upload = 'upload/Consultancy';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        
        $site = new Consultancy();
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
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Consultancy::All();
        $edit = Consultancy::find($id);
        return view('admin.page.consultancy',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultancy $consultancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/Consultancy';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $site = Consultancy::find($id);
        $site->heading = $request->heading;
        $site->banner = $filename;
        $site->description = $request->description;
        $site->save();
        return redirect('admin/Consultancy')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = Consultancy::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
