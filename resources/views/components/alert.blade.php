
@if($theme=="1")
<div class="h-screen w-screen fixed top-0 bottom-0 left-0 right-0  z-50 flex justify-center items-center" id="alertmsg-box">
    <div class=" bg-neutral h-full w-full absolute bg-neutral-950 opacity-55 z-0"></div>
    <div class=" relative min-h-40 min-w-80 max-w-[300px] rounded-md z-10 flex flex-col items-center p-5 px-5 text-white bg-neutral-800">
        <h1 class="mb-3 text-red-500 text-3xl">{{$status}}</h1>
        <div class="text-white text-center text-sm my-2">
            <p>{{$msg}}</p>
        </div>
        <button onclick="document.getElementById('alertmsg-box').remove()" class="px-5 py-2 mt-5 bg-red-500 text-neutral-900 rounded-md">Close</button>
    </div>
</div>
@else
<div class="h-screen w-screen fixed top-0 bottom-0 left-0 right-0  z-50 flex justify-center items-center" id="alertmsg-box">
    <div class=" bg-neutral h-full w-full absolute bg-neutral-950 opacity-55 z-0"></div>
    <div class=" relative min-h-40 min-w-80 max-w-[300px] rounded-md z-10 flex flex-col items-center p-5 px-5 text-white bg-neutral-800">
        <h1 class="mb-3 text-emerald-300 text-3xl">{{$status}}</h1>
        <div class="text-white text-center text-sm my-2">
            <p>{{$msg}}</p>
        </div>
        <button onclick="document.getElementById('alertmsg-box').remove()" class="px-5 py-2 mt-5 bg-emerald-300 text-neutral-900 rounded-md">Close</button>
    </div>
</div>
@endif
