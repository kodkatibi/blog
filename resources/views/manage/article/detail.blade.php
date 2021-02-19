@extends('manage.layouts.app')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
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
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="icofont icofont-pencil bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h4>{{$article->title}}</h4>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <div class="float-right form-control">

                                    <label class="col-sm-12 col-form-label">Rate</label>
                                    <form action="{{route('manage.article.rate',[$article->slug])}}" method="post">
                                        @csrf
                                        <select name="point" class="form-control">
                                            @for($i=1;$i<6;$i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                        <button type="submit" class="btn btn-primary">Rate it</button>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>{{$article->title}}</h5>
                                <div>
                                    {!! $article->body !!}
                                </div>
                            </div>
                            <div class="card-block table-border-style">


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
