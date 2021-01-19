@extends('layouts.app')

@section('content')
<div class="grid grid-cols-12 mt-7 gap-y-5">
    <div class="md:col-start-3 md:col-span-3 col-span-12 h-96">
        <img src="{{ asset('img/team_profile1.png') }}" alt="profile image" class="md:object-cover md:w-full md:h-full h-96 mx-auto block rounded-lg">
    </div>
    <div class="md:col-start-6 md:col-span-6 col-span-12 px-10 ">
        <h2 class="text-4xl font-semibold">ปิยะพงศ์ เมฆจันทร์</h2>
        <br>
        <div>
            <h4 class="text-2xl font-medium underline">ประวัติการศึกษา</h4>
            <ul class="list-disc list-inside text-xl">
                <li>มัธยมศึกษาตอนต้น โรงเรียนวัดโพธิ์ทอง</li>
            </ul>
        </div>
        <br>
        <div>
            <h4 class="text-2xl font-medium underline">ประวัติการทำงาน</h4>
            <ul class="list-disc list-inside text-xl">
                <li>บริษัท สคริปต์บอร์ด</li>
                <li>บริษัทเอี่ยมเจริญ</li>
                <li>วินมอเตอร์ไซค์รับจ้าง</li>
                <li>พนักงานร้านทองไล้เซ็งเฮง</li>
                <li>ผู้อำนวยการศูนย์ประสานงานพรรคก้าวไกลประจำเขต 25</li>
            </ul>
        </div>
    </div>
    <hr class="col-span-10 col-start-2">
    <div class="md:col-start-3 md:col-span-3 col-span-12 h-96">
        <img src="{{ asset('img/team_profile2.png') }}" alt="profile image" class="md:object-cover md:w-full md:h-full h-96 mx-auto block rounded-lg">
    </div>
    <div class="md:col-start-6 md:col-span-6 col-span-12 px-10 ">
        <h2 class="text-4xl font-semibold">ธิติกรณ์ ชาวบ้านเกาะ</h2>
        <br>
        <div>
            <h4 class="text-2xl font-medium underline">ประวัติการศึกษา</h4>
            <ul class="list-disc list-inside text-xl">
                <li>มัธยมศึกษาตอนต้น โรงเรียนวัดหัวกระบือ</li>
                <li>มัธยมศึกษาตอนปลาย กศน. ปราณบุรี</li>
            </ul>
        </div>
        <br>
        <div>
            <h4 class="text-2xl font-medium underline">ประวัติการทำงาน</h4>
            <ul class="list-disc list-inside text-xl">
                <li>เจ้าของธุรกิจ ธิติกรการ์เด้น จำหน่ายต้นไม้ และจัดสวน</li>
                <li>อดีตผู้สมัครสมาชิกสภาผู้แทนราษฎร  เขตบางขุนเทียน พรรคภราดรภาพ</li>
                <li>เจ้าของธุรกิจเศรษฐีน้อยหมูสวรรค์</li>
                <li>หัวหน้าฝ่ายประสานงานชุมชน ศูนย์ประสานงานพรรคก้าวไกล เขต25 กรุงเทพมหานคร</li>
                <li>รองผู้อำนวยการศูนย์ประสานงานพรรคก้าวไกล เขต25 กรุงเทพมหานคร</li>
            </ul>
        </div>
    </div>
    <hr class="col-span-10 col-start-2">
    <div class="md:col-start-3 md:col-span-3 col-span-12 h-96">
        <img src="{{ asset('img/team_profile3.png') }}" alt="profile image" class="md:object-cover md:w-full md:h-full h-96 mx-auto block rounded-lg">
    </div>
    <div class="md:col-start-6 md:col-span-6 col-span-12 px-10 ">
        <h2 class="text-4xl font-semibold">ณัฐพงษ์ สาโรจน์</h2>
        <br>
        <div>
            <h4 class="text-2xl font-medium underline">ประวัติการศึกษา</h4>
            <ul class="list-disc list-inside text-xl">
                <li>มัธยมศึกษาตอนต้น โรงเรียนคีรีรัฐวิทยาคม</li>
                <li>มัธยมศึกษาตอนปลาย โรงเรียนกิ่งอำเภอวิภาวดี</li>
                <li>ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.) โรงเรียนสุราษฎร์เทคโนโลยีพาณิชยการ</li>
            </ul>
        </div>
        <br>
        <div>
            <h4 class="text-2xl font-medium underline">ประวัติการทำงาน</h4>
            <ul class="list-disc list-inside text-xl">
                <li>กรรมการผู้จัดการห้างหุ้นส่วน NS กรุ๊ป อินเตอร์เนชั่นแนล</li>
                <li>ธุรกิจส่วนตัว</li>
                <li>ผู้อำนวยการพรรคทางเลือกใหม่จังหวัดสุราษฎ์ธานี</li>
                <li>ผู้ช่วยสมาชิกสภาผู้แทนราษฎร</li>
            </ul>
        </div>
    </div>
    <div class="col-span-12"></div>
</div>
@endsection
