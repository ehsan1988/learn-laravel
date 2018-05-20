@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-8">
        <form action="{{route('projects.store')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="name">نام پروژه</label>
            <input type="text" class="form-control" name="name" id="name"
                   aria-describedby="helpId" placeholder="نام پروژه">
          </div>
          <input type="hidden" name="company_id" value="{{$company_id}}">
          <div class="form-group">
            <label for=""> معرفی پروژه</label>
            <textarea class="form-control" name="description" id="description"
                      rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="days"> تعداد روز</label>

          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit"> اضافه کردن پروژه</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
