@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">پروژه ها
                        <a href="/projects/create" class="btn btn-sm btn-secondary float-left">  اضافه کردن پروژه جدید</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($projects as $project)
                                <li class="list-group-item"><a href="/projects/{{$project->id}}">{{$project->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
