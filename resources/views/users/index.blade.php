@extends('layouts.template')
@section('content')

    <form action="{{route('query.index')}}" method="GET">
        <select name="user_id" id="user_id">
            <option value="">Seleccionar</option>
            @foreach ($names as $key => $value)
                <option value="{{$key}}" {{$user_id==$key ? 'selected':''}}>{{$value}}</option>
            @endforeach
        </select>
        <select name="category" id="category">
            <option value="">Seleccionar</option>
            @foreach ($categories as $value)
                <option value="{{$value->category}}" {{$category==$value->category ? 'selected':''}}>{{$value->category}}</option>
            @endforeach
        </select>
        <button type="submit">Filtrar</button>    
    </form>

    <table class="table-fixed">
        @foreach ($users as $user)
            <tr>
            @foreach ($user as $item)
                <td class="w-1/6">{{$item}}</td>
            @endforeach  
            </tr>
        @endforeach    
    </table>

    {{ $users->links() }}

    <ul class="inline-grid grid-cols-5 gap-x-4">
        @foreach ($totales as $key => $value)
            <li>{{$key}}: {{$value}}</li>    
        @endforeach
    </ul>    
@endsection