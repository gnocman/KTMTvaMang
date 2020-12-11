@extends('layouts.main')
@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Job Search</h1>
        <p class="lead">Dễ dàng kết nối nhà tuyển dụng với những ứng viên tốt nhất</p>
        <hr class="my-2">
    </div>
    <div class="row">
        <div class="col-md-4 col-12">
            <h4>Danh Sách Công Ty Nôi Bật</h4>
            @foreach($companies as $company)
                    {{ $company->user_id }}
                    {{ $company->name }}
            @endforeach
        </div>
    </div>
@endsection
