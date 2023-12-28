@extends('phpcatcom/permission_gui::layouts.app')

@section('content')

<button class="px-2 py-1 bg-blue-300">Просканировать заново</button>
<br/>
<small>(будут добавлены те роуты которых не хватает в списке)</small>

    <table class="table-auto">

        <thead>
        <tr>
            <th>Имя роута</th>
            <th>куда он ведёт</th>
        </tr>
        </thead>

        <tbody>
        @foreach($places as $p)
            <tr>
                <td>{{$p['name']}}</td>
                <td>{{$p['action']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{--    place: {{ $places }}--}}

@endsection
