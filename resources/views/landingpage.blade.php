<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" class="w-[120px] h-[120px]" type="image/x-icon" href="{{asset('logo.png')}}">
    <title>Jefan</title>
    @vite('resources/css/app.css')
</head>
<body>

 <!-- Header Start -->

      <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">

        <a href="#home" class="font-bold text-teal-700 text-lg block py-6 font-san">
        <img class="content w-[60px] h-[60px] " src="{{asset('logo.png')}}" alt="Landing Page">
        Embroidery & Tailor
           </a>
      </div>
       <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" type="button" class=" lg:hidden block absolute right-4">
          <span class="origin-top-left hamburger-line  transition duration-300 ease-in-out"></span>
          <span  class="hamburger-line transition duration-300 ease-in-out"></span>
          <span  class="origin-bottom-left hamburger-line transition duration-300 ease-in-out"></span>
        </button>
        <nav id="nav-menu" class="lg:dark:bg-transparent dark:shadow-slate-500 dark:bg-black lg:shadow-none lg:rounded-none lg:static lg:bg-transparent lg:block lg:max-w-full hidden absolute py-5
         bg-white shadow-lg top-full rounded-lg right-4 max-w-[350px] w-full">
          <ul class="block lg:flex">
            <li class="group">
              <a href="#home" class="text-base  flex
              text-slate-900 rounded-full group-hover:bg-green-400 py-2 mx-8 group-hover:text-white dark:text-white">Beranda </a>
            </li>
            <li class="group">
              <a href="#sosmed" class="text-base flex 
              text-slate-900 group-hover:bg-green-400 rounded-full py-2 mx-8 group-hover:text-white dark:text-white">Sosial Media</a>
            </li>
            <li class="group">
              <a href="#baru" class="text-base flex 
              text-slate-900 group-hover:bg-green-400 rounded-full py-2 mx-8 group-hover:text-white dark:text-white">Produk Terbaru</a>
            </li>
            <li class="group">
              <a href="#about" class="text-base flex 
              text-slate-900 group-hover:bg-green-400 rounded-full py-2 mx-8 group-hover:text-white dark:text-white">Tentang Kami</a>
            </li>
            <li class="group">
              <a href="#port" class="text-base flex 
              text-slate-900 group-hover:bg-green-400 rounded-full py-2 mx-8 group-hover:text-white dark:text-white">Produk Terpopuler</a>
            </li>
            <li class="group">
              <a href="#contact" class="text-base flex 
              text-slate-900 group-hover:bg-green-400 rounded-full py-2 mx-8 group-hover:text-white dark:text-white">Contact</a>
            </li>
            <li class="flex items-center mt-1">
              <div class="flex">
                <span class="mr-2 text-sm text-slate-500">Light</span>
                <input type="checkbox"class="hidden" id="dark-toggle">
                <label for="dark-toggle">
                  <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                    <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                  </div>
                </label>
                <span class="ml-2 text-sm text-slate-500">Dark</span>
              </div>
            </li>
          </ul>
        </nav>
       </div>
    </div>
   </div>
</header>

 <!-- Header end -->




    <!-- Hero Section Start -->
    <section id="home" class="pt-[200px] dark:bg-black" >
        <div class="container" >
            <div class="flex   flex-wrap">
              <div class="w-full self-center px-4 mb-10 lg:w-1/2">
                <h1 class="text-base font-semibold text-teal-500 md:text-xl lg:text-2xl">Selamat Datang 
                     <span class="block text-slate-900 text-4xl mt-1 lg:text-5xl">Bordir Jefan</span></h1>
                <h2 class="text-lg font-medium mb-5 text-slate-500 lg:text-2xl">
                    <span class="text-slate-900 mb-10 leading-relaxed"></span></h2>
                <p class="text-slate-900 mb-10 dark:text-white">
                  Menerima Berbagai Macam Pesanan Pakaian Seragam dan Kaos 
             

                </p>
                <a href="" class=" text-base font-semibold
                text-white bg-teal-500 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80
                transition duration-300 ease-in-out"> Hubungi Kami</a>
              </div>

              <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-5 lg:mt-5 lg:right-0">
                    <img src="{{asset('jefan/q.jpg')}}" class="max-w-full mx-auto relative z-10"/>
                <span class=" absolute -bottom-10  left-1/2 -translate-x-1/2 md:scale-125"><svg class="animate-boun duration-900" width="400"  height="400"viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#14b8a6"
   d="M55.5,-40.3C64.1,-33.5,57.8,-10.9,48.7,4C39.7,18.9,27.8,26.1,12.2,38.8C-3.5,51.5,-22.9,69.8,-30.6,65.4C-38.3,61,-34.3,33.9,-38.4,10.4C-42.5,-13.2,-54.8,-33.4,-49.8,-39.4C-44.7,-45.4,-22.4,-37.2,0.6,-37.7C23.5,-38.1,46.9,-47.1,55.5,-40.3Z" transform="translate(100 100) scale(1.2)" />
