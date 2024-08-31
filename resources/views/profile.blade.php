@extends('layouts.app1')
@section('title')
Home Page - SelfMe
@endsection
@section('content')
<body class="flex">
    <div class="hidden" id="alertmsg-box">
        <div class="h-screen w-screen absolute top-0 bottom-0 left-0 right-0 bg-neutral-950 z-50 flex justify-center items-center" >
            <div class=" bg-neutral h-full w-full absolute opacity-55 z-0">g</div>
            <div class=" relative min-h-40 min-w-80 max-w-[300px] rounded-md z-10 flex flex-col items-center p-3 px-5 text-white bg-neutral-900">
                <h1 class="mb-3 text-emerald-300 text-3xl">Alert</h1>
                <div class="text-white text-center text-sm my-2">
                    <p>Are You Want to Delete this Account?</p>
                </div>
                <div class="flex gap-10">
                    <button type="button" id="btn-alert-msg" class="bg-emerald-300 text-neutral-900 my-4 px-4 py-2 rounded cursor-pointer">Close</button>
                    <form action="{{route('deleteuser')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <button id="btn-alert-msg" class="bg-neutral-800 text-red-500 my-4 px-4 py-2 rounded cursor-pointer">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('components.sidebar')
    <section class="w-full min-h-min overflow-y-scroll p-4 pt-8  md:ml-[310px]">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
            <div class="flex itemes-center">
                <button class="md:hidden block"  onclick="OpenSlidebar()"><i class="bx bx-menu-alt-left text-white text-4xl mr-5" id="sidebaricon"></i></button>
                <h1 class="text-xl text-white">Home</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <a href="{{route('profileui')}}" class="text-4xl ">{{strtoupper(substr(auth()->user()->username, 0, 1))}}</a>
            </div>
        </div>
        <div class="w-full bg-neutral-900 p-3 mt-7 rounded-xl flex md:flex-row flex-col items-center justify-between gap-10 px-10">
            <div class="h-32 w-32  rounded-full flex justify-center items-center bg-white cursor-pointer">
                <h1 class="text-6xl">{{strtoupper(substr(auth()->user()->username, 0, 1))}}</h1>
            </div>
            <div class="text-white flex flex-col items-center pt-5 flex-1">
                <p class="text-4xl">{{auth()->user()->username}}</p>
                <p class="text-2xl text-emerald-300 mt-2">{{auth()->user()->email}}</p>
            </div>
            <div class="flex justify-center items-center ">
                <a class="bg-neutral-800 text-red-500 my-4 px-4 py-2 rounded cursor-pointer" id="btn-delete"><i class='bx bx-trash'></i> Delete account </a>
            </div>
        </div>

    </section>
</body>
<script>
    $('#btn-delete').click(function(){
        $('#alertmsg-box').toggle();
    });
    $('#btn-alert-msg').click(function(){
        $('#alertmsg-box').toggle();
    });
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
