@extends('admin.layout.layout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 50px;">
                <h1 class="page-header">Bố cục website
                    {{-- <small>Danh Sách</small> --}}
                </h1>
                @if(session('flash_success'))
                <div class="alert alert-success">
                    <strong>Thành Công! </strong>{{ session('flash_success') }}
                </div>
                @endif
                 @if(session('flash_err'))
                <div class="alert alert-danger">
                    <strong>Cảnh Báo! </strong>{{ session('flash_err') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="page-header">Sidebar</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection