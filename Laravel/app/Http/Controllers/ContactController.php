<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::all();
        return view('admin.page.contact',['data'=>$data]);
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
            'head_office' => 'required',
            'head_office_map' => 'required',
            'marketing_office' => 'required',
            'marketing_office_map' => 'required',
            'factory_office' => 'required',
            'factory_office_map' => 'required',
        ]);
        //dd($request->logo);

        $filename = "";
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/Contact';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        
        $site = new Contact();
        $site->banner = $filename;
        $site->head_office = $request->head_office;
        $site->head_office_map = $request->head_office_map;
        $site->marketing_office = $request->marketing_office;
        $site->marketing_office_map = $request->marketing_office_map;
        $site->factory_office = $request->factory_office;
        $site->factory_office_map = $request->factory_office_map;
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contact::All();
        $edit = Contact::find($id);
        return view('admin.page.contact',['edit' => $edit,'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename = $request->eximage;
        // echo $filename; print_r($request->eximage); die();
        if (!empty($request->file('banner'))) {
            $img = $request->file('banner');
            $upload = 'upload/Contact';
            //$filename=$img->getClientOriginalName();
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($upload . '/' . $request->eximage);
        }

        $site = Contact::find($id);
        $site->banner = $filename;
        $site->head_office = $request->head_office;
        $site->head_office_map = $request->head_office_map;
        $site->marketing_office = $request->marketing_office;
        $site->marketing_office_map = $request->marketing_office_map;
        $site->factory_office = $request->factory_office;
        $site->factory_office_map = $request->factory_office_map;
        $site->save();
        return redirect('admin/Contact')->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = Contact::find($id);
        $json->delete();
        return back()->with('status', 'Deleted Successfully!');
    }
}
