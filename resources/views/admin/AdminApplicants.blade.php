@extends('\Layout.Master3')

@section('content')
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Welcome to the List of Applicants Panel</h1>

    <table class="table">
        @unless(count($allapplicants) == 0)
            <tr>
                <th style="width:30px;">Number</th>
                <th>Applicant Name</th>
                <th>Job Name</th>
                <th>Job Employer</th>
                <th>Job Company</th>
                <th>Applicant CV</th>
                <th>Applicant Status</th>
                <th>Action</th>
            </tr>

            @foreach($allapplicants as $index => $applicant)
                <tr>
                    <td>{{$allapplicants->firstItem() + $index}}</td>
                    <td>{{$applicant->users->name}}</td>
                    <td>{{$applicant->hirejobs->job_title}}</td>
                    <td>{{$applicant->hirejobs->users->name}}</td>
                    <td>{{$applicant->hirejobs->users->companies->Nama_Perusahaan}}</td>
                    <td>
                        <a href="{{ asset('storage/' . $applicant->resume_path) }}" target="_blank">Download CV</a>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        @if($applicant->application_status == 'pending')
                            <span class="badge bg-warning">{{$applicant->application_status}}</span>
                        @elseif($applicant->application_status == 'rejected')
                            <span class="badge bg-danger">{{$applicant->application_status}}</span>
                        @elseif($applicant->application_status == 'accepted')
                            <span class="badge bg-success">{{$applicant->application_status}}</span>
                        @endif
                    </td>
                    <td>
                        <div class="action-buttons">
                            <form action="{{route('Applicant.delete', $applicant->id)}}" method="post" style="display: inline;  vertical-align: middle;">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            
        @else
            <p>There's no job avaiable</p>
        @endunless
    </table>
    <div class="d-flex justify-content-center">
        {{ $allapplicants->links() }} 
    </div>
    
@endsection

<style>
    .table th{
        text-align:center;
    }

    .table td{
        text-align: center;
        vertical-align: middle;
    }

    .table button{
        vertical-align: middle;
        margin-top: 16px;
    }

    .action-buttons {
        display: inline-flex;
        gap: 10px;
        align-items: center; 
    }

    .action-buttons .btn {
        display: inline-block;
        vertical-align: middle;
    }

    .sidebar{
        height: 100vh !important;
    }
</style>