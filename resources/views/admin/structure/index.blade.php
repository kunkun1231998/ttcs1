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
                <form action="{{ route('structure.update_post_length') }}" method="POST">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3 class="page-header">Số lượng bài viết</h3>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="index_post_length">Trang chủ</label>
                                <input type="nnumber" min="1" class="form-control" name="index_post_length"
                                    id="index_post_length"
                                    value="{{ config('global.index_post_length') ?? 3 }}"
                                    placeholder="Số lượng bài viết">
                            </div>
                            <div class="form-group">
                                <label for="cate_post_length">Trang danh mục</label>
                                <input type="nnumber" min="1" class="form-control" name="cate_post_length"
                                    id="cate_post_length"
                                    value="{{ config('global.cate_post_length') ?? 3 }}"
                                    placeholder="Số lượng bài viết">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="page-header">Sidebar</h3>
                            <ul class="list-group">
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Cụm Tin Nổi Bật</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_featured_post') ?? 1}}"
                                    name="sidebar_order_featured_post" id="sidebar_order_featured_post">
                                </li>
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Fanpage</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_fanpage') ?? 2}}"
                                    name="sidebar_order_fanpage" id="sidebar_order_fanpage">
                                </li>
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Tags</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_tags') ?? 3}}"
                                    name="sidebar_order_tags" id="sidebar_order_tags">
                                </li>
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Follow Us</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_followus') ?? 4}}"
                                    name="sidebar_order_followus" id="sidebar_order_followus">
                                </li>
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Video Nổi Bật</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_videos') ?? 5}}"
                                    name="sidebar_order_videos" id="sidebar_order_videos">
                                </li>
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Đăng Ký Email</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_email') ?? 6}}"
                                    name="sidebar_order_email" id="sidebar_order_email">
                                </li>
                                <li class="list-group-item" style="display:flex; justify-content: space-between; align-items:center">
                                    <b>Quảng Cáo</b>
                                    <input type="number" class="form-control" style="width:10rem" value="{{config('global.sidebar_order_adv') ?? 7}}"
                                    name="sidebar_order_adv" id="sidebar_order_adv">
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12" style="display:flex;justify-content: center">
                            <button class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection