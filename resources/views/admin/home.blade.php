@extends('layouts.admin')

@section('content')
<div class="bg-navy pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">หน้าหลัก</h3>
    </div>
</div>
<div class="bg-white m-5 rounded-lg shadow-lg px-5 py-2">
    <h4 class="text-3xl font-medium">ข่าวสาร</h4>
    <br>
    <table class="border-collapse w-full">
        <thead>
            <tr>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ห้อข้อ</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">สร้างเมื่อ</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">สถานะ</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    {{ Str::limit($post->title, 50, '...') }}
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    {{ date('d M Y', strtotime($post->created_at)) }}
                </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                        @if ($post->is_published == '1')
                            <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">
                                publish
                            </span>
                        @else
                            <span class="rounded bg-yellow-400 py-1 px-3 text-xs font-bold">
                                draft
                            </span>
                        @endif
                    </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                    {!! Form::open(['route' => ['posts.destroy', $post->id] , 'method'=> 'delete', 'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'text-blue-400 hover:text-blue-600 underline pl-6 bg-transparent cursor-pointer']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <br>
    <hr>
    <br>
    <h4 class="text-3xl font-medium">หมวดหมู่</h4>
    <br>
    <table class="border-collapse w-full">
        <thead>
            <tr>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ห้อข้อ</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">สร้างเมื่อ</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">สถานะ</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    {{ Str::limit($tag->name, 50, '...') }}
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    {{ date('d M Y', strtotime($tag->created_at)) }}
                </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    @if ($tag->is_published == '1')
                        <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">
                            publish
                        </span>
                        @else
                        <span class="rounded bg-yellow-400 py-1 px-3 text-xs font-bold">
                            draft
                        </span>
                        @endif
                  </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="{{ route('tags.edit', $tag->id) }}" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                    {!! Form::open(['route' => ['tags.destroy', $tag->id] , 'method'=> 'delete', 'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'text-blue-400 hover:text-blue-600 underline pl-6 bg-transparent cursor-pointer']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
