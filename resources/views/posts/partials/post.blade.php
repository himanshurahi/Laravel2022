@if ($loop->even)
    <h1 style="color:grey;"> {{ $key }} - {{ $post['title'] }}</h1>
@else
    <h1> {{ $key }} - {{ $post['title'] }}</h1>
@endif
