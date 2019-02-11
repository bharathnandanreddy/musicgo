@extends('layout.app')
@section('add','active')
@section('navbar')
<li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Add">
          <a class="nav-link" href="/website1/video/create">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text active">Add</span>
          </a>
        </li>
@endsection()
@section('body')

@guest

@else
@section('aboutcss','visibility:hidden')
@section('homelink','/website1/admin')
@endguest

<br>
<h1 align="center" class="title">Add a new video </h1><br>
<div class="container">
<form class="form-horizontal" action="/website1/video" method="post">
	{{csrf_field()}}
<fieldset>
	<input type="text" name="link" class="form-control" placeholder="link"><br>

	<textarea class="form-control" rows=6 name="description" placeholder="description" ></textarea> <br>
	<input type="submit" class="form-control btn btn-success col-3 " align="center" value="submit" >
	</fieldset>
</form>

<br>
@if(count($errors)>0)

@foreach($errors->all() as $error)
<div class="alert alert-warning">
{{$error}}
</div>
@endforeach

@endif
</div>

@endsection()
