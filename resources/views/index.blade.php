@extends('layouts.app1')
@section('title')
Data Insert Page - SelfMe
@endsection
@section('content')
<body class="bg-neutral-900">
<div class="bg-neutral-900 h-full w-full">
    <div class="lg:p-10 p-5 lg:px-32 pl-10 w-full">
        <nav class="w-full flex justify-between md:h-24 h-16 mt-4 bg-emerald-300 rounded-3xl">
           <div class="w-1/3 relative">
                <h1 class=" rounded-full absolute md:-top-4 md:-left-4 -top-2 -left-2 flex justify-center items-center text-emerald-300 md:h-32 md:w-32 h-20 w-20 bg-white text-5xl">Sm</h1>
           </div>
           <div class="flex-1 md:hidden flex justify-between px-2 items-center">
                <h1 class="text-2xl pl-10">SelfMe</h1>
                <a href=""><i class='bx bx-menu text-neutral-900 text-3xl mr-4'></i></a>
           </div>
           <div class="md:block hidden flex-1 h-full ">
               <ul class="flex h-full items-center justify-around">
                   <li><a href="" class="text-xl font-semibold">Home</a></li>
                   <li><a href="" class="text-xl font-semibold">About</a></li>
                   <li><a href="" class="text-xl font-semibold">Templates</a></li>
                   <li><a href="" class="px-5 py-2 bg-white text-xl text-emerald-300 font-semibold rounded-lg">Login</a></li>
               </ul>
           </div>
        </nav>
    </div>
     <div class="md:h-[100vh] h-full md:pt-20 pt-10 w-full flex lg:flex-row flex-col">
        <div class="lg:w-1/2 lg:pl-32 md:pl-14 pl-8 pr-3 pt-10 pb-32 w-full h-full flex justify-center items-center">
            <div class="flex flex-col justify-center ">
                <h1 class="lg:text-7xl md:text-8xl text-6xl text-white font-semibold">Make Your Own</h1>
                <h1 class="md:text-8xl text-7xl mb-4 text-emerald-300 font-bold mt-4">Portfolio<span class="text-white">.</span></h1>
                <p class="text-white text-start text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur reiciendis et blanditiis vero, aperiam excepturi iste magnam, dolorum amet officia porro tenetur minima consequatur sit culpa perspiciatis, eaque fugit!</p>
                <div class="mt-10 flex">
                    <div class=" bg-neutral-100 lg:w-2/4 w-5/6 px-4 py-2 rounded-xl flex items-center border-2 border-emerald-300">
                        <span class=" text-xl text-neutral-600">https://selfme.in/</span><input type="text" name="username" id="username" class=" bg-transparent h-full w-full py-2 pr-2 outline-none"><div id="err"></div>
                    </div>
                    <button class="px-5 py-2 ml-2 bg-emerald-300 text-neutral-900 rounded-lg">Check</button>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 w-full h-[600px] lg:flex hidden items-center justify-center md:pl-20">
            <div class=" w-80 h-[500px] bg-emerald-300 rounded-xl  relative">
                <div class=" absolute flex justify-center items-center -top-5 -right-5 w-80 h-full bg-white rounded-xl">
                    <p>fasdf</p>
                </div>
            </div>
        </div>
     </div>
</div>
{{-- templates --}}
<div class="bg-neutral-800 md:h-screen h-full w-full flex flex-col items-center p-10">
    <div class="pt-10 text-center">
        <h1 class="md:text-6xl text-4xl font-bold tracking-wide text-white">TEMPLATES</h1>
        <h3 class="md:text-xl text-sm mb-10 text-emerald-300 mt-2">We provide be better... we are be better</h3>
    </div>
    <div class="flex-1 flex gap-10 justify-center items-center h-full w-full">
        <div class="md:flex hidden flex-col w-96 h-[500px] bg-neutral-900 p-5 rounded-xl">
            <div class="flex justify-between">
                <p class="text-white text-xl">design 1</p>
                <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
            </div>
            <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                <img src="" alt="" class="">
            </div>
            <div class="flex flex-col">
                <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                <div class="flex justify-between mt-2">
                    <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                    <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-96 h-[500px] bg-neutral-900 p-5 rounded-xl">
            <div class="flex justify-between">
                <p class="text-white text-xl">design 1</p>
                <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
            </div>
            <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                <img src="" alt="" class="">
            </div>
            <div class="flex flex-col">
                <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                <div class="flex justify-between mt-2">
                    <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                    <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                </div>
            </div>
        </div>
        <div class="md:flex hidden flex-col w-96 h-[500px] bg-neutral-900 p-5 rounded-xl">
            <div class="flex justify-between">
                <p class="text-white text-xl">design 1</p>
                <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
            </div>
            <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                <img src="" alt="" class="">
            </div>
            <div class="flex flex-col">
                <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                <div class="flex justify-between mt-2">
                    <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                    <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Abouts --}}
