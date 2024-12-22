@extends('\Layout\Master2')

@section('title', 'List Job')

@section('Content')
    <h1 style="margin-left: 40px; margin-top: 20px; margin-bottom: 20px; font-weight: bold; text-decoration: underline;">Applicant List</h1>

    @if($allapplicants->isEmpty())
        <p style="margin-left: 40px; margin-top: 20px; margin-bottom: 20px; font-weight: bold; text-decoration: underline;">No applicants found for your jobs.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Job Name</th>
                    <th style="text-align: center">Applicant Name</th>
                    <th style="text-align: center">Applicant Resume</th>
                    <th style="text-align: center">Application Status</th>
                    <th style="text-align: center">Application Description</th>
                    <th style="text-align: center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allapplicants as $index => $items)
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">{{ $index + 1 }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $items->hirejobs->job_title }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $items->users->name }}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            @if($items->resume_path)
                                <a href="{{ asset('storage/' . $items->resume_path) }}" target="_blank">Download CV</a>
                            @else
                                <p>No Resume/CV Avaiable</p>
                            @endif
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            @if($items->application_status == 'pending')
                                <span class="badge bg-warning">{{$items->application_status}}</span>
                            @elseif($items->application_status == 'rejected')
                                <span class="badge bg-danger">{{$items->application_status}}</span>
                            @elseif($items->application_status == 'accepted')
                                <span class="badge bg-success">{{$items->application_status}}</span>
                            @endif
                        </td>
                        <td style="vertical-align: middle; max-width: 400px; text-align: center;">{{ $items->description }}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="{{route('Applicant.edit', $items->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }

</style>