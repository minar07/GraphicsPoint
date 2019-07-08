@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Slider Images</h2>
            </div>
            <div class="pull-right">
                @can('slider-create')
                <a class="btn btn-success" href="{{ route('sliders.create') }}"> Create New Slider</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th width="100px">Image</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($slide as $open)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $open->title }}</td>
            <td>{{ $open->description }}</td>
            <td><a href="#"><img style="width:60%" src="/images/Slider_Images/{{$open->image_name}}" alt="" class="img-fluid"></a></td>
	        <td>
                <form action="{{ route('sliders.destroy',$open->id) }}" method="POST">
                    @can('slider-edit')
                    <a class="btn btn-primary" href="{{ route('sliders.edit',$open->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @can('slider-delete')
                    <a 
                    href="#"
                      onclick="
                       var result = confirm('Are you sure you want to delete this slide?');
                        if(!result){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
      
                        }                     
                      "
                    >            
                    <button type="submit"  class="btn btn-danger">Delete</button>
                    </a>
                    
                    <form id="delete-form" action="{{route('sliders.destroy', [$open->id]) }}"
                    method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{csrf_field()}}
                    </form>
                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                @endcan
                </form>
	        </td>
	    </tr>
        @endforeach
        
        {{-- {!! $gigs->links() !!} --}}
    </table>

  

@endsection