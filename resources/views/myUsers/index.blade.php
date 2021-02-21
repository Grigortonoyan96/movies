@extends('layouts.guest')

@section('one')
    @if(!isset($_GET['name']))
    @foreach($items as $item)
        <table>
            <th>
                <a href="movie?name={{$item->name}}">{{$item->name}}</a>
              <img src="{{ Storage::url("public/upload/".$item->image()->get()[0]->link)  }}" width="200px">
            </th>
        </table>
    @endforeach
    <div> {{$items->links() }}</div>
    @endif
    @if(isset($movie))
        <table>
            <img src="{{ Storage::url("public/upload/".$movie->image()->get()[0]->link)  }}" width="500px">
            <tb>name: {{$movie->name}}</tb>
            <br>
            <tb>year: {{$movie->year}}</tb>
            <br>
            <tb>category : {{$movie->category()->get()[0]->name}}</tb>
            <br>
            <tb>producer : {{$movie->producer()->get()[0]->name}}</tb>
            <br>
            <tb>description : {{$movie->description}}</tb>

        </table>

@endif
@endsection
