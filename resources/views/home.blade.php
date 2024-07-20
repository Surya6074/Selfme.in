@extends('layouts.app1')
@section('title')
Home Page - SelfMe
@endsection
@section('content')
<body class="flex">
    @include('components.sidebar')
    <section class="w-full min-h-min overflow-y-scroll p-4">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
            <div class="flex itemes-center">
                <button class="md:hidden block"  onclick="OpenSlidebar()"><i class="bx bx-menu-alt-left text-white text-4xl mr-5" id="sidebaricon"></i></button>
                <h1 class="text-xl text-white">Home</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <h1 class="text-3xl ">S</h1>
            </div>
        </div>
        <div class="w-full bg-neutral-900 p-3 mt-7 rounded-xl">
            <div class="flex justify-between mx-5 items-center">
                <label for="" class="text-emerald-300">Profile Visbility</label>
                <select name="" id="" class="ml-2 w-96 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none ">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                </select>
            </div>
        </div>
        <div class="w-full h-3/4 bg-neutral-900 p-3 mt-7 rounded-xl">
            {{-- <div class="flex justify-center items-center h-full w-full">
                <a href="/data" class=" px-5 py-3 bg-emerald-300 text-neutral-900 font-semibold rounded-lg">Create a Portfolio</a>
            </div> --}}
            <div class="flex justify-center items-center h-full w-full">
                <div class=" h-full flex flex-col justify-center items-center px-10">
                    <div class="">
                        <label for="" class=" mb-4 text-emerald-300 font-semibold">Your Template</label>
                    </div>
                    <div class=" relative">
                        <img src="{{asset('assets/temp.png')}}" class="mt-4" alt="">
                        <a href="/template" class=" absolute bottom-1 right-1 p-2 px-4 bg-emerald-300 text-neutral-900 font-semibold rounded-lg"><i class='bx bxs-edit'></i></a>
                    </div>
                </div>
                <div class="h-full flex-1 px-5 p-5">
                    <div class=" h-full w-full">
                        <h1 class="text-emerald-300 text-center">Information </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<style>
        body{
        width: 100vw;
        background-color: #050406;
    }
    section{
        overflow-x: scroll;
    }
    aside{
        height: 100vh;
        position: fixed;
    }
    ::-webkit-scrollbar {
        width: 5px;
    }
    .test{
        height: 550px;
    }
    /* Track
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    } */

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #555;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: aquamarine;
    }

    .side-menu:hover::after {
        content: "";
        position: absolute;
        left: 0;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        background-color: aquamarine;
    }

    .active::after {
        content: "";
        position: absolute;
        left: 0;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        background-color: aquamarine;
    }

</style>
@endsection
