<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST" action="{{ route('product.update', $product->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- This Input Hidden for send id to save cause i use ajax -->
    <input type="hidden" name="id" value="{{ $product->id }}">
    <!-- Satrt Row -->
    <div class="row">
{{--        <div class="col-md-4">--}}
{{--            <div class="form-group">--}}
{{--                <label class="control-label">Title_Ar</label>--}}
{{--                <input type="text" name="title_ar" value="{{ $product->title_ar }}" class="form-control"--}}
{{--                    id="exampleFormControlInput1">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-4">--}}
{{--            <div class="form-group">--}}
{{--                <label class="control-label">Sub Ar</label>--}}
{{--                <input type="text" name="sub_title_ar" value="{{ $product->title_ar }}" class="form-control"--}}
{{--                    id="exampleFormControlInput1">--}}
{{--            </div>--}}
{{--        </div>--}}


        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Sku</label>
                <input type="text" name="sku" readonly value="{{ $product->sku }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <!-- End Row -->
    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title En</label>
                <input type="text" name="title_en" value="{{ $product->title_en }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Sub En</label>
                <input type="text" name="sub_title_en" value="{{ $product->sub_title_en }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Category</label>
                <select name="category_id" class="form-control">
                    <option value="" disabled>Select Category</option>
                    @foreach ($categoreis as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->title_en == $product->category->title_en ? 'selected' : '' }}>
                            {{ $category->title_en }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <!-- End Row -->
    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Tag</label>
                <input type="text" name="tags" value="{{ implode(' ', $product->tags) }}" class="form-control">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Part Number</label>
                <input type="number" name="part_number" value="{{ $product->part_number }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Weight</label>
                <input type="text" name="weight" value="{{ $product->weight }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <!-- End Row -->
    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Dimensions</label>
                <input type="text" name="dimensions" value="{{ $product->dimensions }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Model Number</label>
                <input type="text" name="model_number" value="{{ $product->model_number }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Image</label>
                <input type="file" name="files[]" multiple class="form-control" id="exampleFormControlInput1">
                <span class="form-text text-danger text-center"> Recomended : 700 X 700 Px <br> Extension : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
    </div>
    <!-- End Row -->
    <!-- Satrt Row -->
    <div class="row">
{{--        <div class="col-md-4">--}}
{{--            <div class="form-group">--}}
{{--                <label class="control-label">Description Ar</label>--}}
{{--                <textarea name="desc_ar" class="form-control" id="" cols="30" rows="10">{{ $product->desc_ar }}</textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description En</label>
                <textarea name="desc_en" class="form-control" id="" cols="30" rows="10">{{ $product->desc_en }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">PDF</label>
                <input type="file" name="pdf" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <!-- End Row -->
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>

    </div>
</form>
<!-- End Form -->
<script>
    // TAGS Input
    $('#tags_input').tagsInput({});
</script>
