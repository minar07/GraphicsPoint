@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Slider</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sliders.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sliders.update',$slide->id) }}" method="POST" enctype="multipart/form-data" files="true">
            @csrf
            @method('PUT')

            <div class="row">
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <strong>ID:</strong>
                        <input type="text" value="{{$slide->id}}" name="slide_id" class="form-control" placeholder="Enter slide ID">
                    </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" value="{{$slide->title}}" name="title" class="form-control" placeholder="Enter slide title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Enter slide description">{{$slide->description}}</textarea>
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="slide_name"><strong>Image:</strong></label>
                        <input type="file" value="{{$slide->image_name}}" class="form-control" id="slide-image" name="slide_name"> 
                    </div>
                </div>
        
        
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </div>
        
    </form>

@endsection