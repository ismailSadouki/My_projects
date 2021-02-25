@extends('layouts.app')
@section('title','تعديل المشروع')
@section('content')

<div class="row justify-content-center text-right">
    <div class="col-8">
        <div class="card p-5">
            <h3 class="text-center font-weight-bold">
                تعديل المشروع
            </h3>

            <form action="/projects/{{$project->id}}" dir="rtl" method="POST">
                @method("PATCH")
            @include('projects.form')

            <div class="form-group d-flex flex-row-reverse">
                    <button class="btn btn-primary" type="submit">تعديل</button>
                    <a href="/projects" class="btn btn-light">الغاء</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection