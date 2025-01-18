@extends('.\Layout.Master')

@section('title', 'History Applicant')

@section('Content')
    <div class="ApplicationHistory">
        @unless(count($allapplicants) == 0)
            <table class="table">
                <tr>
                    <th style="text-align: center">No. </th>
                    <th style="text-align: center">Job Name</th>
                    <th style="text-align: center">Job Company</th>
                    <th style="text-align: center">Job Employer</th>
                    <th style="text-align: center">Job Types</th>
                    <th style="text-align: center">Application Status</th>
                    <th style="text-align: center">Application Description</th>
                </tr>
                <tr>
                    @foreach($allapplicants as $index => $items)
                        <td style="text-align: center">{{$index + 1}}</td>
                        <td style="text-align: center">{{$items->hirejobs->job_title}}</td>
                        <td style="text-align: center">{{$items->hirejobs->users->companies->Nama_Perusahaan}}</td>
                        <td style="text-align: center">{{$items->hirejobs->users->name}}</td>
                        <td style="text-align: center">{{$items->hirejobs->jobtypes->Type_Name}}</td>
                        <td style="text-align: center">
                            @if($items->application_status == 'pending')
                                <span class="badge bg-warning">{{$items->application_status}}</span>
                            @elseif($items->application_status == 'rejected')
                                <span class="badge bg-danger">{{$items->application_status}}</span>
                            @elseif($items->application_status == 'accepted')
                                <span class="badge bg-success">{{$items->application_status}}</span>
                            @endif
                        </td>
                        <td>{{$items->description}}</td>
                    </tr>
                    @endforeach
                
            </table>
        @else
            <h1>There's no Applicant that you've made</h1>
        @endunless
    </div>
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