@extends('\Layout\Master2')

@section('title', 'List Job')

@section('Content')
    <h1 style="margin-left: 40px; margin-top: 20px; margin-bottom: 20px; font-weight: bold; text-decoration: underline;">Edit Applicant for {{$Applicant->users->name}}</h1>
    <form action="{{route('Applicant.update', $Applicant->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="status">Application Status</label>
            <select name="application_status" id="status" class="form-control">
                <option value="pending" {{ $Applicant->application_status == 'pending' ? 'selected' : '' }}>pending</option>
                <option value="accepted" {{ $Applicant->application_status == 'accepted' ? 'selected' : '' }}>accepted</option>
                <option value="rejected" {{ $Applicant->application_status == 'rejected' ? 'selected' : '' }}>rejected</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $Applicant->description }}</textarea>
        </div>

        <button type='submit' style="background-color: #4CAF50;  color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease;">Save Your Changes</button>
    </form>
@endsection

@include('Style.NewJob')

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