</svg></span>
                </div>
              </div> 
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- about section start -->
    @foreach($tent as $tentang)
    <section id="about" class="pt-60 pb-4 dark:bg-black">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-5 lg:w-1/2">
           
            <h4 class="font-bold uppercase text-teal-500 text-lg">{{$tentang->judul}}</h4>
            <h2 class="text-slate-900 font-bold text-3xl mb-5 max-w-md dark:text-white">{{$tentang->keterangan}}</h2>
            <p class="font-medium text-base text-slate-700 mb-2">
            ☺ {{$tentang->isi}}
            </p>
            <p class="font-medium text-base text-slate-700 mb-2 ">
            ☺ {{$tentang->isi1}}
            </p>
            <p class="font-medium text-base text-slate-700 mb-2 ">
            ☺ {{$tentang->isi2}}
            </p>
            <p class="font-medium text-base text-slate-700 ">
            ☺ {{$tentang->isi3}}
            </p>
            
          </div>
          @endforeach
          <div class="w-full px-4 lg:w-1/2" id="sosmed">
            <h3 class="font-semibold text-slate-900 text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white">Mari Ikuti</h3>
            <p class="max-w-xl font-medium text-base text-slate-700 lg:text-lg " >Silahkan Ikuti Akun Sosial Media Kami Agar Tidak Ketinggalan Informasi Menarik Lainnya  </p>
              <div class="flex items-center">
                <a href="" class="hover:text-white text-slate-300 w-9 h-9 mr-3 rounded-full flex justify-center
                items-center border border-slate-300 hover:border-teal-400
                hover:bg-red-500" target="blank">
                <svg role="img " class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="" class="border rounded-full  border-teal-200 w-9 h-9 mr-3 items-center flex justify-center text-slate-300 hover:bg-purple-600">
                <svg width="28" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
              
                  </a>
                  <a href="https://www.facebook.com/profile.php?id=100083135772722" target="_blank" class=" rounded-full w-9 h-9 mr-3 text-slate-300 border border-slate-300 hover:bg-blue-400
                  items-center flex justify-center hover:border-slate-600">
                  <svg role="img" class="fill-current" width="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
               <a href="" class="w-9 h-9 mr-3 border border-slate-300 rounded-full flex items-center justify-center
               hover:bg-slate-900 text-slate-300 hover:text-white">
               <svg role="img" class="fill-current" width="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
                </div>  
          </div>
        </div>
      </div>

    </section>
    <!-- about section end -->


    <!-- port start -->
 <section id="port" class="pt-[90px] pb-2 bg-slate-100 items-cente dark:bg-slate-800">
       <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            @foreach($popu as $populer)
          <h4 class="font-bold text-teal-400 lg:text-3xl mb-2 uppercase "> {{$populer->judul}}</h4>
          <h2 class="dark:text-white"> {{$populer->keterangan}}</h2>
          <p class="font-medium text-md text-slate-500">{{$populer->isi}} </div>
@endforeach
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center items-center xl:w-10/12 xl:mx-auto">
        @foreach ($laris as $larisku)
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md items-center shadow-md overflow-hidden">
            <img class="w-full " src="{{asset('jefan/terlaris/'.$larisku->foto)}}" alt="Landing Page">
            </div>
            <h3 class="font-bold text-base text-teal-900 lg:text-xl text-center mt-5 mb-3">{{$larisku->judul}}</h3>
         <p class="font-medium text-md">{{$larisku->isi}}</p>
          </div>
@endforeach

          <!-- <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
            <img class="w-full " src="{{asset('jefan/q.jpg')}}" alt="Landing Page">
            </div>
            <h3 class="font-bold text-base text-teal-900 lg:text-xl text-center mt-5 mb-3">Landing Page</h3>
         <p class="font-medium text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae saepe facilis vel, molestiae voluptatum.</p>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
            <img class="w-full " src="{{asset('jefan/q.jpg')}}" alt="Landing Page">
            </div>
            <h3 class="font-bold text-base text-teal-900 lg:text-xl text-center mt-5 mb-3">Landing Page</h3>
         <p class="font-medium text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae saepe facilis vel, molestiae voluptatum.</p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
            <img class="w-full " src="{{asset('jefan/q.jpg')}}" alt="Landing Page">
            </div>
            <h3 class="font-bold text-base text-teal-900 lg:text-xl text-center mt-5 mb-3">Landing Page</h3>
         <p class="font-medium text-md md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae saepe facilis vel, molestiae voluptatum.</p>
          </div> -->

          
        </div>

        
       </div>
 </section>{{ $laris->links() }}
 

 <!-- <section id="client" class="pt-36 pb-32 bg-slate-700">
  <div class="container">
    <div class="w-full px-4">
    <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-bold text-teal-400 lg:text-3xl mb-2 uppercase ">Model Produk</h4>
          <h2> Client</h2>
          <p class="font-medium text-md text-slate-500">Lorem ipsum dolor sit amet consectetur
             adipisicing elit. Consequatur eligendi, eos ad praesentium reiciendis atque recusandae ducimus! Quam, aut quibusdam?</p>
          </div>
    </div>
  </div>
 </section> -->


    <!-- port end --> 

