@extends('\Layout.Master3')

@section('content')
    <button class="button" onclick="window.location.href='{{route('admin.categories')}}'">Back to Categories List</button>
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Create New Categories</h1>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{route('admin.updatecategories', $Category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="">Categories Name</label>
                <input class="form-control" type="text" name="Categories_Name" aria-label="" value="{{ $Category->nama }}">
                @error('title')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Categories Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Enter categories description here" aria-label="" value="">{{$Category->descriptions}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <h2 style="font-weight: bold; font-size: 20px;">Current Logo</h2>
                <img src="{{$Category->logo ? asset('storage/' . $Category->logo) : asset($Category->logo)}}" alt="Logo Job" style="width:100%; height:100%; max-width:300px; max-height: 300px;">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Categories Logo</label>
                    <input class="form-control" name="logo" type="file" id="formFile">
                    @error('logo')
                        <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                    @enderror
                </div>  

                <button type='submit' class="btn btn-success">Update Category</button>
            </form>
        </div>
    </div>
@endsection

@include('Style.EditCategories')

<style>
    .sidebar{
        height: auto !important;
    }
</style>