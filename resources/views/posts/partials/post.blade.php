<h1 style="color:grey;"> {{ $key }} - {{ $post->title}}</h1>
<div>
    <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</div>
