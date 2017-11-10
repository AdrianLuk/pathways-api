@extends('layouts.main')

@section('content')
    <form class="p-5 mt-5 bg-white" action="/jobs" method="post" novalidate>
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name" class="form-control-label text-uppercase font-weight-bold">Name of Job</label>
          <input name="name" type="text" class="form-control form-control-lg" id="name" placeholder="Name of Job" value="{{Request::old('name')}}">

        </div>

        <div class="form-group">
          <label for="noc_number" class="form-control-label text-uppercase font-weight-bold">NOC Number</label>
          <input name="noc_number" type="number" class="form-control form-control-lg" id="noc_number" placeholder="NOC Number" value="{{Request::old('noc_number')}}">

        </div>



            <div class="form-group d-flex flex-row justify-content-start">
              <label for="requirements" class=" text-uppercase font-weight-bold">Employment Requirements</label>
             <textarea class="ml-3 form-control form-control-lg" name="requirements" id="requirements" rows="8" cols="120" value="{{Request::old('requirements')}}"></textarea>
              </div>
             <div class="form-group">
                 <label for="outlook" class=" text-uppercase font-weight-bold">Job Outlook Rating</label>
                 <input type="text" name="outlook" class="form-control form-control-lg" id="outlook" placeholder="ex. Average" value="{{Request::old('outlook')}}">
            </div>

        <div class="form-group">
          <label for="salary" class="form-control-label text-uppercase font-weight-bold">Average Salary ($)</label>
          <input name="salary" type="text" class="form-control form-control-lg" id="salary" placeholder="50,000" value="{{Request::old('salary')}}">
        </div>

        <p class="lead text-center font-weight-bold">Employment Characteristics</p>
        <div class="row">
        <div class="form-group col-lg-6">
          <label for="characteristics_fulltime" class="form-control-label text-uppercase font-weight-bold">Full Time (%)</label>
          <input name="characteristics_fulltime" type="number" class="form-control form-control-lg" id="characteristics_fulltime" placeholder="" value="{{Request::old('characteristics_fulltime')}}">
        </div>
        <div class="form-group col-lg-6">
          <label for="characteristics_parttime" class="form-control-label text-uppercase font-weight-bold">Part Time (%)</label>
          <input name="characteristics_parttime" type="number" class="form-control form-control-lg" id="characteristics_parttime" placeholder="" value="{{Request::old('characteristics_parttime')}}">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-lg-6">
          <label for="characteristics_self_employed" class="form-control-label text-uppercase font-weight-bold">Self Employed (%)</label>
          <input name="characteristics_self_employed" type="number" class="form-control form-control-lg" id="characteristics_self_employed" placeholder="" value="{{Request::old('characteristics_self_employed')}}">
        </div>
        <div class="form-group col-lg-6">
          <label for="characteristics_employees" class="form-control-label text-uppercase font-weight-bold">Employees (%)</label>
          <input name="characteristics_employees" type="number" class="form-control form-control-lg" id="characteristics_employees" placeholder="" value="{{Request::old('characteristics_employees')}}">
        </div>
        </div>
        <div class="form-group">
          <label class="form-control-label text-uppercase font-weight-bold" for="characteristics_unemployment">Unemployment Rate (%)</label>
          <input type="number" class="form-control form-control-lg" id="characteristics_unemployment" name="characteristics_unemployment" placeholder="" value="{{Request::old('characteristics_unemployment')}}">
        </div>
        <div class="form-group d-flex flex-row justify-content-start">
          <label for="other" class=" text-uppercase font-weight-bold">Other Info</label>
         <textarea class="ml-3 form-control form-control-lg" name="other" id="other" rows="8" cols="120" value="{{Request::old('other')}}"></textarea>
          </div>

        <div class="d-flex flex-row-reverse mt-4">
        <button type="submit" class="py-3 px-5 btn btn-primary btn-lg">SAVE</button></div>
    </form>

@endsection
