@extends('layouts.app')
@section('title')
Login Page - Selfme
@endsection
@section('content')
<div class="h-full w-full flex bg-neutral-800">
    <div class="w-1/2 h-full flex justify-center items-center">
        <form class="flex flex-col w-2/4">
            <h1 class="text-4xl text-center font-bold mb-6 text-emerald-300">Register</h1>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Username</label>
                <input type="text" name="email" class="p-3 mt-1 rounded-md bg-gray-50 outline-none" placeholder="username">
            </div>
             <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Email</label>
                <input type="email" name="email" class="p-3 mt-1 rounded-md bg-gray-50 outline-none" placeholder="Email Address">
            </div>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Enter a Password</label>
                <input type="password" class="p-3 mt-1 rounded-md outline-none bg-gray-50"  placeholder="Password">
            </div>
            <div class="flex flex-col mb-5">
                <label for="" class="text-gray-100">Confirm Password</label>
                <input type="password_confirmation" class="p-3 mt-1 rounded-md outline-none bg-gray-50"  placeholder="confirm Password">
            </div>
            <div class="flex mt-5 justify-between">
                <div class="">
                    <input type="checkbox" class="mr-2 w-4 h-4" name="" id=""><label for="" class="text-gray-50">I agree the <a href="" class="text-emerald-300">Terms and condition</a></label>
                </div>
            </div>
            <button class="py-3 px-5 bg-emerald-300 rounded-lg mt-10">Register  </button>
            <div class="flex justify-center">
                <p class="text-neutral-500 text-sm mt-5">&#128519; Create, Customize, and Launch for Free with SelfMe! &#128640; </p>
            </div>
        </form>
    </div>
    <div class="w-1/2 h-full bg-emerald-300 relative info">

        <div class="flex flex-col justify-center p-10 h-full">
            <h1 class="text-neutral-100 text-4xl pl-1">Hello!</h1>
            <h1 class="text-neutral-800 text-8xl">Make Your Own <br><span class="text-neutral-800">Portfolio<span class="text-8xl text-gray-50">.</span></span></h1>
            <div class="mt-1 w-full pl-2">
                <p class="mb-10 text-xl text-neutral-700">Empower Your Online Presence for Free!</p>
                <a href="/login" class="py-3 px-8 mt-10 bg-neutral-900 text-emerald-300 rounded-lg">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
