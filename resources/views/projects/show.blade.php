@extends('layouts.app')

@section('content')
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع / {{$project->title}}</a>
    </div>


    <div>
        <a href="/projects/{{$project->id}}/edit" class="btn btn-primary px-4" role="button">تعديل المشروع</a>
    </div>
</header>

<section class="row text-right " dir="rtl">
    <div class="col-lg-4">
        <div class="card text-right">
            <div class="card-body" >
                <div class="status">
                    @switch($project->status)
                        @case(1)
                            <span class="badge badge-success">مكتمل</span>
                            @break
                        @case(2)
                            <span class="badge badge-danger">ملغي</span>
                            @break
                        @default
                            <span class="badge badge-warning">قيد الانجاز</span>
                    @endswitch
                    <h5 class="font-weight-bold card-tite">
                        <a href="/projects/{{$project->id}}">{{$project->title}}</a>
                    </h5>

                    <div class="card-text mt-4" >
                        {{$project->desc}}
                    </div>

                </div>
            </div>
            @include('projects.footer')                        

        </div>

        <div class="card mt-5">
            <div class="card-body">
                <h5 class="font-weight-bold">تغيير حالة المشروع</h5>
                <form action="/projects/{{$project->id}}/" method="post">
                    @csrf
                    @method("PATCH")
                    <select name="status" class="custom-select" onchange="this.form.submit()">
                        <option value="0" {{($project->status) == 0 ? 'selected' : ""}}>قيد الانجاز</option>
                        <option value="1" {{($project->status) == 1 ? 'selected' : ""}}>مكتمل</option>
                        <option value="2" {{($project->status) == 2 ? 'selected' : ""}}>ملغي</option>
                    </select>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        {{-- Task --}}
        @foreach ($project->tasks as $task)
        <div class="card d-flex mt-3 p-4 align-items-center flex-row">
            <div class=" m-2 {{$task->done ? 'checked muted' : ''}}">
                {{$task->body}}
            </div>

            <div class="mr-auto ml-2">
                <form action="/projects/{{$project->id}}/tasks/{{$task->id}}"  method="POST">
                    @csrf
                    @method("PATCH")
                    <input class="form-control " name="done" type="checkbox" {{$task->done ? 'checked' : ''}} onchange="this.form.submit()" >
                </form>
            </div>

            <div class="d-flex align-items-center ">
                <form action="/projects/{{$task->project_id}}/tasks/{{$task->id}}" method="Post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="حذف" class="btn btn-danger">
                </form>
            </div>

            
        </div>
        @endforeach
        <div class="card mt-4">
            <form action="/projects/{{$project->id}}/tasks" method="Post" class="d-flex p-3">
                @csrf
                <input type="text" name="body" class="form-control p-2 ml-2 border-0" placeholder="اضف مهمة جديدة">
                <button type="submit" class="btn btn-primary">اضافة</button>
            </form>
        </div>
    </div>
</section>
@endsection