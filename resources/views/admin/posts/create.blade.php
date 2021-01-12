@extends('layouts.admin')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="bg-navy pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">ข่าวสาร</h3>
        </div>
    </div>
    <div class="bg-white m-5 rounded-lg shadow-lg px-10 py-2">
        <h4 class="text-3xl font-medium mt-2">เพิ่ม ข่าวสาร</h4>
        <br>
        {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
        <div class="">
            {!! Form::label('thumbnail', 'ภาพปก', ['class' => 'text-xl']) !!}
            {!! Form::file('thumbnail', null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => 'Thumbnail']) !!}
            @if ($errors->has('thumbnail'))
                <span class="text-red-600 font-semibold">{{ $errors->first('thumbnail') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('title', 'หัวข้อ : ', ['class' => 'text-xl']) !!}
            {!! Form::text('title', null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => 'หัวข้อ']) !!}
            @if ($errors->has('title'))
                <span class="text-red-600 font-semibold">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('details', 'รายละเอียด : ', ['class' => 'text-xl mb-2']) !!}
            {!! Form::textarea('details', null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => 'รายละเอียด']) !!}
            @if ($errors->has('details'))
                <span class="text-red-600 font-semibold">{{ $errors->first('details') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('หมวดหมู่ : ', null, ['class' => 'text-xl']) !!}
            {!! Form::select('tag_id[]', $tags, null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'id'=> 'tag_id', 'multiple' => 'multiple']) !!}
            @if ($errors->has('tag_id'))
                <span class="text-red-600 font-semibold">{{ $errors->first('tag_id') }}</span>
            @endif
        </div>
        <br>

        <div class="">
            {!! Form::label('Publish : ', null, ['class' => 'text-xl']) !!}
            {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md']) !!}
            @if ($errors->has('publish'))
                <span class="text-red-600 font-semibold">{{ $errors->first('publish') }}</span>
            @endif
        </div>
        <br>
        {!! Form::submit('Create', ['class' => 'px-7 py-2 mb-2 bg-green-300 font-semibold rounded-md']) !!}

        {!! Form::close() !!}
    </div>
@endsection

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('details', {
            filebrowserUploadUrl: "{{route('uploadImage', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        $(document).ready(function() {
            $('#tag_id').select2({
                placeholder: 'กรุณาเลือก หมวดหมู่'
            });
        });

    </script>
@endsection
