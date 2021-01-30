@extends('layouts.app', ['follows' => $follows])

@section('content')
<div class="lg:grid grid-row-2 grid-cols-12 gap-4">
    <div class="lg:col-start-2 lg:col-span-7 lg:h-full row-span-2 shadow-xl aspect-h-9 aspect-w-16 mb-10">
        <div class="draft h-full">
            <img src="{{ $setting->image_1 }}" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="col-span-3 row-span-1 h-full shadow-xl aspect-h-9 aspect-w-16 mb-10">
        <div class="draft h-full">
            <img src="{{ $setting->image_2 }}" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="col-span-3 row-span-1 h-full shadow-xl aspect-h-9 aspect-w-16 mb-10">
        <div class="draft h-full">
            <img src="{{ $setting->image_3 }}" class="object-cover w-full h-full">
        </div>
    </div>
</div>
<div class="grid lg:grid-cols-12 grid-cols-8">
    <div class="lg:col-start-2 col-span-8">
    <h2 class="text-3xl mt-10 mb-5 ml-10 font-medium underline">ข่าวสาร</h2>
    @foreach ($posts as $post)
        <div class="grid lg:grid-cols-8 grid-cols-3 border-2 shadow-sm p-4 rounded-lg mx-7 my-2"> <!-- news -->
            <div class="col-span-3 draft h-72 rounded-lg">
                <a href="{{ url('news/' . $post->slug) }}">
                    <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="object-cover w-full h-full rounded-lg">
                </a>
            </div>
            <div class="col-span-5 py-2 px-7 relative flex flex-col justify-between">
                <a href="{{ url('news/' . $post->slug) }}">
                    <div>
                        <h4 class="text-2xl font-medium">{{ $post->title }}</h4>
                        <p class="font-light">{!! Str::limit(strip_tags($post->details), 200, '...') !!} </p>
                    </div>
                </a>
                <div class="flex justify-between">
                    <div>
                        <span class="block">{{ date('d M Y', strtotime($post->created_at)) }}</span>
                        หมวดหมู่ :
                        @if(count($post->tags) > 0)
                            @foreach ($post->tags as $tag)
                                @if ($tag->is_published == 1)
                                    <a href="{{ url('tags/' . $tag->slug) }}"
                                        class="font-medium mx-2 inline-block"
                                    >{{ $tag->name }}</a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <a href="{{ url('news/' . $post->slug) }}">
                        <button class="border py-2 block w-32 ml-auto">
                            อ่านต่อ
                        </button>
                    </a>
                </div>
            </div>
        </div> <!-- end news -->
    @endforeach
        <a href="{{ route('posts') }}">
            <button class="border py-2 block px-10 mx-auto mt-4">
                ดูข่าวสารทั้งหมด
            </button>
        </a>
        <br />
    </div>
    <div class="lg:col-span-3 col-span-8">
        <div>
            <h2 class="text-3xl mt-10 font-medium underline mb-2">ช่องทางการติดตาม</h2>
            @foreach ($follows as $follow)
                <div class="flex gap-4 items-center py-4">
                    <img src="{{ $follow->logo_url }}" alt="" class="w-12">
                    <span class="text-lg font-semibold">
                        <a href="{{ $follow->url }}">{{ $follow->contact }}</a>
                    </span>
                </div>
            @endforeach
        </div>
        <div>
            <h2 class="text-3xl mt-10 font-medium underline mb-2">หมวดหมู่</h2>
            @foreach ($tags as $tag)
                <a href="{{ url('tags/' . $tag->slug) }}"
                    class="font-semibold mx-2 inline-block"
                >{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</div>
@endsection
