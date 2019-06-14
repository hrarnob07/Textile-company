<?php

namespace App\Http\Controllers;

use App\TopManagement;
use Illuminate\Http\Request;

class TopManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TopManagement::all();
        return view('admin.page.top_management',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'photo' => 'required',
            'short_detail' => 'required',
        ]);
        //dd($request->logo);

        $filename = "";
        if (!empty($request->file('photo'))) {
            $img = $request->file('photo');
            $upload = 'upload/TopManagement';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        
        $site = new TopManagement();
        $site->name = $request->name;
        $site->designation = $request->designation;
        $site->photo = $filename;
        $site->short_detail = $request->short_detail;
        $site->long_detail = $request->long_detail;
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
     * @param  \App\TopManagement  $topManagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = TopManagement::All();
        $edit = TopManagement::find($id);
        return view('admin.page.top_management',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TopManagement  $topManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(TopManagement $topManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopManagement  $topManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'short_detail' => 'required',
        ]);
        //dd($request->logo);

        $filename = $request->eximage;
        if (!empty($request->file('photo'))) {
            $img = $request->file('photo');
            $upload = 'upload/TopManagement';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }
        
        $site = TopManagement::find($id);;
        $site->name = $request->name;
        $site->designation = $request->designation;
        $site->photo = $filename;
        $site->short_detail = $request->short_detail;
        $site->long_detail = $request->long_detail;
        $site->save();
        return redirect('admin/top/management')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopManagement  $topManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $json = TopManagement::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
