@extends('layouts.app')
@section('title')
Login Page - Selfme
@endsection
@section('content')
<div class="h-full w-full flex md:flex-row flex-col-reverse bg-neutral-800">
    <div class="lg:w-1/2 w-full h-full flex justify-center items-center form-page">
        <form class="flex flex-col lg:w-2/4 w-5/6">
            <h1 class="text-4xl text-center font-bold mb-6 text-emerald-300">Login</h1>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Email</label>
                <input type="email" name="email" class="p-3 mt-1 rounded-md bg-gray-50 outline-none" placeholder="Email Address">
            </div>
            <div class="flex flex-col">
                <label for="" class="text-gray-100">Enter a Password</label>
                <input type="password" class="p-3 mt-1 rounded-md outline-none bg-gray-50"  placeholder="Password">
            </div>
            <div class="flex mt-5 justify-between">
                <div class="">
                    <input type="checkbox" class="mr-2 w-4 h-4" name="" id=""><label for="" class="text-gray-50">Remeber me</label>
                </div>
                <div class="">
                    <a href="" class="text-emerald-200">Forgot password?</a>
                </div>
            </div>
            <button class="py-3 px-5 bg-emerald-300 rounded-lg mt-10">Login</button>
            <div class="flex justify-center">
                <p class="text-neutral-500 text-sm mt-5">&#128519; Create, Customize, and Launch for Free with SelfMe! &#128640; </p>
            </div>
        </form>
    </div>
   <div class="lg:w-1/2 w-full h-full bg-emerald-300 relative form-page info">
        <div class="h-full w-full bg-neutral-950 opacity-35 absolute  -z-10">s</div>
        <div class="flex flex-col justify-center p-10 h-full z-30">
            <h1 class="text-neutral-800 text-4xl pl-1">Hello!</h1>
            <h1 class="md:text-8xl text-7xl z-30 text-white">Make Your Own <br><span class="text-neutral-800 font-semibold">Portfolio<span class="text-8xl text-gray-50">.</span></span></h1>
            <div class="mt-1 w-full pl-2 z-30">
                <p class="mb-10 text-xl text-neutral-700">Empower Your Online Presence for Free!</p>
                <a href="/register" class="py-3 px-8 mt-10 bg-neutral-900 text-emerald-300 rounded-lg">Register</a>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/3 lg:ml-14 block lg:hidden z-40 text-neurtal-900">Scroll down <i class="fa-solid fa-arrow-down-long"></i></div>
    </div>
</div>
@endsection