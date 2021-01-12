@extends('layouts.app')

@section('content')
<div class="grid grid-cols-12 mt-7">
    <div class="col-start-3 col-span-3 h-80 draft">

    </div>
    <div class=" col-start-6 col-span-6 px-10 py-5">
        <h2 class="text-4xl font-semibold">ชื่อ - สกุล</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam perspiciatis maiores nam, est dignissimos! Tempore maiores eos porro consectetur nobis dolorum magnam mollitia, voluptatum, veniam animi tenetur numquam error!</p>
    </div>
    <div class="col-start-3 col-span-9">
        <h2 class="text-3xl mt-10 font-medium underline mb-2">ประวัติการศึกษา</h2>
        <div class="container mx-auto w-full">
            <div class="relative wraph-full">
              <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
              <!-- right timeline -->
              <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                        </div>
                    <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
              </div>

              <!-- left timeline -->
              <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                    </div>
                    <div class="order-1 bg-red-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-white text-xl">Lorem Ipsum</h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
              </div>

              <!-- right timeline -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                    </div>
                    <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <!-- left timeline -->
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
                        </div>
                        <div class="order-1 bg-red-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                            <h3 class="mb-3 font-bold text-white text-xl">Lorem Ipsum</h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                </div>
            </div>
        </div> {{-- end education --}}
        <hr />
        <h2 class="text-3xl mt-10 font-medium underline mb-2">ประวัติการทำงาน</h2>
        <div class="container mx-auto w-full">
            <div class="relative wraph-full">
                <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
                <!-- right timeline -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                    </div>
                    <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <!-- left timeline -->
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                    </div>
                    <div class="order-1 bg-red-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-white text-xl">Lorem Ipsum</h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div> {{-- end work --}}
    </div>
</div>

@endsection
