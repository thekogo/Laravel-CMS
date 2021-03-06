@extends('layouts.admin')

@section('content')
<div class="bg-navy pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Home</h3>
    </div>
</div>
<div class="bg-white m-5 rounded-lg shadow-lg px-10 py-2">
    <h4 class="text-3xl font-medium mt-2">แก้ไข หมวดหมู่</h4>
    <br>
    {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'put']) !!}

    <div class="">
        {!! Form::label('Name : ', null, ['class' => 'text-xl']) !!}
        {!! Form::text('name', $tag->name, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => 'Name']) !!}
        @if ($errors->has('name'))
            <span class="text-red-600 font-semibold">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <br>

    <div class="">
        {!! Form::label('Publish : ', null, ['class' => 'text-xl']) !!}
        {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], isset($tag->is_published) ? $tag->is_published : null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md']) !!}
        @if ($errors->has('publish'))
            <span class="text-red-600 font-semibold">{{ $errors->first('publish') }}</span>
        @endif
    </div>
    <br>
    {!! Form::submit('Update', ['class' => 'px-7 py-2 mb-2 bg-yellow-300 font-semibold rounded-md']) !!}

    {!! Form::close() !!}
</div>
@endsection
