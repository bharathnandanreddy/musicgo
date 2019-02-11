@extends('layout.app')
@section('homelink','/website1')
@section('navbar')
 <li class="nav-item active " data-toggle="tooltip" data-placement="right" title="contact">
          <a class="nav-link" href="/website1/contact">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>

@endsection()
@section('body')

<div class="container"  style="margin-top: 40px;margin-bottom: 40px;">
	
	<ul class="nav  nav-fill " >
  <li class="nav-item">
    <a class="nav-link " href="https://www.facebook.com/bharathnandan.karla"><span class="fa fa-facebook fa-3x"></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://twitter.com/bharathnandan11"><span class="fa fa-twitter fa-3x"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="mailto:16h61a05l0@cvsr.ac.in"><span class="fa fa-envelope fa-3x"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="https://web.skype.com/en/"><span class="fa fa-skype fa-3x"></a>
  </li>
</ul>

<br>
<div class="col-8">
<h2>Any query :</h2>
<form action="mailto:16h61a05l0@cvsr.ac.in">
  <div class="form-group">
   
  <div class="form-group">
    <input type="text" class="form-control" name="subject" placeholder="subject">
  </div>
  <div class="form-group">
<textarea class="form-control" rows="5" placeholder="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection