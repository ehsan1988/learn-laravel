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
                    @if ($companies == null)
                        <input type="hidden" name="company_id" value="{{$company_id}}">
                    @endif

                    <div class="form-group">
                        <label for=""> معرفی پروژه</label>
                        <textarea class="form-control" name="description" id="description"
                                  rows="3"></textarea>
                    </div>
                    @if ($companies !=null)
                        <div class="form-group">
                            <label for="">شرکت ها</label>
                            <select name="company_id" id="" class="form-control">
                                @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif


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
