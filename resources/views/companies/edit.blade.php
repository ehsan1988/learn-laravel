@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-8">
                <form action="/companies/{{$company->id}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="name">نام شرکت</label>
                        <input value="{{$company->name}}" type="text" class="form-control" name="name" id="name"
                               aria-describedby="helpId" placeholder="نام شرکت">
                    </div>
                    <div class="form-group">
                        <label for=""> معرفی شرکت</label>
                        <textarea class="form-control" name="description" id="description"
                                  rows="3">{{$company->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> بروزرسانی</button>
                    </div>
                </form>
                <p>{{$company->describtion}}</p>
            </div>
        </div>
    </div>
@endsection
