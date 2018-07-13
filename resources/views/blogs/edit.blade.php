@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="row justify-content-center">
        <h2 style="text-align: center;margin-bottom: 30px">Update Blog</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                @if (session('status'))
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="col-md-12">

            @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif

            <form action="{{Route('blog.update',$blog->id)}}" method="post">
                @csrf   
                @method('put')
                <div class="col-md-12" style="margin-top:20px">
                    <input placeholder="Blog Title" class="form-control" type="text" name="name" value="{{ old('name',$blog->name) }}">
                    @if($errors->has('name'))
                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                    @endif
                </div>
                <div class="col-md-12" style="margin-top:20px">
                    <select class="category form-control" name="categories[]" multiple="multiple">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12" style="margin-top:20px">
                    <textarea placeholder="Blog Description" class="form-control" name="description" rows="10">{{ old('description',$blog->description) }}</textarea>
                    @if($errors->has('description'))
                    <div class="alert alert-danger">{{$errors->first('description')}}</div>
                    @endif
                </div>
                <div class="col-md-12" style="margin-top:20px">
                    <button type="submit" class="btn btn-success" style="float: right">Update Blog</button>
                    <a href="{{ route('blog.index') }}"><button type="button" class="btn btn-warning" style="float: right;margin-right:10px">Cancel and Back</button></a>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function ()
    {
        $('.category').select2({
            placeholder: "Select Category",
            allowClear: true
        });
        $('.category').val([<?php echo $blog->categories;?>]).trigger('change');
        
    });
</script>
@endsection
