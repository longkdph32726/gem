@extends('admin.layouts.master');
@section('cardtitle')
    Danh sách danh mục
@endsection
@section('content')
<table class="table  mb-0 table-centered">
    <thead class="table-light">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th class="text-end">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>#{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td class="text-end">
                <div class="dropdown d-inline-block">
                    <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="las la-ellipsis-v fs-20 text-muted"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                        <a class="dropdown-item" href="{{ route('category.edit',$item) }}">Sửa</a>
                        <a class="dropdown-item" href="#">
                            <form action="{{ route('category.destroy',$item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="confirm('Có chắc xóa không!')" type="submit">Delete</button>
                          </form></a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach



    </tbody>
</table>
<div class="col-md-12">
    {{ $data->links() }}
</div>
@endsection