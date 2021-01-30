@extends('layouts.admin')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="bg-navy pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Setting</h3>
        </div>
    </div>
    <div class="bg-white m-5 rounded-lg shadow-lg px-10 py-2">
        <h4 class="text-3xl font-medium mt-2">ตั้งค่ารูปปก</h4>
        @if (Session::has('message'))
            <div class="text-lg text-green-600 font-semibold bg-green-100 px-7 py-2 rounded-md">
                {{ Session('message')  }}
            </div>
        @endif
        <br>
        <div class="lg:grid grid-row-2 grid-cols-12 gap-4">
            <div class="lg:col-start-2 lg:col-span-7 lg:h-full row-span-2 shadow-xl aspect-h-9 aspect-w-16 mb-10">
                <div class="draft h-full flex items-center justify-center">
                    <span class="text-9xl font-semibold">1</span>
                </div>
            </div>
            <div class="col-span-3 row-span-1 h-full shadow-xl aspect-h-9 aspect-w-16 mb-10">
                <div class="draft h-full flex items-center justify-center">
                    <span class="text-9xl font-semibold">2</span>
                </div>
            </div>
            <div class="col-span-3 row-span-1 h-full shadow-xl aspect-h-9 aspect-w-16 mb-10">
                <div class="draft h-full flex items-center justify-center">
                    <span class="text-9xl font-semibold">3</span>
                </div>
            </div>
        </div>
        <br>
        {!! Form::open(['route' => ['setting.update', 1], 'method' => 'put', 'files' => true]) !!}
        <div class="">
            {!! Form::label('image_1', 'ภาพปก 1 : ', ['class' => 'text-xl']) !!}
            {!! Form::file('image_1', null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md']) !!}
            @if ($errors->has('image_1'))
                <span class="text-red-600 font-semibold">{{ $errors->first('image_1') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('image_2', 'ภาพปก 2 : ', ['class' => 'text-xl']) !!}
            {!! Form::file('image_2', null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md']) !!}
            @if ($errors->has('image_2'))
                <span class="text-red-600 font-semibold">{{ $errors->first('image_2') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('image_3', 'ภาพปก 3 : ', ['class' => 'text-xl']) !!}
            {!! Form::file('image_3', null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md']) !!}
            @if ($errors->has('image_3'))
                <span class="text-red-600 font-semibold">{{ $errors->first('image_3') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('conclusion', 'คำทิ้งทาย :', ['class' => 'text-xl']) !!}
            {!! Form::textarea('conclusion', $setting->conclusion, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => '...']) !!}
            @if ($errors->has('conclusion'))
                <span class="text-red-600 font-semibold">{{ $errors->first('conclusion') }}</span>
            @endif
        </div>
        <br>

        {!! Form::submit('Update', ['class' => 'px-7 py-2 mb-2 bg-yellow-300 font-semibold rounded-md']) !!}

        {!! Form::close() !!}
    </div>
@endsection

@section('javascript')

@endsection