<div class="bg-neutral-900 h-full w-full flex flex-col items-center md:p-10 p-4">
    <div class="pt-10 text-center">
        <h1 class="md:text-6xl text-4xl  font-bold tracking-wide text-white">About Us</h1>
        <h3 class="md:text-xl text-sm  text-emerald-300 mt-2">We provide be better... we are be better</h3>
    </div>
    <div class="flex-1 h-full w-full mt-10 lg:px-20 px-8 flex lg:flex-row flex-col justify-center items-center">
        <img src="" class="lg:w-2/4  w-[400px] h-[500px] mb-10 bg-slate-200 " alt="">
        <div class="flex-1 flex flex-col lg:pl-20 p-0 text-center">
            <p class="lg:text-lg text-sm mb-10 text-center text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, laboriosam explicabo! Dignissimos recusandae at est, vel debitis beatae officiis obcaecati incidunt blanditiis, quibusdam architecto suscipit doloribus assumenda, nisi saepe quis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora odit architecto delectus, incidunt officiis ipsam veniam provident. Quia magni officiis, nostrum obcaecati eaque esse maxime accusamus, suscipit provident, aliquid fugit! <br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, laboriosam explicabo! Dignissimos recusandae at est, vel debitis beatae officiis obcaecati incidunt blanditiis, quibusdam architecto suscipit doloribus assumenda, nisi saepe quis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora odit architecto delectus, incidunt officiis ipsam veniam provident. Quia magni officiis, nostrum obcaecati eaque esse maxime accusamus, suscipit provident, aliquid fugit!</p>
            <div class="w-full">
                <a href="" class="text-emerald-300 border-2 px-6 py-3 rounded-2xl w-48 border-emerald-300 text-2xl mb-10">Contact Us</a>
            </div>
        </div>
    </div>
</div>
{{-- choose Us --}}
<div class="bg-neutral-900  h-full w-full pb-20 flex flex-col lg:mt-0 mt-10 items-center md:p-10 p-4">
    <div class="pt-10 text-center flex justify-center flex-col items-center">
        <h1 class="md:text-6xl text-4xl font-bold tracking-wide text-white">Why You Choose Us</h1>
        <h3 class="md:text-xl text-sm  lg:w-2/4 w-full text-emerald-300 mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi distinctio veritatis ex adipisci dolores maxime perspiciatis, numquam unde laudantium aspernatur et beatae nostrum consequuntur laboriosam, voluptatum illum reiciendis quam necessitatibus.</h3>
    </div>
    <div class="flex-1 h-full w-full mt-10 lg:gap-10 lg:px-20 pb-20 px-8 flex lg:flex-row flex-col justify-center items-center">
        <div class="">
            <div class="bg-white mt-10 relative rounded-lg lg:px-10 lg:py-5 p-5" >
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center">Icon</div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">taljfklasdnf </h1>
                    <p class="text-md text-neutral-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse praesentium tempore quas at vitae! Est quisquam enim maiores ab quaerat, deserunt placeat nostrum iure eius mollitia deleniti voluptates cupiditate quam.</p>
                </div>
            </div>
            <div class="bg-white mt-10 relative rounded-lg lg:px-10 lg:py-5 p-5" >
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center">Icon</div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">taljfklasdnf </h1>
                    <p class="text-md text-neutral-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse praesentium tempore quas at vitae! Est quisquam enim maiores ab quaerat, deserunt placeat nostrum iure eius mollitia deleniti voluptates cupiditate quam.</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-white mt-10 relative rounded-lg  lg:px-10 lg:py-5 p-5 " >
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center">Icon</div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">taljfklasdnf </h1>
                    <p class="text-md text-neutral-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse praesentium tempore quas at vitae! Est quisquam enim maiores ab quaerat, deserunt placeat nostrum iure eius mollitia deleniti voluptates cupiditate quam.</p>
                </div>
            </div>
            <div class="bg-white mt-10 relative rounded-lg  lg:px-10 lg:py-5 p-5" >
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center">Icon</div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">taljfklasdnf </h1>
                    <p class="text-md text-neutral-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse praesentium tempore quas at vitae! Est quisquam enim maiores ab quaerat, deserunt placeat nostrum iure eius mollitia deleniti voluptates cupiditate quam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- contact Us --}}
