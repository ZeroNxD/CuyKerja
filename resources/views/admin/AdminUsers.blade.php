@extends('\Layout.Master3')

@section('content')
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Welcome to the List of User Panel</h1>

    <table class="table">
        <h2 style="font-weight: bold; margin-bottom: 20px;">Hirer User's Table</h2>
        @unless(count($allhirers) == 0)
            <tr>
                <th style="width:100px;">Number</th>
                <th>Hirer's Name</th>
                <th>Hirer's Email</th>
                <th>Hirer's Company</th>
                <th>Action</th>
            </tr>
            @foreach($allhirers as $index => $users)
            <tr>
                <td>{{$allhirers->firstItem() + $index}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->companies->Nama_Perusahaan}}</td>
                <td>
                    <form action="{{route('AdminUsers.delete', $users->id)}}" method="post"  class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                    </form>
                </td>
            </tr> 
            @endforeach
        @else
            <p>There's no Hirer!</p>
        @endunless
    </table>

    <div class="d-flex justify-content-center">
        {{ $allhirers->links() }} 
    </div>

    <table class="table">
        <h2 style="font-weight: bold; margin-bottom: 20px; margin-top:20px;">JobSeeker User's Table</h2>
        <tr>
            <th style="width:100px;">Number</th>
            <th>JobSeeker's Name</th>
            <th>JobSeeker's Email</th>
            <th>Total Applicant</th>
            <th>Action</th>
        </tr>
        @unless(count($alljobseekers) == 0)
            @foreach($alljobseekers as $index => $users)
            <tr>
                <td>{{$alljobseekers->firstItem() + $index}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{count($users->applications)}}</td>
                <td>
                    <form action="{{route('AdminUsers.delete', $users->id)}}" method="post" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                    </form>
                </td>
            </tr> 
            @endforeach
        @else
            <p>There's no JobSeeker!</p>
        @endunless
    </table>

    <div class="d-flex justify-content-center">
        {{ $alljobseekers->links() }} 
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
        margin-top: 10px;
    }

    .pagination a {
        margin: 0 5px;
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }

    .pagination a:hover {
        background-color: #707070;
    }

</style>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault(); 
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>