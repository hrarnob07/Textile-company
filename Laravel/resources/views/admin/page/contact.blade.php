@extends('admin.layouts.master')
@section('title','Contact')
@include('admin.include.msg')
@section('content')
<section id="file-exporaat">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-card-center">

                        @if(isset($edit))
                        <i class="icon-user-plus"></i> Edit Contact
                        @else
                        <i class="icon-user-plus"></i> Add Contact
                        @endif
                    </h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <form class="form" method="post" 
                              @if(isset($edit))
                              action="{{url('/admin/Contact/update/'.$edit->id)}}"
                              @else
                              action="{{url('/admin/Contact/add/')}}"
                              @endif
                              " enctype="multipart/form-data">
                              {!! csrf_field() !!}
                               @if(isset($edit)) <input type="hidden" name="eximage" value="<?= $edit->banner; ?>" /> @endif
                            
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput1">Banner Image</label>
                                    <div class="col-md-9">
                                         @if(isset($edit))<img width="30%" class="card-img-top img-fluid" src="{{ URL::asset('upload/Contact/'.$edit->banner) }}">@endif
                                        <input type="file" class="form-control-file" name="banner" >
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput9">Head Office Address</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="summernote" name="head_office" placeholder="Description">
                                           @if(isset($edit))
                                          {{$edit->head_office}} 
                                           @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput1">Head Office Map</label>
                                    <div class="col-md-9">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Heading" name="head_office_map" 
                                        @if(isset($edit))
                                               value="{{$edit->head_office_map}}" 
                                               @endif>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput9">Marketing Office Address</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="summernote" name="marketing_office" placeholder="Description">
                                           @if(isset($edit))
                                          {{$edit->marketing_office}} 
                                           @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput1">Marketing Office Map</label>
                                    <div class="col-md-9">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Heading" name="marketing_office_map" 
                                        @if(isset($edit))
                                               value="{{$edit->marketing_office_map}}" 
                                               @endif>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput9">Factory Address</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="summernote" name="factory_office" placeholder="Description">
                                           @if(isset($edit))
                                          {{$edit->factory_office}} 
                                           @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 label-control" for="projectinput1">Factory Map</label>
                                    <div class="col-md-9">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Heading" name="factory_office_map" 
                                        @if(isset($edit))
                                               value="{{$edit->factory_office_map}}" 
                                               @endif>
                                    </div>
                                </div>
                                
                            
                            <div class="form-actions center">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="icon-cross2"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="icon-check2"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Both borders end-->
    <div class="row">
        <div class="col-xs-12">                                            
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="icon-file-o"></i> Contact List</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner</th>
                                    <th style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($data))
                                @foreach($data as $row)
                                <tr>
                                    <td><?= $row->id; ?></td>
                                    <td style="width: 400px"><img width="30%" class="card-img-top img-fluid" src="{{ URL::asset('upload/Contact/'.$row->banner) }}"></td>
                                    
                                    <td>
                                        <a href="{{url('admin/Contact/edit/'.$row->id)}}" title="Edit" class="btn btn-sm btn-outline-info"><i class="icon-pencil22"></i></a>
                                        <a  href="{{url('admin/Contact/delete/'.$row->id)}}" title="Delete" class="btn btn-sm btn-outline-danger"><i class="icon-cross"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Both borders end -->


</section>

@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">   
<style type="text/css">
    div.dataTables_length{
        padding-left: 10px;
        padding-top: 15px;
    }

    .dataTables_length>label{
        margin-bottom: 0px !important;
        display:block !important;
    }

    div.dataTables_filter
    {
        padding-right: 10px;
    }

    div.dataTables_info{
        padding-left: 10px;
    }

    div.dataTables_paginate{
        padding-right: 10px;
        padding-top: 5px;
    }


</style>
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/summernote.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/codemirror.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/theme/monokai.css')}}">

@endsection
@section('js')
<script src="{{asset('app-assets/vendors/js/tables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/editors/codemirror/lib/codemirror.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/editors/codemirror/mode/xml/xml.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/editors/summernote/summernote.js')}}" type="text/javascript"></script>

<script src="{{asset('app-assets/js/scripts/editors/editor-summernote.min.js')}}" type="text/javascript"></script> 

<script type="text/javascript">
    $(document).ready(function(){
        $('.summernote').summernote({
            height: 250, //set editable area's height
            placeholder: 'Details',
            codemirror: {// codemirror options
                theme: 'flatly'
            },
        });
    });

</script>
@endsection
