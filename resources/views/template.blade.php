@extends('layouts.app1')
@section('title')
Portfolio Templates - Selfme
@endsection
@section('content')
<body class="flex">
    @include('components.sidebar')
    <section class="w-full min-h-min overflow-y-scroll overflow-x-hidden p-4 mb-1  md:ml-[310px]">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
            <div class="flex itemes-center">
                <button class="md:hidden block"  onclick="OpenSlidebar()"><i class="bx bx-menu-alt-left text-white text-4xl mr-5" id="sidebaricon"></i></button>
                <h1 class="text-xl text-white">Designs</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <a href="{{route('profileui')}}" class="text-4xl ">{{strtoupper(substr(auth()->user()->username, 0, 1))}}</a>
            </div>
        </div>
        <div class=" mt-10 grid lg:grid-cols-3 xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-6 justify-center ">
            @foreach ($templates as $template)
            <div class=" flex flex-col w-72 bg-neutral-800 rounded-xl template-size relative place-self-center">
                <div class="flex-1 justify-center items-center opacity-70">
                    <img src="{{asset('templates/'.$template->template_img)}}" class=" h-96 w-full rounded-xl" alt="">
                </div>
                <div class="flex flex-col  w-full px-5 absolute bottom-0">
                    <h1 class="text-white text-2xl">{{$template->template_name}}</h1>
                    <div class="mt-5 pb-5 flex justify-between w-full">
                        <a href="/preview/{{$template->id}}" class="px-4 py-2 text-emerald-300 bg-neutral-900 rounded-lg">Preview</a>

                        {{-- <p class="px-4 py-2 text-emerald-300 bg-neutral-900 rounded-lg">Using</p> --}}
                        <button type="button" value="{{$template->id}}" id="template-btn" class="px-4 py-2 bg-emerald-300 text-neutral-900 rounded-lg">Use Template</button>
                    </div>
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
    .template-size{
        height: 520px;
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