<!-- blog start -->
   <section class="pt-36  pb-32 bg-slate-200 dark:bg-black" id="baru">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-full mx-auto text-center mb-16">
          @foreach ($barutu as $terba)
          <h4 class="font-bold text-teal-700 text-3xl sm:text-4xl">
          {{$terba->judul}}
          </h4>
          <h2 class="dark:text-white"> {{$terba->keterangan}}</h2>
          <p class="text-slate-600  font-medium text-md md:text-lg">{{$terba->isi}}</p>
          @endforeach
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        @foreach ($baru as $terbaru)
              <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="mb-10 rounded-xl overflow-hidden bg-white shadow-lg">
                <img class="w-full" src="{{asset('jefan/images/'.$terbaru->foto)}}" alt="Landing Page">
              
                <div class="py-8 px-6">
                  <h3 class="font-bold ">{{$terbaru->judul}}</h3>
                  <p>{{$terbaru->isi}}</p>
                </div>
              </div>
              </div>
@endforeach

    </div>
    
   </section>
   {{ $baru->links() }}
<!-- blog end -->

<!-- Contact Section -->
<section id="contact" class="pt-36 pb-32 xl:w-12/12 xl:mx-auto dark:bg-slate-400">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg mb-2 text-teal-400">Contact</h4>
        <h2 class="font-bold text-slate-800 text-3xl mb-4 sm:text-4xl
        lg:text-5xl">Hubungi Kami</h2>
        <p class="font-medium text-md md:text-lg text-teal-200">Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
    <form action="{{url('pesan/create')}}" method="post">
      @csrf 
      @method('post')
       <div class="w-full lg:w-2/3 lg:mx-auto">
    <div class="w-full px-4 mb-8">
    <label for="name" class="text-base text-teal-200 font-bold uppercase">Name</label>
    <input type="text" id="name"  name="name"class="w-full bg-slate-200 text-slate-500 
    p-3 rounded-md focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500"/>
    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
    </div>

    <div class="w-full px-4 mb-8">
      <label for="email" class="text-base text-teal-200 font-bold uppercase">Email</label>
      <input type="email" name="email" class="w-full bg-slate-200 text-slate-600 p-3 rounded-md focus:outline-none
      focus:ring-1 focus:border-teal-500"/>
      @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
    </div>

    <div class="w-full px-4 mb-8">
      <label for="pesan" class="font-bold text-teal-500 text-base">Pesan</label>
      <textarea   name="pesan" id="pesan" class="w-full text-slate-500 bg-slate-200 p-3 rounded-md focus:outline-none
      focus:ring-1 focus:border-teal-400 h-32" ></textarea>
      @if ($errors->has('pesan'))
                    <span class="text-danger">{{ $errors->first('pesan') }}</span>
                @endif
    </div>
    <div class="w-full px-4">
      <button class="bg-teal-500 text-base font-semibold py-3 px-8 rounded-full w-full
      hover:opacity-80 hover:shadow-lg transition duration-500"> Kirim</button>
    </div>
    </form>
  </div>
  </div>
</section>



<!-- Contact Section end-->


<!-- footer start -->
 <footer class="bg-slate-700 pt-24 pb-17">
 <div class="container">
  <div class="flex flex-wrap">
  <div class="md:w-1/3 w-full px-4 mb-12 text-slate-300 font-medium">
    <h2 class="font-bold text-white text-4xl mb-5">Jefan</h2>
    <h3 class="font-bold text-2xl mb-2 dark:text-white">Hubungi Kami</h3>
    <p>Jefan@gmail.com</p>
    <p>JL.ulak Karang</p>
    <p>padang</p>

  </div>
  <div class="w-full px-4 mb-12 md:w-1/3">
   <h3 class="font-bol text-xl text-white mb-5"> Link Terkait</h3>
    <ul>
      <li>
        <a href="" class="hover:text-teal-500 inline-block text-base text-slate-300">Home</a>
      </li>
      <li>
        <a href="" class="hover:text-teal-500 inline-block text-base text-slate-300">Produk Terpopuler</a>
      </li>
      <li>
        <a href="" class="hover:text-teal-500 inline-block text-base text-slate-300">Produk Terlaris</a>
      </li>
    </ul>
