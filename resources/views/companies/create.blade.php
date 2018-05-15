@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-8">
                <form action="/companies" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">نام شرکت</label>
                        <input type="text" class="form-control" name="name" id="name"
                               aria-describedby="helpId" placeholder="نام شرکت">
                    </div>
                    <div class="form-group">
                        <label for=""> معرفی شرکت</label>
                        <textarea class="form-control" name="description" id="description"
                                  rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> اضافه کردن شرکت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
