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
        @if ($check_portfolio==1)
            <div class="w-full bg-neutral-900 p-3 mt-7 rounded-xl relative">
                <div class=" absolute right-6 top-10 text-[12px] text-neutral-500">Server status : <span class=" text-green-400">200K</span></div>
                <div class="flex lg:flex-row flex-col justify-center items-center h-full">
                    <div class=" h-full flex flex-col justify-center px-10 my-6">
                        <div class="">
                            <label for="" class=" mb-4 text-emerald-300 w-full font-normal ">Your Template</label>
                        </div>
                        <div class="flex mt-4">
                            <div class=" relative flex justify-center">
                                <img src="{{asset('assets/temp.png')}}" class=" h-96" class="mt-4" alt="">
                                <a href="/template" class=" absolute bottom-1 right-1 p-2 px-4 bg-emerald-300 lg:block hidden text-neutral-900 font-semibold rounded-lg"><i class='bx bxs-edit'></i></a>
                            </div>
                            <div class="lg:hidden block ml-8 ">
                                <div class="h-full w-48 flex justify-center items-center flex-col">
                                    <h1 class="text-emerald-300 text-2xl mb-2">Desgin 1</h1>
                                    <p class="text-neutral-200 text-center text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum laboriosam ab modi suscipit, temporibu.</p>
                                    <button class="bg-emerald-300 py-2 px-4 rounded-md mt-10 text-neural-950">Change Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-full w-full flex-1 px-5 p-5">
                        <div class=" h-full w-full">
                            <h1 class="text-emerald-300 text-lg text-start">Hosting Info</h1>
                            <div class="flex lg:flex-row flex-col justify-around mt-6">
                                <div class="p-5 my-4 bg-neutral-950 mx-4 flex-1 text-neutral-400 rounded-lg">
                                    <h2 class="text-2xl text-emerald-300 mb-2">Total Days</h2>
                                    @php
                                        $date=explode(' ',$Portfolio->created_at);
                                        $date1 =new DateTime($date[0]);
                                        $date2 =new DateTime(date('Y-m-d'));
                                        $interval = $date1->diff($date2);
                                        $daysDifference = $interval->days;
                                    @endphp
                                    <h2 class="text-sm">{{$daysDifference}}</h2>
                                </div>
                                <div class="p-5 my-4 bg-neutral-950 mx-4 flex-1 text-neutral-400 rounded-lg">
                                    <h2 class="text-2xl text-emerald-300 mb-2">Portfolio Status</h2>
                                    <h2 class="text-sm">{{$Portfolio->visibility=='public'?'Online':'Offline'}}</h2>
                                </div>
                                <div class="p-5 my-4 bg-neutral-950 mx-4 flex-1 text-neutral-400 rounded-lg">
                                    <h2 class="text-2xl text-emerald-300 mb-2">Host date</h2>
                                    <h2 class="text-sm">{{$date[0]}}</h2>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center justify-between">
                                    <h1 class="text-emerald-300 ml-4">Latesh News</h1>
                                    <a href="/new" class=" p-2 px-4 text-neutral-600 text-sm rounded-lg">More</a>
                                </div>
                                <div class="p-4 bg-neutral-950 rounded-xl w-full">
                                    <div class="">
                                        <p class="text-emerald-300 font-semibold">{{$newupdate->name}}</p>
                                    </div>
                                    <p class="text-md text-gray-100 text-sm my-2">{{$newupdate->content}}</p>
                                    <div class="mt-2">
                                        <p class="text-end text-neutral-600 text-sm"> last updated {{$newupdate->created_at}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="w-full h-3/4 bg-neutral-900 p-3 mt-7 rounded-xl relative">
                <div class="flex justify-center items-center h-full w-full">
                    <a href="/data" class=" px-5 py-3 bg-emerald-300 text-neutral-900 font-semibold rounded-lg">Create a Portfolio</a>
                </div>
            </div>
        @endif

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
