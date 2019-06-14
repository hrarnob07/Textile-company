<?php

namespace App\Http\Controllers;

use App\DyesChemicals;
use Illuminate\Http\Request;

class DyesChemicalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DyesChemicals::all();
        return view('admin.page.dyes_chemicals',['data'=>$data]);
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
            $upload = 'upload/DyesChemicals';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        
        $site = new DyesChemicals();
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
     * @param  \App\DyesChemicals  $dyesChemicals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DyesChemicals::All();
        $edit = DyesChemicals::find($id);
        return view('admin.page.dyes_chemicals',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DyesChemicals  $dyesChemicals
     * @return \Illuminate\Http\Response
     */
    public function edit(DyesChemicals $dyesChemicals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DyesChemicals  $dyesChemicals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/DyesChemicals';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $site = DyesChemicals::find($id);
        $site->heading = $request->heading;
        $site->banner = $filename;
        $site->description = $request->description;
        $site->save();
        return redirect('admin/Dyes/Chemicals')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DyesChemicals  $dyesChemicals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = DyesChemicals::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
