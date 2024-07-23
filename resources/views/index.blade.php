@extends('layouts.app')
@section('title')
SelfMe - Protfolio
@endsection
@section('content')
<div class="bg-neutral-900 h-screen w-full">
    <div class="lg:p-10 p-5 w-full">
        <nav class="w-full flex justify-between h-24 mt-4 bg-emerald-300 rounded-3xl">
           <div class="w-1/3 relative">
                <h1 class=" rounded-full absolute -top-4 -left-4 flex justify-center items-center h-32 w-32 bg-white text-5xl">Sm</h1>
           </div>
           <div class="flex-1 h-full">
               <ul class="flex h-full items-center justify-around">
                   <li><a href="" class="text-xl font-semibold">Home</a></li>
                   <li><a href="" class="text-xl font-semibold">About</a></li>
                   <li><a href="" class="text-xl font-semibold">Templates</a></li>
                   <li><a href="" class="px-5 py-2 bg-white text-xl text-emerald-300 font-semibold rounded-lg">Login</a></li>
               </ul>
           </div>
        </nav>
    </div>
     <div class="h-3/4 w-full flex lg:flex-row flex-col">
        <div class="lg:w-1/2 lg:pl-20 md:p-10 p-5 w-full h-full flex justify-center items-center">
            <div class="flex flex-col justify-center ">
                <h1 class="lg:text-8xl text-4xl text-white font-semibold">erwqrer</h1>
                <h1 class="lg:text-9xl text-5xl text-emerald-300 font-bold mt-4">test<span class="text-white">.</span></h1>
                <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur reiciendis et blanditiis vero, aperiam excepturi iste magnam, dolorum amet officia porro tenetur minima consequatur sit culpa perspiciatis, eaque fugit!</p>
                <div class="mt-10 flex">
                    <div class=" bg-neutral-100 lg:w-2/4 w-5/6 px-4 py-2 rounded-xl flex items-center border-2 border-emerald-300">
                        <span class=" text-xl text-neutral-600">https://selfme.in/</span><input type="text" class=" bg-transparent h-full w-full py-2 pr-2 outline-none">
                    </div>
                    <button class="px-5 py-2 ml-2 bg-emerald-300 text-neutral-900 rounded-lg">Check</button>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 w-full h-full flex items-center justify-center pl-20">
            <div class=" w-80 h-5/6 bg-emerald-300 rounded-xl  relative">
                <div class=" absolute flex justify-center items-center -top-5 -right-5 w-80 h-full bg-white rounded-xl">
                    <p>fasdf</p>
                </div>
            </div>
        </div>
     </div>
</div>
<div class="bg-neutral-900 h-screen w-full">

</div>
@endsection
