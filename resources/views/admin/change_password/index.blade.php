@extends('layouts.admin')

@section('content')
<div class="bg-navy pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Change Password</h3>
    </div>
</div>
<div class="bg-white m-5 rounded-lg shadow-lg px-10 py-2">
    <h4 class="text-3xl font-medium mt-2">แก้ไข รหัสผ่าน</h4>
    <br>
    {!! Form::open(['route' => ['change_password.update', 1], 'method' => 'put']) !!}

    <div class="">
        {!! Form::label('Password : ', null, ['class' => 'text-xl']) !!}
        {!! Form::password('password', ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => 'Password']) !!}
        @if ($errors->has('password'))
            <span class="text-red-600 font-semibold">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <br>

    <div class="">
        {!! Form::label('Comfirm Password : ', null, ['class' => 'text-xl']) !!}
        {!! Form::password('confirm_password', ['class' => 'block border w-full mt-2 px-3 py-2 rounded-md', 'placeholder' => 'Confirm Password']) !!}
        @if ($errors->has('confirm_password'))
            <span class="text-red-600 font-semibold">{{ $errors->first('confirm_password') }}</span>
        @endif
    </div>
    <br>

    {!! Form::submit('Update', ['class' => 'px-7 py-2 mb-2 bg-yellow-300 font-semibold rounded-md']) !!}

    {!! Form::close() !!}
</div>
@endsection
