<?php

namespace App\Http\Controllers;

use App\Csr;
use Illuminate\Http\Request;

class CsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Csr::all();
        return view('admin.page.csr',['data'=>$data]);
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
            'overview_description' => 'required',
        ]);
        //dd($request->logo);

        $upload = 'upload/Csr';
        $filename = "";
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            
            $filename = time() . "a." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }

        $empowerment_of_people_images = "";
        if (!empty($request->file('empowerment_of_people'))) {
            $img = $request->file('empowerment_of_people');

            $empowerment_of_people_images = time() . "b." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $empowerment_of_people_images);
        }
        $health_safety_images = "";
        if (!empty($request->file('health_safety'))) {
            $img = $request->file('health_safety');
    
            $health_safety_images = time() . "c." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $health_safety_images);
        }
        $education_images = "";
        if (!empty($request->file('education'))) {
            $img = $request->file('education');
    
            $education_images = time() . "d." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $education_images);
        }
        
        $site = new Csr();
        $site->overview_description = $request->overview_description;
        $site->banner = $filename;
        $site->empowerment_of_people = $empowerment_of_people_images;
        $site->health_safety = $health_safety_images;
        $site->education = $education_images;
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
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Csr::All();
        $edit = Csr::find($id);
        return view('admin.page.csr',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function edit(Csr $csr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $upload = 'upload/Csr';
        $filename = $request->eximage;
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            
            $filename = time() . "a." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $empowerment_of_people_images = $request->exempowerment_of_people_image;
        if (!empty($request->file('empowerment_of_people'))) {
            $img = $request->file('empowerment_of_people');

            $empowerment_of_people_images = time() . "b." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $empowerment_of_people_images);
            @unlink($upload . '/' . $request->exempowerment_of_people_image);
        }
        $health_safety_images = $request->exhealth_safety_image;
        if (!empty($request->file('health_safety'))) {
            $img = $request->file('health_safety');
    
            $health_safety_images = time() . "c." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $health_safety_images);
            @unlink($upload . '/' . $request->exhealth_safety_images);
        }
        $education_images = $request->exeducation_image;
        if (!empty($request->file('education'))) {
            $img = $request->file('education');
    
            $education_images = time() . "d." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $education_images);
            @unlink($upload . '/' . $request->exeducation_image);
        }

        $site = Csr::find($id);
        $site->overview_description = $request->overview_description;
        $site->banner = $filename;
        $site->empowerment_of_people = $empowerment_of_people_images;
        $site->health_safety = $health_safety_images;
        $site->education = $education_images;
        $site->save();
        return redirect('admin/Csr')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = Csr::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
