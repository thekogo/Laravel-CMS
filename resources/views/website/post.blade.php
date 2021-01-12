@extends('layouts.app')

@section('content')

<div class="mt-3">
    <div class="grid grid-cols-12">
        <div class="col-start-3 col-span-8 h-96"> {{-- img box--}}
            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="object-cover w-full h-full rounded-lg">
        </div>
    </div>
    <div class="grid grid-col-12 mt-10 mb-10"> {{-- details --}}
        <div class="col-start-3 col-span-8">
            <h4 class="text-3xl font-medium">{{ $post->title }}</h4>
            <br>
            <div class="text-2xl">{!! $post->details !!}</div>
        </div>
    </div>
</div>
@endsection