</div>
  <div class="w-full px-4 mb-12 md:w-1/3">
   <h3 class="font-bol text-xl text-white mb-5"> Informasi Kontak Kami</h3>
    <ul>
      <li>
        <a href="" class="hover:text-teal-500 inline-block text-base text-slate-300">Rekening</a>
      </li>
      <li>
        <a href="" class="hover:text-teal-500 inline-block text-base text-slate-300">Email</a>
      </li>
     
    </ul>
</div>
  

  </div>
  <div class="w-full pt-10 border-t border-slate-400  mx-auto">
  <div class="flex items-center justify-center mb-5">
                <a href="" class="hover:text-white text-slate-300 w-9 h-9 mr-3 rounded-full flex justify-center
                items-center border border-slate-300 hover:border-teal-400
                hover:bg-red-500" target="blank">
                <svg role="img " class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="" class="border rounded-full  border-teal-200 w-9 h-9 mr-3 items-center flex justify-center text-slate-300 hover:bg-purple-600">
                <svg width="28" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
              
                  </a>
                  <a href="https://www.facebook.com/profile.php?id=100083135772722" target="_blank" class=" rounded-full w-9 h-9 mr-3 text-slate-300 border border-slate-300 hover:bg-blue-400
                  items-center flex justify-center hover:border-slate-600">
                  <svg role="img" class="fill-current" width="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                  <a href="" class=" rounded-full w-9 h-9 mr-3 text-slate-300 border border-slate-300 hover:bg-red-400
                  items-center flex justify-center hover:border-slate-600">
                  <svg role="img"  class="fill-current" width="28"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Google Maps</title><path d="M19.527 4.799c1.212 2.608.937 5.678-.405 8.173-1.101 2.047-2.744 3.74-4.098 5.614-.619.858-1.244 1.75-1.669 2.727-.141.325-.263.658-.383.992-.121.333-.224.673-.34 1.008-.109.314-.236.684-.627.687h-.007c-.466-.001-.579-.53-.695-.887-.284-.874-.581-1.713-1.019-2.525-.51-.944-1.145-1.817-1.79-2.671L19.527 4.799zM8.545 7.705l-3.959 4.707c.724 1.54 1.821 2.863 2.871 4.18.247.31.494.622.737.936l4.984-5.925-.029.01c-1.741.601-3.691-.291-4.392-1.987a3.377 3.377 0 0 1-.209-.716c-.063-.437-.077-.761-.004-1.198l.001-.007zM5.492 3.149l-.003.004c-1.947 2.466-2.281 5.88-1.117 8.77l4.785-5.689-.058-.05-3.607-3.035zM14.661.436l-3.838 4.563a.295.295 0 0 1 .027-.01c1.6-.551 3.403.15 4.22 1.626.176.319.323.683.377 1.045.068.446.085.773.012 1.22l-.003.016 3.836-4.561A8.382 8.382 0 0 0 14.67.439l-.009-.003zM9.466 5.868L14.162.285l-.047-.012A8.31 8.31 0 0 0 11.986 0a8.439 8.439 0 0 0-6.169 2.766l-.016.018 3.665 3.084z"/></svg>
               <a href="" class="w-9 h-9 mr-3 border border-slate-300 rounded-full flex items-center justify-center
               hover:bg-slate-900 text-slate-300 hover:text-white">
               <svg role="img" class="fill-current" width="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
              
               <a href="https://api.whatsapp.com/send?phone=6285297869292" target="_blank"class="w-9 h-9 mr-3 border border-slate-300 rounded-full flex items-center justify-center
               hover:bg-green-500 text-slate-300 hover:text-white">
             
              
               <svg role="img"class="fill-current" width="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
</a>
              </div>  
                
                <p class="mb-5 font-medium text-sm text-slate-400 text-center"> Dibuat oleh Alfan Saputra</p>  
     </div>
          </div>
  </div>
 </div>
 </footer>


<!-- footer end -->

<!-- <back to top start -->
 <a href="#home"  id="to-top" class=" hover:animate-pulse rotate-45 hidden justify-center items-center fixed z-[9999] h-14 w-14 mb-14 bottom-4 right-4 p-4  bg-teal-600  rounded-full">
 <span class="block   h-5 w-5 border-t-2 border-l-2 mt-1"></span>
 </a>-
 <a href="https://api.whatsapp.com/send?phone=6285297869292"target="_blank" class=" animate-pulse  flex fixed z-[9999] items-center justify-center text-center h-12 w-12 bottom-4 right-4 p-4 bg-green-600  rounded-full">
 <svg role="img" width="28"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
 </a>
    <script type="text/javascript" src="{{asset('/jefan/tailwind.js')}}">
  
    </script>
     @include('sweetalert::alert')
</body>
</html>