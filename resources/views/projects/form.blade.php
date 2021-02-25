@csrf
<div class="form-group">
    <label for="title">عنوان المشروع</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$project->title ?? ''}}">
    @error('title')
        <div class="text-danger">
            <small>{{$message}}</small>
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="desc">وصف المشروع</label>
    <textarea  class="form-control" id="desc" name="desc">{{$project->desc ?? ''}}</textarea>
    @error('desc')
        <div class="text-danger">
            <small>{{$message}}</small>
        </div>
    @enderror
</div>