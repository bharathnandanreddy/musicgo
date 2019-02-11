@extends('layout.app')
@section('home','active')
@section('aboutcss','visibility:hidden')
@section('homelink','/website1/admin')
@section('navbar')
<li class="nav-item " data-toggle="tooltip" data-placement="right" title="Add">
          <a class="nav-link" href="/website1/video/create">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text active">Add</span>
          </a>
        </li>
@endsection()
@section('body')




  <div class="container" >
      <form  style="margin-top: 40px;"  action="/website1/searchitadmin" method="get">
        {{csrf_field()}}
<fieldset>
            <div class="input-group" >
           <input class="form-control "  id="searchItem1" type="text" name="item" placeholder="Search for..." >
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

  <div class="col-md-6" style ="padding:20px">
    <div class="row">
    <div class=" col-10 embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="{{$video->link}}" allowfullscreen></iframe>
</div>
<div class="col-2">
  <br>
<form action="{{'/website1/video/'.$video->id.'/edit'}}">
  <div class="input-group">
    <button type="submit" class="btn btn-warning"> <span class="fa fa-pencil"></span></button>
  </div>

</form>
<br><br><br>
<form action="/website1/video/{{$video->id}}" method="post">
  {{method_field('DELETE')}}
  {{csrf_field()}}
  <div class="input-group">
    <button type="submit" class="btn btn-warning"> <span class="fa fa-trash"></span></button>
  </div>

</form>
</div>
</div><strong>{{$video->discription}}</strong></div>
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

