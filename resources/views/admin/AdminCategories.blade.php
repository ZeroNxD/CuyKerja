@extends('\Layout.Master3')

@section('content')
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Welcome to the List of Categories Panel</h1>

    <div class="header">
        <button onclick="window.location.href='{{route('admin.createcategories')}}'">Add New Categories</button>
    </div>

    <table class="table">
        @unless(count($allcategories) == 0)
            <tr>
                <th style="width: 50px;">Number</th>
                <th style="width: 100px;">Categories Image</th>
                <th style="width: 150px;">Nama</th>
                <th >Description</th>
                <th style="width: 100px;">Total Jobs</th>
                <th>Action</th>
            </tr>

            @foreach($allcategories as $index => $category)
                <tr>
                    <td>{{$allcategories->firstItem() + $index}}</td>
                    <td>
                        <img src="{{$category->logo ? asset('storage/' . $category->logo) : asset($category->logo)}}" alt="Logo Job" style="max-width: 150px; max-height: 200px;">
                    </td>
                    <td>{{$category->nama}}</td>
                    <td style="text-align: left !important;">{{$category->descriptions}}</td>
                    <td>{{count($category->hirejobs)}}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{route('admin.editcategories', $category->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{route('admin.deletecategories', $category->id)}}" method="post" style="display: inline;  vertical-align: middle;">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <p>No Categories were Added!</p>
        @endunless
    </table>
    <div class="d-flex justify-content-center">
        {{ $allcategories->links() }} 
    </div>
@endsection

@include('Style.AdminCategories')