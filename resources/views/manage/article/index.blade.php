@extends('manage.layouts.app')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="icofont icofont-pen bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h4>All Articles</h4>
                                        <span>Pending and publised articles</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Page-header end -->

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            <li>{{ session('success') }}</li>
                        </div>
                @endif

                <!-- Page-body start -->
                    <div class="page-body">
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Articles</h5>

                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left "></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th>Rate</th>
                                            <th>Operating</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($articles as $article)
                                            <tr>
                                                <th scope="row">{{$article->id}}</th>
                                                <td>{{$article->title}}</td>
                                                <td>{{$article->author->name}}</td>
                                                <td>{{$article->status}}</td>
                                                <td>@if($article->rating->count()>0){{round($article->rating->sum('point')/$article->rating->count(),2)}} @else
                                                        0 @endif</td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top"
                                                       data-original-title="view"
                                                       href="{{route('manage.article.detail',[$article->slug])}}"
                                                       class="btn btn-info"><i
                                                            class="icofont icofont-eye-alt"></i></a>
                                                    @if(\Illuminate\Support\Facades\Auth::id()==$article->user_id)
                                                        <a data-toggle="tooltip" data-placement="top"
                                                           data-original-title="edit"
                                                           href="{{route('manage.article.edit',[$article->slug])}}"
                                                           class="btn btn-primary"><i class="ti-pencil-alt"></i></a>
                                                        <a data-toggle="tooltip" data-placement="top"
                                                           data-original-title="delete"
                                                           href="{{route('manage.article.delete',[$article->slug])}}"
                                                           class="btn btn-danger"><i class="ti-minus"></i></a>
                                                    @endif
                                                    @if(\Illuminate\Support\Facades\Auth::user()->role=='admin'||\Illuminate\Support\Facades\Auth::user()->role=='moderator')
                                                        @if($article->status=='PENDING')
                                                            <a data-toggle="tooltip" data-placement="top"
                                                               data-original-title="publish"
                                                               href="{{route('manage.article.status',[$article->slug,'PUBLISHED'])}}"
                                                               class="btn btn-success"><i class="ti-check-box"></i></a>
                                                            <a data-toggle="tooltip" data-placement="top"
                                                               data-original-title="reject"
                                                               href="{{route('manage.article.status',[$article->slug])}}"
                                                               class="btn btn-danger"><i class="ti-close"></i></a>
                                                        @elseif($article->status=='PUBLISHED')
                                                            <a data-toggle="tooltip" data-placement="top"
                                                               data-original-title="reject"
                                                               href="{{route('manage.article.status',[$article->slug])}}"
                                                               class="btn btn-danger"><i class="ti-close"></i></a>
                                                        @elseif($article->status=='REJECT')
                                                            <a data-toggle="tooltip" data-placement="top"
                                                               data-original-title="publish"
                                                               href="{{route('manage.article.status',[$article->slug,'PUBLISHED'])}}"
                                                               class="btn btn-success"><i class="ti-check-box"></i></a>
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>


                                    </table>

                                </div>

                            </div>
                        </div>

                        <!-- Basic table card end -->

                    </div>

                    <!-- Page-body end -->
                </div>

            </div>
            <!-- Main-body end -->


        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
