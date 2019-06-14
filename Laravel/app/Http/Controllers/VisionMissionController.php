<?php

namespace App\Http\Controllers;

use App\VisionMission;
use Illuminate\Http\Request;

class VisionMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VisionMission::all();
        return view('admin.page.vision_mission',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( request $request)
    {
        $this->validate($request, [
            'banner' => 'required',
            'vision' => 'required',
            'vision_image' => 'required',
            'vision_description' => 'required',
            'mission' => 'required',
            'mission_image' => 'required',
            'mission_description' => 'required',
        ]);
        // dd($request);
        $upload = 'upload/introducing/VisionMission';
        $filename = "";
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            
            $filename = time() . "a." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }

        $vision_images = "";
        if (!empty($request->file('vision_image'))) {
            $img = $request->file('vision_image');

            $vision_images = time() . "b." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $vision_images);
        }
        $mission_images = "";
        if (!empty($request->file('mission_image'))) {
            $img = $request->file('mission_image');
    
            $mission_images = time() . "c." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $mission_images);
        }
        //dd($mission_images);
        
        $site = new VisionMission();
        $site->banner = $filename;
        $site->vision = $request->vision;
        $site->vision_image = $vision_images;
        $site->vision_description = $request->vision_description;
        $site->mission = $request->mission;
        $site->mission_image = $mission_images;
        $site->mission_description = $request->mission_description;
        dd($site);
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
     * @param  \App\VisionMission  $VisionMission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = VisionMission::All();
        $edit = VisionMission::find($id);
        return view('admin.page.vision_mission',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VisionMission  $VisionMission
     * @return \Illuminate\Http\Response
     */
    public function edit(VisionMission $VisionMission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VisionMission  $VisionMission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upload = 'upload/introducing/VisionMission';
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            
            //$filename=$img->getClientOriginalName();
            $filename = time() . "a." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }
        $vision_image = $request->exvision_image;
        if (!empty($request->file('vision_image'))) {
            $img = $request->file('vision_image');
            $upload = 'upload/introducing/VisionMission';
            //$filename=$img->getClientOriginalName();
            $vision_image = time() . "b." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $vision_image);
            @unlink($upload . '/' . $request->exvision_image);
        }
        $mission_image = $request->exmission_image;
        if (!empty($request->file('mission_image'))) {
            $img = $request->file('mission_image');
            $upload = 'upload/introducing/VisionMission';
            //$filename=$img->getClientOriginalName();
            $mission_image = time() . "c." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $mission_image);
            @unlink($upload . '/' . $request->exmission_image);
        }
        
        $site = VisionMission::find($id);
        $site->banner = $filename;
        $site->vision = $request->vision;
        $site->vision_image = $vision_image;
        $site->vision_description = $request->vision_description;
        $site->mission = $request->mission;
        $site->mission_image = $mission_image;
        $site->mission_description = $request->mission_description;
        $site->save();
        return redirect('admin/VisionMission')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VisionMission  $VisionMission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = VisionMission::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
