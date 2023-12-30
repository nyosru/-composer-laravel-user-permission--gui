<tr class="@if($loop->index%2==0) bg-neutral-100 @else bg-neutral-200 @endif">
    <td class="p-2">
        {{ $d->id }}
    </td>
    <td class="p-2">
        {{ $d->name }}
    </td>
    <td class="p-2">
        {{ $d->email }}
    </td>

    <td class="p-2">
        <Span class="bg-yellow-300 px-2 py-1">
        {{ $d->role->name ?? '-' }}
        </Span>
    </td>

    <td class="p-2">
        <form action="{{ route('phpcatcom.permission.user.update',['user'=>$d->id]) }}" method="POST">

            {{ method_field('PUT') }}
            @method('PUT')

{{--            <input type="hidden" name="user_id" value="{{$d->id}}"/>--}}
            {{--    кто--}}
            {{--    <select>--}}
            {{--        <option></option>--}}
            {{--    </select>--}}
{{--            роль--}}
            <nobr>
            <select name="role_id" class="inline-block p-1 bg-white border-1 border-gray-400">
                <option value="">Выберите роль</option>
                @foreach($data_roles as $dr)
                    @if( !empty($dr->name) )
                        <option value="{{ $dr->id }}">
{{--                            {{ $dr->id }} / --}}
                            {{ $dr->name }}
                        </option>
                    @endif
                @endforeach
{{--                <option></option>--}}
            </select>
            <button class="px-2 py-1 bg-info-500 rounded" type="submit">Назначить</button>
            </nobr>
        </form>
    </td>
</tr>
<tr>
    <td colspan="4">
        $d: {{$d}}
    </td>
</tr>
