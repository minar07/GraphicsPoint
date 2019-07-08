@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Gig</h2>
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

    <form action="{{ route('gigs.update',$gig->id) }}" method="POST" enctype="multipart/form-data" files="true">
    	@csrf
        @method('PUT')

        {{-- {!! Form::open(['route' => 'gigs.store', 'method'=> 'post', 'enctype'=>'multipart/form-data','files'=>true]) !!} --}}
        <div class="form-group">
        <!-- <label for="project-title">Project Title</label> -->
        {{Form::label('name', 'Project Title:')}}
        <!-- <input type="text" class="form-control" id="project-title" name="project-title" placeholder="Enter Project Title"> -->
        {{Form::text('name',  $gig->title,['class'=> 'form-control', 'id'=> 'project-title', 'placeholder'=> 'Enter Project Title',])}} 
      </div>
      
      <div class="form-group">
        <label for="category">Category: </label>
        <select name="category">
       @foreach ($category as $item)
            @if(old('category',$gig->category_id) == $item->id )
            <option value="{{ $item->id }}" selected >{{ $item->category }}</option>
       @else
            <option value="{{ $item->id }}">{{ $item->category }}</option>
       @endif
            @endforeach
        </select>   
     </div>
      
      <div class="form-group">
        {{Form::label('description', 'Project Description:')}}
        {{Form::textarea('description', $gig->description,['class'=> 'form-control', 'id'=> 'project-description', 'placeholder'=> ' Enter Project Description',])}}
    </div>
    <div class="form-group">
        {{Form::label('basic_price', 'Basic Price:')}}
        {{Form::number('basic_price',$gig->basic_price,['class'=> 'form-control', 'id'=> 'basic-price', 'placeholder'=> ' Enter Basic Price', 'type'=>'any'])}}
     </div>
     <div class="form-group">
        {{Form::label('premium_price', 'Premium Price:')}}
        {{Form::number('premium_price',$gig->premium_price,['class'=> 'form-control', 'id'=> 'premium-price', 'placeholder'=> ' Enter Premium Price', 'type'=>'any'])}}
     </div>
     <div class="form-group">
        {{Form::label('unlimited_price', 'Unlimited Price:')}}
        {{Form::number('unlimited_price',$gig->unlimited_price,['class'=> 'form-control', 'id'=> 'unlimited-price', 'placeholder'=> ' Enter Unlimited Price', 'type'=>'any'])}}
     </div>

        <table class="table table-bordered">
            <tbody>
                <tr>
                  <td width="200px"><label for="featured_image">Featured Image</label></td>
                  <td><input type="file" class="form-control"  name="featured_image"></td>
                  <td style="width:300px"><img  src="/images/cover_images/{{$gig->image_name}}" alt="" class="img-fluid"></td>
                </tr>
              
                    <tr>
                      <td width="200px">
                        <label for="gig_image_one">Additional Image One</label>
                    </td>
                      <td>
                    <input type="file" class="form-control" id="gig-image1" name="gig_image_one">
                    </td>
                    <td style="width:300px">
                        <img  src="/images/gig_slider_images/{{$gig->image_name_1}}" alt="" class="img-fluid"></td>
                    </tr>

                    <tr>
                    <td width="200px">
                    <label for="gig_image_two">Additional Image Two</label>
                    </td>
                    <td>
                    <input type="file" class="form-control" id="gig-image2" name="gig_image_two">
                     </td>
                    <td style="width:300px">
                    <img  src="/images/gig_slider_images/{{$gig->image_name_2}}" alt="" class="img-fluid"></td>
                    </tr>

                    <tr>
                    <td width="200px">
                    <label for="gig_image_three">Additional Image Three</label>
                    </td>
                    <td>
                    <input type="file" class="form-control" id="gig-image3" name="gig_image_three" >
                    </td>
                    <td style="width:300px">
                    <img  src="/images/gig_slider_images/{{$gig->image_name_3}}" alt="" class="img-fluid"></td>
                    </tr>
                    <tr>
                        <td width="200px">
                            <label for="gig_image_four">Additional Image Four</label>
                        </td>
                        <td>
                            <input type="file" class="form-control" id="gig-image4" name="gig_image_four" >
                        </td>
                        <td style="width:300px">
                            <img  src="/images/gig_slider_images/{{$gig->image_name_4}}" alt="" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                    <td width="200px">
                        <label for="gig_image_five">Additional Image Five</label>
                     </td>
                    <td>
                        <input type="file" class="form-control" id="gig-image5" name="gig_image_five" >
                    </td>
                    <td style="width:300px">
                        <img  src="/images/gig_slider_images/{{$gig->image_name_5}}" alt="" class="img-fluid">
                    </td>
                    </tr>

                    <tr>
                    <td width="200px">
                        <label for="gig_image_six">Additional Image Six</label>
                    </td>
                        <td>
                            <input type="file" class="form-control" id="gig-image5" name="gig_image_six" >
                        </td>
                        <td style="width:300px">
                             <img  src="/images/gig_slider_images/{{$gig->image_name_6}}" alt="" class="img-fluid">
                        </td>
                    </tr> 
                    
                    <tr>
                    <td width="200px">
                        <label for="gig_image_seven">Additional Image Seven</label>
                    </td>
                    <td>
                        <input type="file" class="form-control" id="gig-image5" name="gig_image_seven" >
                    </td>
                    <td style="width:300px">
                        <img  src="/images/gig_slider_images/{{$gig->image_name_7}}" alt="" class="img-fluid">
                    </td>
                    </tr>                   

                  </tbody>
            </table>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-warning">Submit</button>
       </div>

    </form>
    
@endsection