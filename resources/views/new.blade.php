@extends('layouts.app1')
@section('title')
New updates - Selfme
@endsection
@section('content')
<body class="flex">
    @include('components.sidebar')
    <section class="w-full h-full ml-4 overflow-y-scroll p-4">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
           <div class="flex itemes-center">
                <button class="md:hidden block"  onclick="OpenSlidebar()"><i class="bx bx-menu-alt-left text-white text-4xl mr-5" id="sidebaricon"></i></button>
                <h1 class="text-xl text-white">New Updates</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <a href="{{route('profileui')}}" class="text-4xl ">{{strtoupper(substr(auth()->user()->username, 0, 1))}}</a>
            </div>
        </div>
        <div class="">
            @foreach ($news as $new)
            <div class="mt-5 p-4 bg-neutral-900 rounded-xl w-full">
                <div class="">
                    <p class="text-emerald-300 font-semibold">{{$new->name}}</p>
                </div>
                <p class="text-md text-gray-100 my-2">{{$new->content}}</p>
                <div class="mt-2">
                    <p class="text-end text-neutral-600 text-sm"> last updated {{$new->created_at}}</p>
                </div>
            </div>
            @endforeach

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
    .tabcontent{
        display: none;
    }
    #Home{
        display: block;
    }
    input[type=radio] {
        accent-color: aquamarine;
        height: 20px;
        width: 20px;
    }
    input[type=checkbox] {
        accent-color: aquamarine;
        height: 20px;
        width: 20px;
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
