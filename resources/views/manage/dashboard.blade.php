@extends('manage.layouts.app')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <!-- card1 start -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
                                        <i class="icofont icofont-database bg-c-blue card1-icon"></i>
                                        <span class="text-c-blue f-w-300">Total Articles</span>
                                        <h4>{{$allArticles}}</h4>

                                    </div>
                                </div>
                            </div>
                            <!-- card1 end -->
                            <!-- card1 start -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
                                        <i class="icofont icofont-web bg-c-green card1-icon"></i>
                                        <span class="text-c-green f-w-300">Published</span>
                                        <h4>{{$publishedArticles}}</h4>

                                    </div>
                                </div>
                            </div>
                            <!-- card1 end -->
                            <!-- card1 start -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
                                        <i class="icofont icofont-pen bg-c-orenge card1-icon"></i>
                                        <span class="text-c-orenge f-w-600">Pending Articles</span>
                                        <h4>{{$pendedArticles}}</h4>

                                    </div>
                                </div>
                            </div>
                            <!-- card1 end -->


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('css')

@endsection

@section('js')

@endsection
