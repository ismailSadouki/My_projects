@extends('layouts.app')

@section('content')
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع</a>
    </div>


    <div>
        <a href="/projects/create" class="btn btn-primary px-4" role="button">مشروع جديد</a>
    </div>
</header>
    
<section dir="rtl">
    <div class="row" >
    @forelse ($projects as $project)
        <div class="col-4 mb-4 " dir="rtl">
            <div class="card text-right" style="height:230px;">
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
                            {{Str::limit($project->desc,150)}}
                        </div>

                    </div>
                </div>
                @include('projects.footer')                        

            </div>
        </div>
    @empty
        <div class="m-auto align-content-center text-center">
            <p>لوحة العمل خالية من المشاريع</p>
            <div class="mt-5">
                <a href="/projects/create" class="btn btn-primary btn-lg d-inline-flex align-items-center">انشئ مشروع جديد الان</a>
            </div>
        </div>
    @endforelse
</div>
</section>
@endsection