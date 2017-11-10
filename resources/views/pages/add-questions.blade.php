@extends('layouts.main')

@section('content')
    <form class="p-5 mt-5 bg-white" action="/questions" method="post" novalidate>
        {{ csrf_field() }}

        <div class="form-group">
          <label for="question" class="form-control-label text-uppercase font-weight-bold">Question</label>
          <input name="question" type="text" class="form-control form-control-lg" id="question" placeholder="Question" value="{{Request::old('question')}}">
        
        </div>



        <div class="d-flex flex-row-reverse mt-4">
        <button type="submit" class="py-3 px-5 btn btn-primary btn-lg">SAVE</button></div>
    </form>
@endsection
