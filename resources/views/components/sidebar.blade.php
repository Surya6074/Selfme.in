@php
    $url=explode('/',Request::url());
@endphp

<aside class="rounded-lg text-white w-72 p-5 md:flex hidden flex-col justify-between m-4 relative" id="mobileviewsidebar">

    <div class="top-4 right-2 absolute md:hidden">
        <i class='bx bx-x text-4xl ' onclick="CloseSlideBar()" id="sidebariconclose"></i>
    </div>
    <h1 class="text-start text-3xl text-emerald-300 font-semibold">SelfMe</h1>
    <ul class="mt-14 flex-1">
        <li class="w-full h-16 my-2 relative">
            <a href="/home" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[3]=="home")?'text-emerald-300 active':''}}  rounded-lg side-menu"><i class="fa-solid fa-house-fire w-10"></i>Home</a>
        </li>
        <li class="w-full h-16 my-2 relative">
            <a href="/template" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[3]=="template")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-cube w-10"></i>Design</a>
        </li>
        <li class="w-full h-16 my-2 relative">
            <a href="/data" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[3]=="data")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-database w-10"></i>Datas</a>
        </li>
        <li class="w-full h-16 my-2 relative">
            <a href="/new" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 {{($url[3]=="new")?'text-emerald-300 active':''}} rounded-lg side-menu"><i class="fa-solid fa-wand-magic-sparkles w-10"></i></i>New</a>
        </li>
    </ul>
    <div class=" p-4">
        <a href="" class="w-full flex items-center justify-center text-xl px-4 py-4 bg-neutral-900  rounded-lg text-emerald-300">Logout<i class="fa-solid fa-arrow-right-from-bracket ml-5"></i></a>
    </div>
</aside>

<script>
    function CloseSlideBar(){
        var sidebar=document.getElementById('mobileviewsidebar');
        sidebar.style.display='none';
        console.log('hiii');
    }
    function OpenSlidebar(){
        var sidebar=document.getElementById('mobileviewsidebar');
        sidebar.style.display='block';
    }
</script>
