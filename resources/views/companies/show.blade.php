@extends('layouts.app')
@section('content')
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">{{$company->name}}</h1>
                <p class="lead text-muted">{{$company->description}}<p>
                    <a href="/companies/{{$company->id}}/edit" class="btn btn-primary my-2">ویرایش شرکت</a>
                    <a href="#" class="btn btn-secondary my-2">اضافه کردن یک کاربر</a>
                    <a href="#" class="btn btn-danger my-2" id="delete" onclick="deleteItem()"> حذف شرکت</a>
                </p>
            </div>
        </section>
        <form action="/companies/{{$company->id}}" id="deleteForm" method="post">
            <input type="hidden" name="_method" value="delete">
            {{csrf_field()}}
        </form>
        <div class="album py-5 bg-light">
            <div class="container">
                <a href="/projects/create/{{$company->id}}" class="btn btn-sm btn-outline-primary">اضافه
                    کردن پروژه</a>
                <br>
                <div class="row">

                    @foreach($company->projects as $project)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                {{--<img class="card-img-top"
                                     data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                     alt="Card image cap">--}}
                                <div class="card-header">{{$project->name}}</div>
                                <div class="card-body">
                                    <p class="card-text">{{$project->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-secondary"
                                               href="/projects/{{$project->id}}">View</a>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
<script>
    function deleteItem() {
        const result = confirm('میخاهید این شرکت را حذف کنید؟');
        if (result) {
            event.preventDefault();
            document.getElementById('deleteForm').submit();
        }
    }
</script>
