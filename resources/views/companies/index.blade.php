@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">شرکت ها
                        <a href="/companies/create" class="btn btn-sm btn-secondary float-left">  اضافه کردن شرکت جدید</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($companies as $company)
                                <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
