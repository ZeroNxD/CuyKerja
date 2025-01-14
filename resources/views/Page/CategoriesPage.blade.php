@extends('.\Layout.Master')

@section('title', 'Categories')

@section('Content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid" style="justify-content: center;">
            <form class="d-flex" role="search" method="GET" action="{{ route('categories.list') }}">
                <input class="form-control me-2" style="width:500px;" name='search' type="search" placeholder="Search A Category" aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <div class="categorylist container">
            <h1>List of Jobs Category</h1>
            <div class="row row-cols-1 row-cols-md-2 g-5">
                @unless(count($allcategories) == 0)
                    @foreach ($allcategories as $category)
                        <div class="col">
                            <div class="row align-items-center h-100" style="border: 2px solid black; border-radius: 10px; overflow: hidden; padding: 20px;">
                                <div class="overlay col-12 col-md-5">
                                    <img src="{{$category->logo ? asset('storage/' . $category->logo) : asset($category->logo)}}" alt="Logo Job" style="border-radius:10px; border:3px solid gray;">
                                </div>
                                <div class="textsection col-12 col-md-7">
                                    <h2>{{$category->nama}}</h2>
                                    <p>""{{$category->descriptions}}""</p>
                                    <button onclick="window.location.href='{{ route('categories.job', ['id' => $category->id, 'from' => 'category']) }}'">Check Detail</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>There's no other Categories of jobs available</p>
                @endunless
            </div>
        </div>        

    </nav>
@endsection

@include('Style.Category')

<style>
    footer {
       position: fixed;
       bottom: 0;
       width: 100%;
   }
</style>