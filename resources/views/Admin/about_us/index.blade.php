@extends('Admin.layouts.master')

@section('content')

    <!-- Form Start -->
    <form method="POST" id="updateForm" class="updateForm" action="{{ route('about_us.update', $about_us->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $about_us->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
{{--                        <div class="col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Title Ar :</label>--}}
{{--                                <input type="text" name="title_ar" value="{{ $about_us->title_ar }}"--}}
{{--                                    class="form-control" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Sub Ar :</label>--}}
{{--                                <input type="text" name="sub_title_ar" value="{{ $about_us->sub_title_ar }}"--}}
{{--                                    class="form-control" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Hash Ar :</label>--}}
{{--                                <input type="text" name="hash_ar" value="{{ $about_us->hash_ar }}"--}}
{{--                                    class="form-control" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title En :</label>
                                <input class="form-control" name="title_en" value="{{ $about_us->title_en }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Happy Client :</label>
                                <input class="form-control" name="client_count" value="{{ $about_us->client_count }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sub En :</label>
                                <input class="form-control" name="sub_title_en" value="{{ $about_us->sub_title_en }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hash En :</label>
                                <input type="text" name="hash_en" value="{{ $about_us->hash_en }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image :</label>
                                <input type="file" name="image" class="dropify"
                                    data-default-file="{{ asset($about_us->image) }}" />
                                    <span class="form-text text-danger text-center">  Recomended : 370 x 370 <br> Extension : png, gif, jpeg,
                                        jpg,webp</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-body">
{{--                        <div class="container_ar">--}}
{{--                            <h5 class="mb0">about_us Ar</h5>--}}
{{--                            <textarea class="form-control" id="mytextarea" name="desc_ar" id="exampleFormControlTextarea1" rows="3">{{ $about_us->desc_ar }}</textarea>--}}
{{--                        </div>--}}

                        <div class="container_en">
                            <h5 class="mb0">about_us EN</h5>
                            <textarea class="form-control" id="mytextarea1" name="desc_en" id="exampleFormControlTextarea1" rows="3">{{ $about_us->desc_en }}</textarea>
                        </div>
                    </div>


                    <div>
                        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us -->
    </form>
    <!-- End Form -->


@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')

    <!-- Start Js -->
    <script>
        // Package for edit TextArae
        $('.dropify').dropify();

        CKEDITOR.replace('desc_ar');
        CKEDITOR.replace('desc_en');


        // deleteModel
        deleteScript('{{ route('category.destroy', ':id') }}');


        showEditModal('{{ route('about_us.index', ':id') }}');
        editScript();
    </script>
    <!-- Start Js -->
@stop
