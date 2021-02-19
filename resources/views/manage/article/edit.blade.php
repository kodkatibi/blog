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
                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h4>Update Article</h4>

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

                <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="sub-title">Update Article</h4>
                                        <form method="post" action="{{route('manage.article.edit',[$article->slug])}}">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input name="title" type="text" class="form-control"
                                                           value="{{$article->title}}" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Content</label>
                                                <div class="col-sm-10">
                                                    <textarea name="body" rows="5" cols="5"
                                                              class="form-control"
                                                              placeholder="Content">{{$article->body}}</textarea>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-round">Send</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->

                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
