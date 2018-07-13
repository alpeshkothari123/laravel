@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="row justify-content-center">
    </div>

    <div class="row justify-content-center" style="margin-bottom: 30px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Blog List</h4>
                    <a href="{{Route('blog.create')}}"><button title="Add New Blog" class="btn btn-primary pull-right">Add Blog</button></a>
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
    @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @endif

    <div class="" style="margin-bottom: 30px">
        <form name="search_blog" id="search_blog">
            @csrf

            <div class="col-md-3 d-inline-block">
                <input placeholder="Blog Title" class="form-control" type="text" name="search_name">
            </div>

            <div class="col-md-3 d-inline-block">
                <input placeholder="Blog Description" class="form-control" type="text" name="search_description">
            </div>

<!--            <div class="col-md-3 d-inline-block">
                <input placeholder="Blog Title" class="form-control" type="text" name="search_date">
            </div>-->

            <div class="col-md-2 d-inline-block">
                <button class="btn btn-primary search_btn d-inline-block" type="submit">Search</button>
            </div>
        </form>
    </div>


    <div id ="newblog" data-bind="{{ csrf_token() }}"> 
        @foreach($blogs as $blog)
        <div class="card card-body">
            <div class="col-md-9 pull-left">
                {{$blog->name}}
            </div>
            <div class="col-md-3">
                <a href="{{Route('blog.show', $blog->id)}}"><button title="Read" class="btn btn-primary">Read</button></a>
                <a href="{{Route('blog.edit', $blog->id)}}"><button title="Edit" class="btn btn-success">Edit</button></a>
                <form onsubmit="return confirm('Are you sure you want to delete this blog?')" class="d-inline-block" method="post" action="{{Route('blog.destroy', $blog->id)}}">
                    @csrf
                    @method('delete')
                    <button title="Delete" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
        <div class="pull-right" style="margin-top: 10px">
            {{$blogs->links()}}
        </div>
        
    </div>

    <script>
        $("#search_blog").submit(function (e)
        {
            e.preventDefault();
            var new_posts;
            $.ajax({
            type: "POST",
                    url: 'search',
                    data: $(this).serialize(),
                    success: function (msg)
                    {
                    $("#newblog").text('');
                            console.log(msg);
                            for (var i = 0; i < msg.length; i++)
                    {

                    new_posts = '<div class="card card-body"><div class="col-md-9 pull-left">' + msg[i]["name"] + '</div> <div class="col-md-3"><a href="<?php url('/blog') ?>/blog/' + msg[i]["id"] + '"><button title="Read" class="btn btn-primary">Read</button></a><a href="<?php url('/blog') ?>/blog/' + msg[i]["id"] + '/edit""><button title="Edit" class="btn btn-success">Edit</button></a> ';
                   new_posts +='<form onsubmit="return confirm(\'Are you sure you want to delete this blog?\')" class="d-inline-block" method="post" action="<?php url('/blog') ?>/blog/' + msg[i]["id"] + '"><input type="hidden" name="_token" id="csrf-token" value="'+$('#newblog').attr("data-bind")+'" /><input name="_method" value="delete" type="hidden"><button title="Delete" type="submit" class="btn btn-danger">Delete</button> </form> </div></div>' 
                           
    //       alert(new_posts);
                                    $("#newblog").append(new_posts);
                            }

                    }
                    });
        });
    </script>
    @endsection
