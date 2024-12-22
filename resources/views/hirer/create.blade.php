@extends('\Layout.Master2')

@section('title', 'List Job')

@section('Content')

    <h1 style="text-align: center; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">Lets Create New Available Job in CuyKerja</h1>
    <h3 style="text-align: center; font-weight:bold; font-size: 20px;">Post a job to find a suitable candidate</h3>

    <div class="container">
        <button class="Back-btn" onclick="window.location.href='{{route('ListJob.index')}}'">Back to Job List</button>
    </div>
    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{ route('ListJob.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="formFile" class="form-label">Job Logo</label>
                    <input class="form-control" name="logo" type="file" id="formFile">
                    @error('logo')
                        <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                    @enderror
                </div>

                <label for="">Job Title</label>
                <input class="form-control" type="text" name="title" aria-label="" value="{{old('title')}}">
                @error('title')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Job Types</label>
                <select name="types_id" id="">
                    @foreach($alltypes as $option)
                        <option value="{{ $option->id }}">{{ $option->Type_Name}}</option>
                    @endforeach
                </select>

                <label for="">Job Categories</label>
                <select name="categories_id" id="">
                    @foreach($allcategories as $option)
                        <option value="{{ $option->id }}">{{ $option->nama}}</option>
                    @endforeach
                </select>

                @auth
                    <label for="">Job Employer</label>
                    <input class="form-control" type="text" value="{{ auth()->user()->name }}" readonly>
                    <input type="hidden" name="employer_id" value="{{ auth()->user()->id }}">
                @endauth
            

                <label for="">Job Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Enter job description here" aria-label="" value="">{{old('description')}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Location</label>
                <input class="form-control" type="text" name="location" aria-label="" value="{{old('location')}}">
                @error('location')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <div class="row">
                    <div class="col-md-6">
                        <label for="">Minimum Salary</label>
                        <input class="form-control" type="number" name="salary_min" aria-label="" value="{{old('salary_min')}}">
                        @error('salary_min')
                            <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Maximum Salary</label>
                        <input class="form-control" type="number" name="salary_max" aria-label="" value="{{old('salary_max')}}">
                        @error('salary_max')
                            <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                        @enderror
                    </div>
                </div>                

                <label for="">Job Requirements</label>
                <textarea class="form-control" name="requirements" rows="4" placeholder="Enter job requirements here" aria-label="" value="">{{old('requirements')}}</textarea>
                @error('requirements')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror


                <label for="">Job Responsibilities</label>
                <textarea class="form-control" name="responsibilities" rows="4" placeholder="Enter job responsibilities here" aria-label="" value="">{{old('responsibilities')}}</textarea>
                @error('responsibilities')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                 @enderror


                <label for="">Job Status</label>
                <select name="job_status" id="" required>
                    <option value="Open">Open</option>
                    <option value="Closed">Closed</option>
                </select>

                <label for="">Days to Deadline</label>
                <input class="form-control" type="number" name="deadline" aria-label="" value="{{old('deadline')}}">
                @error('deadline')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            
                <button type='submit' class="create-job-btn">Create New Jobs</button>
            </form>
        </div>
    </div>
@endsection

@include('Style.NewJob')
