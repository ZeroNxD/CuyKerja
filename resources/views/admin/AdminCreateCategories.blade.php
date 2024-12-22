@extends('\Layout.Master3')

@section('content')
    <button class="button" onclick="window.location.href='{{route('admin.categories')}}'">Back to Categories List</button>
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Create New Categories</h1>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{route('admin.storecategories')}}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="">Categories Name</label>
                <input class="form-control" type="text" name="Categories_Name" aria-label="" value="{{old('Categories_Name')}}">
                @error('title')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Categories Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Enter categories description here" aria-label="" value="">{{old('description')}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <div class="mb-3">
                    <label for="formFile" class="form-label">Categories Logo</label>
                    <input class="form-control" name="logo" type="file" id="formFile">
                    @error('logo')
                        <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                    @enderror
                </div>  

                <button type='submit' class="btn btn-success">Create New Categories</button>
            </form>
        </div>
    </div>
@endsection

@include('Style.CreateCategories')