@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Gig</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('gigs.index') }}"> Back</a>
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

    {!! Form::open(['route' => 'gigs.store', 'method'=> 'post', 'enctype'=>'multipart/form-data','files'=>true]) !!}
    <div class="form-group">
    {{Form::label('name', 'Project Title:')}}
    {{Form::text('name','', ['class'=> 'form-control', 'id'=> 'project-title', 'placeholder'=> 'Enter Project Title',])}} 
  </div>
  @csrf

  <div class="form-group">
    <label for="category">Category: </label>
    <select name="category">
            @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->category}}</option>
            @endforeach
    </select>
  </div>
  
  <div class="form-group">
    {{Form::label('description', 'Project Description:')}}
    {{Form::textarea('description','',['class'=> 'form-control', 'id'=> 'project-description', 'placeholder'=> ' Enter Project Description',])}}
 </div>
  <div class="form-group">
    {{Form::label('basic_price', 'Basic Price:')}}
    {{Form::number('basic_price','',['class'=> 'form-control', 'id'=> 'basic-price', 'placeholder'=> ' Enter Basic Price', 'type'=>'any'])}}
 </div>
 <div class="form-group">
    {{Form::label('premium_price', 'Premium Price:')}}
    {{Form::number('premium_price','',['class'=> 'form-control', 'id'=> 'premium-price', 'placeholder'=> ' Enter Premium Price', 'type'=>'any'])}}
 </div>
 <div class="form-group">
    {{Form::label('unlimited_price', 'Unlimited Price:')}}
    {{Form::number('unlimited_price','',['class'=> 'form-control', 'id'=> 'unlimited-price', 'placeholder'=> ' Enter Unlimited Price', 'type'=>'any'])}}
 </div>
  <div class="form-group">
    <label for="featured_image">Featured Image</label>
    <input type="file" class="form-control" id="project-image" name="featured_image">
  
  </div>
        
        <div class="form-group">
            <label for="gig_image_one">Additional Image One</label>
            <input type="file" class="form-control" id="gig-image1" name="gig_image_one" placeholder="Enter Project Description">
        </div>
        <div class="form-group">
            <label for="gig_image_two">Additional Image Two</label>
            <input type="file" class="form-control" id="gig-image2" name="gig_image_two" placeholder="Enter Project Description">
        </div>
        <div class="form-group">
            <label for="gig_image_three">Additional Image Three</label>
            <input type="file" class="form-control" id="gig-image3" name="gig_image_three" placeholder="Enter Project Description">
        </div>
        <div class="form-group">
            <label for="gig_image_four">Additional Image four</label>
            <input type="file" class="form-control" id="gig-image4" name="gig_image_four" placeholder="Enter Project Description">
        </div>
        <div class="form-group">
            <label for="gig_image_five">Additional Image Five</label>
            <input type="file" class="form-control" id="gig-image5" name="gig_image_five" placeholder="Enter Project Description">
        </div>
        <div class="form-group">
            <label for="gig_image_six">Additional Image Six</label>
            <input type="file" class="form-control" id="gig-image6" name="gig_image_six" placeholder="Enter Project Description">
        </div>
        <div class="form-group">
            <label for="gig_image_seven">Additional Image Seven</label>
            <input type="file" class="form-control" id="gig-image7" name="gig_image_seven" placeholder="Enter Project Description">
        </div>
  
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-success">Submit</button>
</div>
  {!! Form::close() !!}

@endsection