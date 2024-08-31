@php
    $url=explode('/',Request::url());
@endphp
<aside class="rounded-lg text-white h-screen w-72 p-5 md:flex flex-col justify-between bg-neutral-950  md:bg-none z-20  m-4 md:relative max-sm:fixed max-sm:hidden" id="mobileviewsidebar">
    <div class="top-4 right-2 absolute md:hidden">
        <i class='bx bx-x text-4xl ' onclick="CloseSlideBar()" id="sidebariconclose"></i>
    </div>
    <h1 class="text-start text-3xl text-emerald-300 font-semibold">SelfMe</h1>
    <ul class="mt-14 flex-1">
        <li class="w-full h-16 my-2 relative">
            <a href="{{route('homeui')}}" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[4]=="home")?'text-emerald-300 active':''}}  rounded-lg side-menu"><i class="fa-solid fa-house-fire w-10"></i>Home</a>
        </li>
        <li class="w-full h-16 my-2 relative">
            <a href="{{route('templatesui')}}" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[4]=="template")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-cube w-10"></i>Design</a>
        </li>
        @if (CheckUserProtflio())
        <li class="w-full h-16 my-2 relative">
            <a href="{{route('getdataui')}}" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[4]=="edit-data")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-database w-10"></i>Edit Data</a>
        </li>
        @else
        <li class="w-full h-16 my-2 relative">
            <a href="{{route('dataui')}}" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[4]=="data")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-database w-10"></i>Datas</a>
        </li>
        @endif
        <li class="w-full h-16 my-2 relative">
            <a href="{{route('newupdatesui')}}" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[4]=="new")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-wand-magic-sparkles w-10"></i></i>New</a>
        </li>
    </ul>
    <div class=" p-4">
        <a href="{{route('logout')}}" class="w-full flex items-center justify-center text-xl px-4 py-4 bg-neutral-900  rounded-lg text-emerald-300">Logout<i class="fa-solid fa-arrow-right-from-bracket ml-5"></i></a>
    </div>
</aside>

<script>
    function CloseSlideBar(){
        $('#mobileviewsidebar').toggle('hidden');
    }
    function OpenSlidebar(){
        $('#mobileviewsidebar').toggle('hidden');
    }
</script>
<style>
    #mobileviewsidebar{
        position: fixed;
        top: 0;
        height: 95vh;
    }
</style>
