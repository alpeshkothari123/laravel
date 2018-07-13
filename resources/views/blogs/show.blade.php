@extends('layouts.app')

@section('content')
<div class="col-md-12">
    
    <div class="row justify-content-center" style="margin-bottom: 30px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Blog Detail</h4>
                    <a href="{{Route('blog.index')}}"><button title="Go Back" class="btn btn-primary pull-right">Go Back</button></a>
                    <!--<div style="float: right"><a href="{{ route('blog.index') }}">Go Back</a></div>-->
                </div>
                @if (session('status'))
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="col-md-12">
            <h3>Blog Title </h3> {{$blog->name}}
        </div>
        
        <div class="col-md-12" style="margin-top: 30px; ">
            <h3>Blog Categories </h3> {{$blog->categories}}
        </div>
        <div class="col-md-12" style="margin-top: 30px; ">
            <h3>Blog Description</h3> {{$blog->description}}
        </div>
    </div>
</div>
@endsection
