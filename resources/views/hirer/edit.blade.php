@extends('\Layout.Master2')

@section('title', 'List Job')

@section('Content')

    <h1 style="text-align: center; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">Updating the Job Details</h1>
    <h3 style="text-align: center; font-weight:bold; font-size: 20px;">For better understanding</h3>
    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{ route('ListJob.update', $ListJob->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                @method("PUT")
                <h2 style="font-weight: bold; font-size: 20px;">Current Logo</h2>
                <img src="{{$ListJob->Logo ? asset('storage/' . $ListJob->Logo) : asset($ListJob->Logo)}}" alt="Logo Job" style="width:100%; height:100%; max-width:300px; max-height: 300px;">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Job Logo</label>
                    <input class="form-control" name="logo" type="file" id="formFile">
                    @error('logo')
                        <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                    @enderror
                </div>
                  

                <label for="">Job Title</label>
                <input class="form-control" type="text" name="title" aria-label="" value= "{{ $ListJob->job_title }}">
                @error('title')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Job Types</label>
                <select name="types_id" id="">
                    @foreach($alltypes as $option)
                        <option value="{{ $option->id }}" {{$ListJob->types_id == $option->id ? 'selected' : ''}}>{{ $option->Type_Name}}</option>
                    @endforeach
                </select>

                <label for="">Job Categories</label>
                <select name="categories_id" id="">
                    @foreach($allcategories as $option)
                        <option value="{{ $option->id }}" {{$ListJob->categories_id == $option->id ? 'selected' : ''}}>{{ $option->nama}}</option>
                    @endforeach
                </select>

                <label for="">Job Employer</label>
                <select name="employer_id" id="">
                    @foreach($allusers as $option)
                        <option value="{{ $option->id }}" {{$ListJob->employer_id == $option->id ? 'selected' : ''}}>{{ $option->name}}</option>
                    @endforeach
                </select>

                <label for="">Job Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Enter job description here" aria-label="" >{{ $ListJob->job_description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Location</label>
                <input class="form-control" type="text" name="location" aria-label="" value= "{{ $ListJob->location }}">
                @error('location')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <div class="row">
                    <div class="col-md-6">
                        <label for="">Minimum Salary</label>
                        <input class="form-control" type="number" name="salary_min" aria-label="" value= "{{ $ListJob->salary_min }}">
                        @error('salary_min')
                            <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Maximum Salary</label>
                        <input class="form-control" type="number" name="salary_max" aria-label="" value= "{{ $ListJob->salary_max }}">
                        @error('salary_max')
                            <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                        @enderror
                    </div>
                </div>                

                <label for="">Job Requirements</label>
                <textarea class="form-control" name="requirements" rows="4" placeholder="Enter job requirements here" aria-label="">{{ $ListJob->requirements }}"</textarea>
                @error('requirements')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror


                <label for="">Job Responsibilities</label>
                <textarea class="form-control" name="responsibilities" rows="4" placeholder="Enter job responsibilities here" aria-label="">{{ $ListJob->responsibilities }}</textarea>
                @error('responsibilities')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                 @enderror


                <label for="">Job Status</label>
                <select name="job_status" id="" required>
                    <option value="Open">Open</option>
                    <option value="Closed">Closed</option>
                </select>

                <label for="">Extends Deadline</label>
                <input class="form-control" type="number" name="deadline" aria-label="" value="{{old('deadline')}}">
                @error('deadline')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            
                <button type='submit'>Update The Job's Detail</button>
            </form>
        </div>
    </div>
@endsection

@include('Style.NewJob')
