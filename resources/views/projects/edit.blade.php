@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-8">
                <form action="/projects/{{$project->id}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="name">نام پروژه</label>
                        <input value="{{$project->name}}" type="text" class="form-control" name="name" id="name"
                               aria-describedby="helpId" placeholder="نام پروژه">
                    </div>
                    <div class="form-group">
                        <label for=""> معرفی پروژه</label>
                        <textarea class="form-control" name="description" id="description"
                                  rows="3">{{$project->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> بروزرسانی</button>
                    </div>
                </form>
                <p>{{$project->describtion}}</p>
            </div>
        </div>
    </div>
@endsection
