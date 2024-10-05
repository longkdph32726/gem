@extends('admin.layouts.master');
@section('cardtitle')
    Sửa danh mục
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route('category.update',$category)}}">
    @csrf
    @method('PUT');
    <div class="form-group mb-3">
      <label class="form-label">Tên danh mục</label>
      <input type="text" class="form-control" placeholder="Tên danh mục" name="name" value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection