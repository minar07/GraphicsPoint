@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Social Links</h2>
            </div>
            <div class="pull-right">
                @can('link-create')
                {{-- <a class="btn btn-success" href="{{ route('links.create') }}"> Create New Social Link</a> --}}
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
            <th>No</th>
            <th>Website</th>
            <th>url</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($links as $link)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $link->website }}</td>
	        <td>{{ $link->link_url }}</td>
	        <td>
                <form action="{{ route('links.destroy',$link->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('links.show',$link->id) }}">Show</a>
                    @can('link-edit')
                    <a class="btn btn-primary" href="{{ route('links.edit',$link->id) }}">Edit</a>
                    @endcan

                    @csrf

{{-- 
                    @can('link-delete')
                        <a 
                        href="#"
                          onclick="
                           var result = confirm('Are you sure you want to delete this link?');
                            if(!result){
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
          
                            }                     
                          "
                        >            
                        <button  class="btn btn-danger">Delete</button>
                        </a>
                        
                        <form id="delete-form" action="{{route('links.destroy', [$link->id]) }}"
                        method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{csrf_field()}}
                        </form>
                    
                        @endcan --}}
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $links->links() !!}

@endsection