@extends('layouts.app')
@section('title')
SelfMe - Protfolio
@endsection
@section('content')
<div class="bg-neutral-900 h-screen w-full">
     <nav class=" m-10 bg-emerald-300 px-10 py-5 flex justify-between items-center rounded-full">
        <h1 class="text-3xl font-semibold bg-white p-4 rounded-full text-emerald-300">SM</h1>
        <div class="">
            <a href="" class="px-6 py-4 bg-neutral-900 text-emerald-300 rounded-xl">
                Login / Signup
            </a>
        </div>
     </nav>
     <div class="h-3/4 w-full flex">
        <div class="w-1/2 h-full flex flex-col justify-center pl-20">
            <h1 class="text-7xl text-white font-semibold">Make Your Own</h1>
            <h1 class="text-9xl text-emerald-300 font-bold mt-4">Portfolio<span class="text-white">.</span></h1>
            <div class="mt-10">
                <div class=" bg-neutral-100 w-2/4 px-6 py-4 rounded-xl flex items-center border-2 border-emerald-300">
                    <span class=" text-xl text-neutral-900">https://selfme.in/</span><input type="text" class=" bg-transparent h-full w-full py-2 pr-2 outline-none">
                </div>
            </div>
        </div>
        <div class="w-1/2 bg-neutral-700 h-full">
            <h1>Make Your Own</h1>
            <h1>Portfolio.</h1>
        </div>
     </div>
</div>
@endsection
