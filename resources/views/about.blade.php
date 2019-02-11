@extends('layout.app')
@section('homelink','/website1')
@section('about','active')
@guest
@else
@section('navbar')
 <li class="nav-item " data-toggle="tooltip" data-placement="right" title="contact">
          <a class="nav-link" href="/website1/contact">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>

@endsection()


@endguest

@section('body')
<div class="container"  style="margin-top: 40px;margin-bottom: 40px;">
<h2 class="text-justify ">A Simple Website </h2>
<hr>
<ul class="">
	<li>It has all basic crud operations
	 <ol>
		<li>Create</li>
		<li>Read</li>
		<li>Update</li>
		<li>Destroy</li>
	 </ol>
	 </li>
	<li>It containes a beautiful template,search etc.</li>
</ul>
	</div>

@endsection