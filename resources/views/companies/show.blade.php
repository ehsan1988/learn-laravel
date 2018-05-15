@extends('layouts.app')
@section('content')


    {{--<header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="mr-2">
                        <path
                            d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>--}}

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
