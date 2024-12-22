@extends('\Layout.Master3')

@section('content')
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Welcome to the List of Jobs Panel</h1>

    <table class="table">
        @unless(count($alljobs) == 0)
            <tr>
                <th style="width:30px;">Number</th>
                <th>Job Logo</th>
                <th style="width: 150px;">Job Name</th>
                <th style="width: 150px;">Job Employer</th>
                <th style="width: 200px;">Job Company</th>
                <th>Job Types</th>
                <th style="width: 150px;">Job Categories</th>
                <th style="width: 300px;">Action</th>
            </tr>

            @foreach($alljobs as $index => $jobs)
                <tr>
                    <td>{{$alljobs->firstItem() + $index}}</td>
                    <td><img src="{{$jobs->Logo ? asset('storage/' . $jobs->Logo) : asset($jobs->Logo)}}" alt="Logo Job" style="max-width: 150px; max-height: 200px;"></td>
                    <td>{{$jobs->job_title}}</td>
                    <td>{{$jobs->users->name}}</td>
                    <td>{{$jobs->users->companies->Nama_Perusahaan}}</td>
                    <td>{{$jobs->jobtypes->Type_Name}}</td>
                    <td>{{$jobs->categories->nama}}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{route('admin.detailjobs', $jobs->id)}}" class="btn btn-success">Check Detail</a>
                            <form action="{{route('ListJob.destroy', $jobs->id)}}" method="post" style="display: inline;  vertical-align: middle;">
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
        {{ $alljobs->links() }} 
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
</style>