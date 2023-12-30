@extends('phpcatcom/permission/gui::layouts.app')

@section('content')

<a class="px-2 py-1 bg-blue-300" href="{{ route('phpcatcom.permission.places.refresh') }}">Просканировать заново</a>
<br/>
<small>(будут добавлены те роуты которых не хватает в списке)</small>

{{--Data: {{$data}}--}}

    <table class="table-auto">

        <thead style="position: sticky; top: 0px;">
        <tr class="bg-white">
            <th class="p-2">Имя роута</th>
            <th class="p-2 bg-gray-200">куда он ведёт</th>
{{--            <th>метод</th>--}}
            <th class="p-2">домен</th>
@foreach($data_roles as $dr )
    <th class="p-2 @if($loop->index%2==0) bg-gray-200 @endif ">{{$dr->name}}</th>
@endforeach
        </tr>
        </thead>

        <tbody>
        @foreach($data as $p)
            @include('phpcatcom/permission/gui::places-item')
        @endforeach
        </tbody>
    </table>

    {{--    place: {{ $places }}--}}

@endsection
