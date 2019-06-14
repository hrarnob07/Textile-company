<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use DB;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        $json = $this->tableJson();
        return view('admin.page.sub_category', ['cat' => $cat, 'subcat' => $json]);
    }

    private function tableJson()
    {
        $json = DB::table('sub_categories')
                ->join('categories', 'sub_categories.cat_id', '=', 'categories.id')
                ->select('sub_categories.*', 'categories.name as cname')
                ->get();

        return $json;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'cid' => 'required',
        ]);
//        echo $request->name;
//        exit();
        $subcategory = new Subcategory;
        $subcategory->name = $request->name;
        $subcategory->cat_id = $request->cid;
        $subcategory->save();

        return redirect('admin/subcategory')->with('status', 'Sub Page Name Added Successfully!');
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
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category::all();
        $jsonData = SubCategory::find($id);
        $json = $this->tableJson();
        return view('admin.page.sub_category', ['subcat' => $json, 'cat' => $cat,'edit'=>$jsonData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'cid' => 'required',
        ]);
//        echo $request->name;
//        exit();
        $subcategory = SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->cat_id = $request->cid;
        $subcategory->save();

        return redirect('admin/subcategory')->with('status', 'Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = Subcategory::find($id);
        $json->delete();
        return redirect('admin/subcategory')->with('status', 'Sub Page Name Deleted Successfully!');
    }
}
