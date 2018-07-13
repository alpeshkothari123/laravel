@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="row justify-content-center">
        <h2 style="text-align: center;margin-bottom: 30px">Add Blog</h2>
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
            <form action="{{Route('blog.store')}}" method="post">
                @csrf
                <div class="col-md-12" style="margin-top:20px">
                    <input placeholder="Blog Title" class="form-control" type="text" name="name" value="{{ old('name') }}">
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

                    @if($errors->has('categories'))
                    <div class="alert alert-danger">{{$errors->first('categories')}}</div>
                    @endif

                </div>
                <div class="col-md-12" style="margin-top:20px">
                    <textarea placeholder="Blog Description" class="form-control" name="description" rows="10">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                    <div class="alert alert-danger">{{$errors->first('description')}}</div>
                    @endif
                </div>
                <div class="col-md-12" style="margin-top:20px">
                    <button type="submit" class="btn btn-success" style="float: right">Add Blog</button>
                    <a href="{{ route('blog.index') }}"><button type="button" class="btn btn-warning" style="float: right;margin-right:10px">Cancel and Back</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$categories_old_data = "";
if (old('categories'))
{
    $categories_old_data = implode(",", old('categories'));
}
?>

<script>
    $(document).ready(function ()
    {
        $('.category').select2({
            placeholder: "Select Category",
            allowClear: true
        });
        $('.category').val([<?php echo $categories_old_data; ?>]).trigger('change');
    });
</script>
@endsection
