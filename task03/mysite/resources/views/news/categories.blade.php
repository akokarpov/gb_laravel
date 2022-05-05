<h1>Новостные категории</h1>

@foreach($categories as $key=>$value)

<div>
    <a href="{{ route('categories.newsByCategory', ['id'=> $key]) }}"><h3>{{ $key . '. ' . $value }}</h3></a>
    <hr>
</div>

@endforeach