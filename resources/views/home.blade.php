@extends('layout.app')
@section('homelink','/website1')
@section('home','active')
@section('navbar')
 <li class="nav-item " data-toggle="tooltip" data-placement="right" title="contact">
          <a class="nav-link" href="/website1/contact">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>

@endsection()

@section('body')
  <div class="container" style="margin-top: 40px;margin-bottom: 40px;" >
      <form   action="/website1/searchit" method="get">
        {{csrf_field()}}
<fieldset>
            <div class="input-group" >
           <input class="form-control "  id="searchItem" type="text" name="item" placeholder="Search for..." >
              <span class="input-group-btn">
                <button class="btn btn-primary" type="searchbutton" >
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </fieldset>
          </form>


<br>
<div class="container">
<div class="row">
@foreach($videos as $video)
  <div class="col-md-6" style ="padding:30px">
    <div class="row">
    <div class=" col-10 embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="{{$video->link}}" allowfullscreen></iframe>
</div>
</div>
<strong>{{$video->discription}}</strong></div>
  @endforeach


<div style="margin-left:39%">
  <nav aria-label="Page navigation example">
{{$videos->links()}}
</nav>
 </div>
</div>
</div>
</div>
@endsection()
