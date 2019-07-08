@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gigs</h2>
            </div>
            <div class="pull-right">
                @can('gig-create')
                <a class="btn btn-success" href="{{ route('gigs.create') }}"> Create New Gigs</a>
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
            <th>Title</th>
            <th>Category</th>
            <th>Details</th>
            <th>Basic</th>
            <th>Premium</th>
            <th>Unlimited</th>
            <th >Featured Image</th>
            <th>Action</th>
        </tr>
	    @foreach ($gigs as $item)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td width="160px">{{ $item->title }}</td>
            <td width="80px">{{ $item->category->category }}</td>
            <td width="260px">{{ $item->description }}</td>
            <td>{{ $item->basic_price }}</td>
            <td>{{ $item->premium_price }}</td>
            <td>{{ $item->unlimited_price }}</td>
	        <td width="250px" height="150px"><img  src="/images/cover_images/{{$item->image_name}}" alt="" class="img-fluid"></td>

	        <td>
                <form action="{{ route('gigs.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('gigs.show',$item->id) }}">Show</a>
                    @can('gig-edit')
                    <a class="btn btn-primary" href="{{ route('gigs.edit',$item->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('gig-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $gigs->links() !!}

@endsection