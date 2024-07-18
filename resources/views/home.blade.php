@extends('layouts.app1')
@section('title')
Home Page - SelfMe
@endsection
@section('content')
<body class="flex">
    @include('components.sidebar')
    <section class="w-full min-h-min md:ml-80 overflow-y-scroll p-4">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
            <div class="flex">
                <button class="md:hidden block"><i class="fa-solid fa-bars text-white text-2xl mr-3"></i></button>
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
