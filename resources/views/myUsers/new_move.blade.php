<html>
<head>
    <title>add film</title>
</head>
<body>
<table>
    <form method="Post" action=" {{route('movie.store') }}" enctype="multipart/form-data">
        @csrf
        <label>Movie</label>
        <input type="text" name="movie" placeholder="new movie">
        <br><br>
        <label>year</label>
        <select name="year">
            @for($j=0;$j<2022;$j++)
                @php $x=0;@endphp
                @if($j>$x) {{$x=$j}} @endif
                <option value='{{$j}}' selected="2021">{{$j}}</option>
            @endfor
        </select>
        <br><br>
        <label>Category</label>
        <select name="category">
            @php  $items=\App\Models\Category::select('id', 'name')->get();         @endphp
            @foreach($items as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br><br>
        <label>Producer</label>
        <input type="text" name="producer" placeholder="producer">
        <br><br>
        <label>Description</label>
        <textarea name="description" minlength="0" maxlength="10000"
                  style="height: 150px; width: 300px" placeholder="description"></textarea>
        <br><br>
        <input type="file" name="image">
        <br><br>
        <input type="submit" value="Add">
    </form>


</table>
</body>
</html>
