@extends('layouts.app')
@section('content')




    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">{{$project->name}}</h1>
                <p class="lead text-muted">{{$project->description}}</p>
                <p>
                    <a href="/projects/{{$project->id}}/edit" class="btn btn-primary my-2">ویرایش پروژه</a>
                    <a href="/projects/create" class="btn btn-secondary my-2">اضافه کردن پروژه جدید</a>

                </p>
            </div>
        </section>

        @if ($project->user_id==Auth::user()->id)
            <a href="#" class="btn btn-danger my-2" id="delete" onclick="deleteItem()"> حذف پروژه</a>
            <form action="{{route('projects.destroy',[$project->id])}}" id="deleteForm" method="post">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field()}}
            </form>
        @endif


        <div class="album py-5 bg-light">
            <div class="container">

                {{--<div class="row">
                  @foreach($project->projects as $project)
                    <div class="col-md-4">
                      <div class="card mb-4 box-shadow">
                        --}}{{--<img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                             alt="Card image cap">--}}{{--
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
                </div>--}}
            </div>
        </div>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('comment.store')}}" method="post">
                    {{csrf_field()}}
                    {{--
                    <div class="form-group">
                        <label for="name">نام پروژه</label>
                        <input type="text" class="form-control" name="name" id="name"
                               aria-describedby="helpId" placeholder="نام پروژه">
                    </div>--}}

                    <input type="hidden" name="commentable_type" value="projects">
                    <input type="hidden" name="commentable_id" value="{{$project->id}}">

                    <div class="form-group">
                        <label for=""> کامنت </label>
                        <textarea class="form-control" name="body" id="description"
                                  rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for=""> لینک کار</label>
                        <textarea class="form-control" name="url" id="description"
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
<script>
    function deleteItem() {
        const result = confirm('میخاهید این پروژه را حذف کنید؟');
        if (result) {
            event.preventDefault();
            document.getElementById('deleteForm').submit();
        }
    }
</script>
