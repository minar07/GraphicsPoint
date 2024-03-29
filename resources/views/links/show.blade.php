@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Social link</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('links.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Website:</strong>
            {{ $link->website }}
        </div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>url:</strong>
            {{ $link->link_url }}
        </div>
    </div>
    
</div>
@endsection