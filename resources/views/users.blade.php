@extends('phpcatcom/permission_gui::layouts.app')

@section('content')

    data: {{ $data }}

    <Br/>
    <Br/>

    <form action="">
        <label>
            НАзвание
            <br/>
            <input type="text" name="name"
            class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </label>
        <label>
            ОПисание
            <br/>
            <textarea
                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    name="description"></textarea>
        </label>
        <br/>
        <br/>
        <button
                class="bg-green-300 px-2 py-1 rounded"
                type="submit">Добавить</button>
    </form>

@endsection
