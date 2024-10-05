@extends('admin.layouts.master');
@section('cardtitle')
    Danh sách người dùng
@endsection
@section('content')
<table class="table table-bordered mb-0 table-centered">
    <thead>
    <tr>
        <th>Transaction ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Password</th>
        <th>PhoneNumber</th>
        <th>Role</th>
        <th class="text-end">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>#124781</td>
        <td>longkdph32726@fpt.edu.long</td>
        <td>Long</td>
        <td>123456789</td>
        <td>0328891146</td>
        <td><span class="badge bg-info">Admin</span></td>
        <td class="text-end">
            <div class="dropdown d-inline-block">
                <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="las la-ellipsis-v fs-20 text-muted"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                    <a class="dropdown-item" href="#">Sửa</a>
                    <a class="dropdown-item" href="#">Xóa</a>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>#124781</td>
        <td>longkdph32726@fpt.edu.long</td>
        <td>Long</td>
        <td>123456789</td>
        <td>0328891146</td>
        <td><span class="badge bg-success">User</span></td>
        <td class="text-end">
            <div class="dropdown d-inline-block">
                <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="las la-ellipsis-v fs-20 text-muted"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                    <a class="dropdown-item" href="#">Sửa</a>
                    <a class="dropdown-item" href="#">Xóa</a>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>#124781</td>
        <td>longkdph32726@fpt.edu.long</td>
        <td>Long</td>
        <td>123456789</td>
        <td>0328891146</td>
        <td><span class="badge bg-success">User</span></td>
        <td class="text-end">
            <div class="dropdown d-inline-block">
                <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="las la-ellipsis-v fs-20 text-muted"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                    <a class="dropdown-item" href="#">Sửa</a>
                    <a class="dropdown-item" href="#">Xóa</a>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table><!--end /table-->
@endsection