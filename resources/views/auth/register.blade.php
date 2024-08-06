@extends('layouts.app')
@section('title')
Register Page - Selfme
@endsection
@section('content')
<div class="h-full w-full flex md:flex-row flex-col-reverse bg-neutral-800">
    <div class="lg:w-1/2 w-full h-screen flex justify-center items-center form-page ">
        <form action="{{route('Register')}}" method="POST" class="flex flex-col lg:w-2/4 w-5/6">
            @csrf
            <h1 class="text-4xl text-center font-bold mb-6 text-emerald-300">Register</h1>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Username</label>
                <input type="text" name="username" id="username" class="p-3 mt-1 rounded-md bg-neutral-900 outline-none text-neutral-300" placeholder="username" value="{{old('username')}}">
                <div id="err"></div>
                @error('username')
                    <p class="text-red-500 mb-0">{{ $message }}</p>
                @enderror
            </div>
             <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Email</label>
                <input type="email" name="email" class="p-3 mt-1 rounded-md bg-neutral-900 outline-none text-neutral-300" placeholder="Email Address" value="{{old('email')}}">
                 @error('email')
                    <p class="text-red-500 mb-0">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Password</label>
                <input type="password" name="password" class="p-3 mt-1 rounded-md outline-none bg-neutral-900 text-neutral-300"  placeholder="Password" value="{{old('password')}}">
                 @error('password')
                    <p class="text-red-500 mb-0">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Confirm Password</label>
                <input type="password" name="password_confirmation" class="p-3 mt-1 rounded-md outline-none bg-neutral-900 text-neutral-300"  placeholder="confirm Password" value="{{old('password_confirmation')}}">
                 @error('password_confirmation')
                    <p class="text-red-500 mb-0">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex mt-5 justify-between">
                <div class="">
                    <input type="checkbox" class="mr-2 w-4 h-4 bg-neutral-900" name="agree" id=""><label for="" class="text-gray-50">I agree the <a href="" class="text-emerald-300">Terms and condition</a></label>
                </div>
            </div>
            <button class="py-3 px-5 bg-emerald-300 rounded-lg mt-10">Register  </button>
            <div class="flex justify-center">
                <p class="text-neutral-500 text-sm mt-5">&#128519; Create, Customize, and Launch for Free with SelfMe! &#128640; </p>
            </div>
        </form>
    </div>
    <div class="lg:w-1/2 w-full h-screen bg-emerald-300 relative info form-page">
        <div class="h-full w-full bg-neutral-950 opacity-35 absolute -z-10">s</div>
        <img src="{{asset('public/assets/3c8c0a7ffd3e0dd67f1b8749a7ac2861-removebg-preview.png')}}" class=" absolute h-full w-full opacity-15"/>
        <div class="flex flex-col justify-center p-10 h-full z-30">
            <h1 class="text-neutral-800 sm:text-4xl text-2xl pl-1">Hello!</h1>
<<<<<<< HEAD
            <h1 class="md:text-8xl sm:text-7xl text-4xl z-30 text-white">Make Your Own <br><span class="text-neutral-800 font-semibold">Portfolio<span class="text-8xl text-gray-50">.</span></span></h1>
=======
            <h1 class="md:text-8xl text-7xl  z-30 text-white">Make Your Own <br><span class="text-neutral-800 font-semibold">Portfolio<span class="text-8xl text-gray-50">.</span></span></h1>
>>>>>>> master
            <div class="mt-1 w-full pl-2 z-30">
                <p class="mb-10 sm:text-xl text-lg text-neutral-700">Empower Your Online Presence for Free!</p>
                <a href="/login" class="py-3 px-8 mt-10 bg-neutral-900 text-emerald-300 rounded-lg">Login</a>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/3 lg:ml-14 block lg:hidden z-40 text-neurtal-900">Scroll down <i class="fa-solid fa-arrow-down-long"></i></div>

    </div>
</div>
<script>
    $('#username').on('keyup',function(){
        var data={
            name:$('#username').val(),
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/username',
            method:'POST',
            data:data,
            success:function(res){
                var err = document.getElementById('err');
                if(res.data>0){
                    err.innerHTML  =`<p class="text-sm text-red-400">username was already taken</p>`;
                }else{
                    err.innerHTML  =`<p></p>`;
                }
            }
        });
    });
</script>
@endsection
