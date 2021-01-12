@extends('layouts.app')

@section('content')
<h4 class="text-3xl font-medium text-center pt-7 pb-5 underline">อัลบัมรูปภาพ</h4>
<div class="grid lg:grid-cols-12 md:grid-cols-8 grid-cols-4 gap-10">
    @foreach ($galleries as $gallery)
        <div class="col-span-4 md:mx-0 mx-5 border p-5 rounded-lg shadow-md">
            <div class="h-80">
                <img src="{{ $gallery->image_url }}" alt="{{ $gallery->name }}" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="py-4 px-1">
                <h4 class="text-3xl font-medium">{{ $gallery->name }}</h4>
            </div>
        </div>
    @endforeach
</div>
<br />
{{ $galleries->links() }}
<br />
@endsection
