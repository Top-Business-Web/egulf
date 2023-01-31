@extends('Front.layouts.master')

@section('content')

    <section class="page-title page-title-12" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section">
                <img src="{{ asset($sliders->image_project) }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="title text-center">
                            <h1 class="title-heading">projects</h1>
                            <p class="title-desc">
                                We offer products, solutions, and services across the entire
                                energy value chain. We support our customers on their way to
                                a more sustainable future.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Projects
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section
        class="projects projects-standard projects-standard-1"
        id="projects-standard-1"
    >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="projects-filter">
                        <ul class="list-inline mb-0">
                            <li>
                                <a
                                    class="category-sort"
                                    href=""
                                    data-id="all"
                                >All</a
                                >
                            </li>
                            @foreach ($services as $service)

                            <li>
                                <span>{{ $service->project->count() }}</span>
                                <a href="" class="category-sort" data-id="{{ $service->id }}"
                                >{{ $service->title_en }}</a
                                >
                            </li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-search" id="project-content">
                @foreach ($projects as $project)
                <div class="col-12 col-md-6 col-lg-4 project-item filter-finance filter-supply">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder projects-all load-more" id="load">

                            <div class="project-img">
                                <a class="link" href="{{ route('project', $project->id) }}"></a
                                ><img
                                    src="{{ asset($project->image) }}"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="{{ route('project', $project->id) }}"
                                        >{{ $project->desc_en }}</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">{{ $project->service->title_en }}</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a
                        class="btn btn--primary load-more"
                        data-id="load-project"
                        href=""
                    >load more <i class="fas fa-plus"></i
                        ></a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
    $('.category-sort').on('click', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            // alert(id);

            $.ajax({
                type: 'get',
                url: '{{ route('category_Sort') }}',
                data: {
                    'id': id
                },
                beforeSend: function(data) {
                    $('.product-search').html('<h4 class="error">LOADING...</h4>');
                },
                success: function(data) {
                    // alert(data)
                    $('#project-content').html(data);
                },
                error: function(data) {
                    $('.product-search').html('<h2 class="error">NO PRODUCT FOUND</h2>');
                }
            });
        });

        $('.load-more').on('click', function(e) {
            e.preventDefault();

            var id = $(this).data('id');

            $.ajax({
                type: 'get',
                url: '{{ route('loadMore') }}',
                data: {
                    'id': id
                },
                beforeSend: function(data) {
                    $('.product-search').html('<h4 class="error">LOADING...</h4>');
                },
                success: function(data) {
                    // alert(data)
                    $('#load').html(data);
                },
                error: function(data) {
                    $('.product-search').html('<h2 class="error">NO PRODUCT FOUND</h2>');
                }
            });
        });
    </script>

@endsection
