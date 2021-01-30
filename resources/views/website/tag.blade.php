@extends('layouts.app', ['follows' => $follows])

@section('content')
<h4 class="text-3xl font-medium text-center pt-7 pb-5 underline">{{ $tag->name }}</h4>
<div class="grid lg:grid-cols-12 md:grid-cols-8 grid-cols-4 gap-10">
    @foreach ($posts as $post)
        <div class="col-span-4 md:mx-0 mx-5 border p-5 rounded-lg shadow-md">
            <div class="h-80">
                <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="py-4 px-1">
                <a href="{{ url('news/'. $post->slug) }}">
                    <h4 class="text-3xl font-medium">{{ $post->title }}</h4>
                    <p>{!! Str::limit(strip_tags($post->details), 200, '...') !!}</p>
                </a>
            </div>
        </div>
    @endforeach
</div>
{{ $posts->links() }}
<br />
@endsection
