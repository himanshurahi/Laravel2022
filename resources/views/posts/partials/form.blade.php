<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('title', optional($post ?? null)->title)}}" required>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Body</label>
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" required>
        {{ old('body', optional($post ?? null)->body)}}
    </textarea>
</div>

{{-- <input type="text" name="title" id="" value="{{ old('title', optional($post ?? null)->title) }}">
@error('title')
    <p>{{ $message }}</p>
@enderror
<input type="text" name="body" id=""  }}">
@error('body')
    <p>{{ $message }}</p>
@enderror --}}
