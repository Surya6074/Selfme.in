@extends('layouts.app')
@section('title')
SelfMe - Protfolio
@endsection
@section('content')
<div class="bg-neutral-900 h-screen w-full">
     <nav class=" m-10 bg-emerald-300  px-4 lg:px-10 py-4 flex justify-between items-center rounded-full">
        <h1 class="text-3xl font-semibold bg-white p-4 rounded-full text-emerald-300">SM</h1>
        <div class="">
            <a href="" class="px-6 py-4 bg-neutral-900 text-emerald-300 rounded-xl">
                Login / Signup
            </a>
        </div>
     </nav>
     <div class="h-3/4 w-full flex lg:flex-row flex-col">
        <div class="lg:w-1/2 w-full h-full flex flex-col justify-center pl-20">
            <h1 class="lg:text-7xl text-4xl text-white font-semibold">Make Your Own</h1>
            <h1 class="lg:text-9xl text-5xl text-emerald-300 font-bold mt-4">Portfolio<span class="text-white">.</span></h1>
            <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur reiciendis et blanditiis vero, aperiam excepturi iste magnam, dolorum amet officia porro tenetur minima consequatur sit culpa perspiciatis, eaque fugit!</p>
            <div class="mt-10 flex">
                <div class=" bg-neutral-100 lg:w-2/4 w-full px-4 py-2 rounded-xl flex items-center border-2 border-emerald-300">
                    <span class=" text-xl text-neutral-600">https://selfme.in/</span><input type="text" class=" bg-transparent h-full w-full py-2 pr-2 outline-none">
                </div>
                <button class="px-5 py-2 ml-2 bg-emerald-300 text-neutral-900 rounded-lg">Check</button>
            </div>
        </div>
        <div class="lg:w-1/2 w-full h-full flex items-center justify-center pl-20">
            <div class=" w-80 h-5/6 bg-emerald-300 rounded-xl  relative">
                <div class=" absolute flex justify-center items-center -top-5 -right-5 w-80 h-full bg-white rounded-xl">
                    <p>Portfolio Designs</p>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
