@extends('layout.app')
<style>

    .noscroll {
        position: fixed;
        overflow: hidden;
    }

    #overlay {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        z-index: 100;
        background: #ffffff;
    }

    #spinner {
        display: none;
        position: fixed;
        width: 40px;
        height: 40px;
        top: 50%;
        left: 50%;
        margin-top: -20px;
        margin-left: -20px;
        z-index: 101;
        background-color: #3498db;

        -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
        animation: sk-rotateplane 1.2s infinite ease-in-out;
    }

    @-webkit-keyframes sk-rotateplane {
        0% { -webkit-transform: perspective(120px) }
        50% { -webkit-transform: perspective(120px) rotateY(180deg) }
        100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
    }

    @keyframes sk-rotateplane {
        0% {
            transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
        } 50% {
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
        } 100% {
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
        }
    }

</style>

<div id="overlay"></div>
<div id="spinner"></div>

<script>

    document.body.setAttribute("class", "noscroll");

    document.getElementById("overlay").style.display = "block";
    document.getElementById("spinner").style.display = "block";


    window.onload = function() {
      document.getElementById("spinner").style.display = "none";
      document.getElementById("overlay").style.display = "none";

      document.body.className = document.body.className.replace(/\bnoscroll\b/,'');
    }

</script>
@section('body')
<div class="container" style="margin-top:60px;margin-bottom: 60px">
    <div class="row">
         <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="container">
                <div class="container"><h1>Admin Reset Password</h1></div>
                <hr>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            <label for="email" >E-Mail Address:</label>
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
