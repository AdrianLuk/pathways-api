@extends('layouts.main')

@section('content')


    <table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>Name of job</th>
            <th>NOC Number </th>
            <th>Employment Requirements</th>
            <th>Job Outlook Rating</th>
            <th>Average Salary</th>
            <th>Relevant Organizations</th>
            <th>Employment Characteristics</th>
            <th>Other info</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>


    @foreach ($jobs as $job)
        <tr>
        <td>{{ $job->name }}</td>
        <td>{{ $job->province }}</td>
        <td>{{$job->telephone}}</td>
        <td>{{$job->postal}}</td>
        <td>{{$job->salary}}</td>
        <td>{{ $job->created_at->format('F d, Y')}}</td>
        <td>
            <ul class="list-inline list-unstyled">
            <li class="list-inline-item"><a href="/jobs/{{$job->id}}/edit" class="btn btn-link">Update</a></li>

            <li class="list-inline-item"><form action="/jobs/{{$job->id}}" method="POST">

            {!! csrf_field() !!}

            <input type="hidden" name="_method" value="DELETE">

            <button type="submit" class="btn btn-link">Delete</button>
        </form></li>
            </ul>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
