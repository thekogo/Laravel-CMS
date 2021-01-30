@extends('layouts.app', ['follows' => $follows])

@section('content')
<div class="grid grid-cols-12 mt-7">
    <div class="md:col-start-3 md:col-span-3 col-span-12 h-96 draft">
        <img src="{{ asset('img/profile.jpg') }}" alt="profile image" class="object-cover w-full h-full rounded-lg">
    </div>
    <div class="md:col-start-6 md:col-span-6 col-span-12 px-10 py-5">
        <h2 class="text-4xl font-semibold">ณัฐชา บุญไชยอินสวัสดิ์</h2>
        <p>เกิดวัน พุธ ที่ 11 เมษายน 2533 ที่ โรงพยาบาลศิริราช บางกากน้อย กรุงเทพมหานคร</p>
    </div>
    <div class="lg:col-start-3 col-start-2 col-span-10 lg:col-span-9">
        <h2 class="text-3xl mt-10 font-medium underline mb-2">ประวัติการศึกษา</h2>
        <div class="container mx-auto w-full">
            <div class="relative wraph-full">
              <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-3 lg:left-1/2"></div>
              <!-- right timeline -->
              <div class="mb-8 flex lg:justify-between gap-10 lg:gap-0 items-center w-full right-timeline">
                    <div class="order-1 w-5/12 lg:block hidden"></div>
                        <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                        </div>
                    <div class="order-1 bg-orange rounded-lg shadow-xl lg:w-5/12 w-full px-6 py-4 flex justify-between">
                        <div>
                            <h3 class="mb-3 font-bold text-gray-800 text-2xl">ประถมศึกษา</h3>
                            <p class="leading-snug tracking-wide text-gray-900 text-opacity-100 text-xl">โรงเรียนวัดพระมหาธาตุนครศรีธรรมราช</p>
                        </div>
                        <img src="{{ asset('img/school1.png') }}" alt="school" class="h-40">
                    </div>
              </div>

              <!-- left timeline -->
              <div class="mb-8 flex lg:justify-between gap-10 lg:gap-0 lg:flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12 lg:block hidden"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                    </div>
                    <div class="order-1 bg-orange rounded-lg shadow-xl lg:w-5/12 w-full px-6 py-4 flex justify-between">
                        <div>
                            <h3 class="mb-3 font-bold text-gray-800 text-2xl">มัธยมศึกษาตอนต้น</h3>
                            <p class="leading-snug tracking-wide text-gray-900 text-opacity-100 text-xl">โรงเรียนปัญญาวรคุณ บางแค กรุงเทพมหานคร</p>
                        </div>
                        <img src="{{ asset('img/school2.png') }}" alt="school" class="h-40 block">
                    </div>
              </div>

              <!-- right timeline -->
                <div class="mb-8 flex lg:justify-between gap-10 lg:gap-0 items-center w-full right-timeline">
                    <div class="order-1 w-5/12 lg:block hidden"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                    </div>
                    <div class="order-1 bg-orange rounded-lg shadow-xl lg:w-5/12 w-full px-6 py-4 flex justify-between">
                        <div>
                            <h3 class="mb-3 font-bold text-gray-800 text-2xl">ประกาศนียบัตรวิชาชีพ (ปวช.)</h3>
                            <p class="leading-snug tracking-wide text-gray-900 text-opacity-100 text-xl">โรงเรียนดทคโนโลยีสยาม บางกอกใหญ่ กรงเทพมหานคร</p>
                        </div>
                        <img src="{{ asset('img/school3.png') }}" alt="school" class="h-40">
                    </div>
                </div>

                <!-- left timeline -->
                <div class="mb-8 flex lg:justify-between gap-10 lg:gap-0 lg:flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12 lg:block hidden"></div>
                        <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
                        </div>
                        <div class="order-1 bg-orange rounded-lg shadow-xl lg:w-5/12 w-full px-6 py-4 flex justify-between">
                            <div>
                                <h3 class="mb-3 font-bold text-gray-800 text-2xl">ประกาศนียบัตรวิชาชีพขั้นสูง (ปวส.)</h3>
                                <p class="leading-snug tracking-wide text-gray-900 text-opacity-100 text-xl">โรงเรียนปัญญาวรคุณ บางแค กรุงเทพมหานคร</p>
                            </div>
                            <img src="{{ asset('img/school3.png') }}" alt="school" class="h-40">
                        </div>
                </div>
            </div>
        </div> {{-- end education --}}
        <hr />
        <h2 class="text-3xl mt-10 font-medium underline mb-2">ประวัติการทำงาน</h2>
        <div class="container mx-auto w-full">
            <div class="relative wraph-full">
                <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-3 lg:left-1/2"></div>
                <!-- right timeline -->
                <div class="mb-8 flex lg:justify-between gap-10 lg:gap-0 items-center w-full right-timeline">
                    <div class="order-1 w-5/12 lg:block hidden"></div>
                    <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                    </div>
                    <div class="order-1 bg-orange rounded-lg shadow-xl lg:w-5/12 w-full px-6 py-4 flex justify-between">
                        <div>
                            <h3 class="mb-3 font-bold text-gray-800 text-2xl">บริษัท ไทยเซ็มคอนจำกัด</h3>
                            <p class="leading-snug tracking-wide text-gray-900 text-opacity-100 text-xl">พนักงานเขียนแบบไฟฟ้า</p>
                        </div>
                        <img src="{{ asset('img/work1.png') }}" alt="school" class="h-40">
                    </div>
                </div>

                <!-- left timeline -->
                <div class="mb-8 flex lg:justify-between gap-10 lg:gap-0 lg:flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12 lg:block hidden"></div>
                        <div class="z-20 flex items-center order-1 bg-orange shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
                        </div>
                        <div class="order-1 bg-orange rounded-lg shadow-xl lg:w-5/12 w-full px-6 py-4 flex justify-between">
                            <div>
                                <h3 class="mb-3 font-bold text-gray-800 text-2xl">บริษัท ซีม ดีเวลอบเมนท์(ประเทศไทย) จำกัด</h3>
                                <p class="leading-snug tracking-wide text-gray-900 text-opacity-100 text-xl">ก่อตั้งบริษัทรับเหงางานระบบไฟฟ้า ทั้งในและต่างประเทศ</p>
                            </div>
                            <img src="{{ asset('img/work2.jpg') }}" alt="school" class="h-40">
                        </div>
                </div>
            </div>
        </div> {{-- end work --}}
    </div>
</div>

@endsection
