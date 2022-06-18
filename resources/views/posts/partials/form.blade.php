<input type="text" name="title" id="" value="{{ old('title', optional($post ?? null)->title) }}">
@error('title')
    <p>{{ $message }}</p>
@enderror
<input type="text" name="body" id="" value="{{ old('body', optional($post ?? null)->body) }}">
@error('body')
    <p>{{ $message }}</p>
@enderror