<div class="bg-neutral-800 h-full w-full pb-20 flex flex-col lg:mt-0 mt-10 items-center md:p-10 p-4">
    <div class="text-center flex justify-center flex-col items-center lg:mt-0 pt-10">
        <h1 class="md:text-6xl text-4xl font-bold tracking-wide text-white">Contact Us</h1>
        <h3 class="text-sm lg:w-2/4 w-full text-emerald-300 mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi distinctio veritatis ex adipisci dolores maxime perspiciatis, numquam unde laudantium aspernatur et beatae nostrum consequuntur laboriosam, voluptatum illum reiciendis quam necessitatibus.</h3>
    </div>
    <div class="flex-1 h-full w-full mt-10 lg:gap-10 lg:px-20 pb-20 px-8 flex lg:flex-row flex-col justify-center items-center">
        <form action="" class="lg:w-1/2 w-full flex flex-col lg:mt-0 mt-10">
            <h1 class="text-3xl text-white">For inquiry</h1>
            <input type="text" class="px-5 py-3 mt-5 bg-neutral-900 rounded-lg text-white outline-none" placeholder="Enter a Name">
            <input type="text" class="px-5 py-3 mt-5 bg-neutral-900 rounded-lg text-white outline-none" placeholder="Enter a Email">
            <textarea name="" class="px-5 py-3 mt-5 bg-neutral-900 rounded-lg text-white outline-none"  placeholder="Message..." cols="30" rows="10"></textarea>
            <div class="flex justify-between mt-8">
                <ul class="flex">
                    <li><a href="" class="text-3xl text-white ml-2"><i class='bx bxl-instagram' ></i></a></li>
                    <li><a href="" class="text-3xl text-white hover:text-emerald-300  ml-2"><i class='bx bxl-facebook' ></i></a></li>
                    <li><a href="" class="text-3xl text-white hover:text-emerald-300  ml-2"><i class='bx bxl-twitter' ></i></li>
                    <li><a href="" class="text-3xl text-white hover:text-emerald-300 "><i class='bx bxl-discord-alt' ></i></a></li>
                </ul>
                <button class="bg-emerald-300 py-4 w-1/4 rounded-xl text-neutral-900">Submit</button>
            </div>
        </form>
    </div>
</div>
{{--  Us --}}
<div class="bg-neutral-900 h-64 w-full  flex flex-col gap-20 lg:flex-row  justify-around lg:mt-0 mt-10 items-center md:p-10 p-4">
    <div class="flex flex-col items-center justify-center">
        <h4 class="h-16 w-16 flex justify-center items-center rounded-full text-white bg-emerald-300">Sm</h4>
        <p class="text-white">Get in Touch</p>
    </div>
    <div class="text-white">
        <div class="flex justify-center items-center flex-col">
            <h4 class="text-xl font-semibold mb-2">Sitemap</h4>
            <ul class="flex">
                <li class="px-5  hover:text-emerald-300 border-r-2 border-neutral-200"><a href="">Home</a></li>
                <li class="px-5  hover:text-emerald-300 border-r-2 border-neutral-200"><a href="">Template</a></li>
                <li class="px-5  hover:text-emerald-300 border-r-2 border-neutral-200"><a href="">About</a></li>
                <li class="px-5 "><a href="">Contact</a></li>
            </ul>
        </div>
        <p class="mt-4 text-center"><i class='bx bx-copyright' style='color:#ffffff' ></i>Coyrights are belong to <span class="text-emerald-300">Aplinix</span></p>
    </div>
    <div class="text-white">
        <div class="flex flex-col">
            <ul class="flex lg:flex-col flex-row">
                <li class="px-5 hover:text-emerald-300"><a href="">Privacy and policy</a></li>
                <li class="px-5 hover:text-emerald-300"><a href="">Terms and conditions</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
<style>
    body{
        overflow-y: scroll;
        height: 100%;
    }
</style>
<script>
    $('#username').on('keyup',function(){
        var data={
            username:$('#username').val(),
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(data);
        $.ajax({
            url:'/username',
            method:'POST',
            data:data,
            success:function(res){
                var err = document.getElementById('err');
                if(res.data>0){
                    err.innerHTML  =`<p>username was already taken</p>`;
                }else{
                    err.innerHTML  =`<p></p>`;
                }
            }
        });
    });
</script>
@endsection
