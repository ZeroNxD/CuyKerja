@extends('\Layout\Master2')

@section('title', 'List Job')

@section('Content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="header">
        <button onclick="window.location.href='{{ route('ListJob.create')}}'">Add New Job</button>
    </div>
    <table class="table">
        <tr>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Logo</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Title</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Types</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Categories</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Description</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Location</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Salary Expected</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Requirements</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Responsibilities</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Job Status</th>
            <th style="background-color: #707170; border: 3px solid black; color: white;">Action</th>
        </tr>
        @foreach($alljobs as $jobs)
            <tr style="border: 3px solid black; padding: 20px;">
                <td><img src="{{$jobs->Logo ? asset('storage/' . $jobs->Logo) : asset($jobs->Logo)}}" alt="Logo Job"></td>
                <td>{{$jobs->job_title}}</td>
                <td>{{$jobs->jobtypes->Type_Name}}</td>
                <td>{{$jobs->categories->nama}}</td>
                <td>{{$jobs->job_description}}</td>
                <td>📌 : {{$jobs->location}}</td>
                <td>💵 : Rp.{{$jobs->salary_min}} - Rp.{{$jobs->salary_max}}</td>
                <td>{{$jobs->requirements}}</td>
                <td>{{$jobs->responsibilities}}</td>
                <td>
                    @if($jobs->status == 'Open')
                        <span class="badge bg-success">{{$jobs->status}}</span>
                    @elseif($jobs->status == 'Closed')
                        <span class="badge bg-danger">{{$jobs->status}}</span>
                    @else
                        <span class="badge bg-warning">Not Available</span>
                    @endif
                </td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <form action="" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection

@include('Style.ListJobs')