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
<script>
    function addRole(){
        var skill=document.getElementById('Role-input');
        if(skill.children.length<10){
            document.getElementById("Role-input").innerHTML+=`<div class="flex w-full my-2">
                <input type="text" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Skill">
                <input type="number" class="ml-2 w-24 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="100%">
                <button class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                </div>`;
        }
    }
    function RemoveRole(e){
        e.parentNode.remove();
    }
</script>
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
