@extends('layouts.app')
@section('content')

<body class="flex">
    <aside class="rounded-lg text-white w-72 p-5 md:flex hidden flex-col justify-between m-4">
        <h1 class="text-start text-3xl text-emerald-300 font-semibold">SUrya</h1>
        <ul class="mt-14 flex-1">
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 text-emerald-300 active rounded-lg side-menu"><i class="fa-solid fa-house-fire w-1/4 "></i>Home</a>
            </li>
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 rounded-lg side-menu"><i class="fa-solid fa-cube w-1/4"></i>Design</a>
            </li>
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 rounded-lg side-menu"><i class="fa-solid fa-database w-1/4"></i>Datas</a>
            </li>
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 rounded-lg side-menu"><i class="fa-solid fa-wand-magic-sparkles w-1/4"></i></i>New</a>
            </li>
        </ul>
        <div class=" p-4">
            <a href="" class="w-full flex items-center justify-center text-xl px-4 py-4 bg-neutral-900 rounded-lg text-emerald-300">Logout<i class="fa-solid fa-arrow-right-from-bracket ml-5"></i></a>
        </div>
    </aside>
    <section class="w-full min-h-min md:ml-80 overflow-y-scroll p-4">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
            <div class="flex">
                <button class="md:hidden block"><i class="fa-solid fa-bars text-white text-2xl mr-3"></i></button>
                <h1 class="text-xl text-white">Data</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <h1 class="text-3xl ">S</h1>
            </div>
        </div>
        <div class="h-full w-full bg-neutral-900 p-3 mt-7 rounded-xl">
            <div class="h-20 flex justify-center items-center mt-10 text-white">
                <div class="flex mx-5 items-center justify-center flex-col text-emerald-300">
                    <i class="fa-solid fa-house text-xl mb-1"></i>
                    <h1 class="text-sm">Home</h1>
                </div>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <div class="flex mx-5 items-center justify-center flex-col text-emerald-300">
                    <i class="fa-regular fa-address-card text-xl mb-1"></i>
                    <h1 class="text-sm">About Me</h1>
                </div>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <div class="flex mx-5 items-center justify-center flex-col text-emerald-300">
                    <i class="fa-solid fa-pager text-xl mb-1 "></i>
                    <h1 class="text-sm">Exp</h1>
                </div>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <div class="flex mx-5 items-center justify-center flex-col text-emerald-300">
                    <i class="fa-solid fa-id-badge text-xl mb-1"></i>
                    <h1 class="text-sm">Contact</h1>
                </div>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <div class="flex mx-5 items-center justify-center flex-col">
                    <i class="fa-solid fa-wifi text-xl mb-1"></i>
                    <h1 class="text-sm">temaplate</h1>
                </div>
            </div>
            <div class="w-full flex flex-col">
                <div class="flex flex-col m-5">
                    <label class="text-emerald-300">Enter a Name</label>
                    <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                </div>
                <div class="flex flex-col m-5">
                    <label class="text-emerald-300">Enter a Phone number</label>
                    <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Phono no">
                </div>
                <div class="flex flex-col m-5">
                    <label class="text-emerald-300">Enter a Email Address</label>
                    <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Email Address">
                </div>
                <div class="flex flex-col m-5">
                    <label class="text-emerald-300">Enter a Address</label>
                    <textarea rows="4" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Address"></textarea>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details">Next</button>
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
