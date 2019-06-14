<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = SiteSetting::all();
        return view('admin.page.siteinfo',['site'=>$site]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'logo' => 'required',
            'footer_logo' => 'required',
            'description' => 'required',
            'keywords' => 'required',
        ]);
        //dd($request->logo);
        $upload = 'upload/logo';
        $filename = "";
        if (!empty($request->file('logo'))) {
            $img = $request->file('logo');
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }

        $filenamef = "";
        if (!empty($request->file('footer_logo'))) {
            $img = $request->file('footer_logo');
            $filenamef = time() . "f." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filenamef);
        }
        
        $site = new SiteSetting();
        $site->name = $request->name;
        $site->logo = $filename;
        $site->footer_logo = $filenamef;
        $site->description = $request->description;
        $site->keywords = $request->keywords;
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
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = SiteSetting::All();
        $data = SiteSetting::find($id);
        return view('admin.page.siteinfo',['edit' => $data,'site' => $site]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upload = 'upload/logo';
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('logo'))) {
            $img = $request->file('logo');
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $filenamef = $request->exfimage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('footer_logo'))) {
            $img = $request->file('footer_logo');
            $filenamef = time() . "f." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filenamef);
            @unlink($upload . '/' . $request->exfimage);
        }
        $site = SiteSetting::find($id);
        $site->name = $request->name;
        $site->logo = $filename;
        $site->footer_logo = $filenamef;
        $site->description = $request->description;
        $site->keywords = $request->keywords;
        $site->save();
        return redirect('admin/sitesetting')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = SiteSetting::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
