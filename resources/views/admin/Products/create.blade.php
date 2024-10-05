@extends('admin.layouts.master');
@section('cardtitle')
    Thêm sản phẩm
@endsection
@section('content')
<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Danh mục</label>
        <select class="form-control" id="" name="category_id">
            @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
            
        </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Ảnh</label>
      <input type="file" name="url_image" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mô tả</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection