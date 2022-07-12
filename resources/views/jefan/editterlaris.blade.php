<x-app-layout>

<div class="pt-40 mx-auto">
        <div class="container">
            <div class="px-4">
                <form action="{{url('terlaris/update')}}/{{$bordir->id}}" method="post"enctype='multipart/form-data' >
                    @csrf 
                    @method('put')
                <label for="judul" class="text-base text-teal-400 mb-2"> Judul
                    <input type="text" id="judul" value="{{$bordir->judul}}" name="judul" class="w-full rounded-full text-slate-400 focus:ring-1 focus:text-teal-300 focus:border-1">
                    </label>
                <label for="isi" class="text-base text-teal-400 mb-2"> Isi
                    <textarea  type="text"  id="isi" value="{{$bordir->isi}}" name="isi" class="focus:outline-none w-full rounded-full text-slate-400 focus:ring-1 focus:text-teal-300 focus:border-1">
                    {{$bordir->isi}}</textarea> </label>
                <label for="foto" class="text-base text-teal-400 mb-3"> Foto
                    <img src="{{asset('jefan/terlaris/'.$bordir->foto)}}" class="h-9 w-9">
                   
                    <input type="file"id="foto"  name="foto" class="focus:outline-none w-full rounded-full text-slate-400 focus:ring-1 focus:text-teal-300 focus:border-1">
                    </label>

                    <button type="submit" class="px-4 mt-5 rounded-full shadow-lg bg-teal-700 text-white
                    hover:bg-green-600">Save</button>
                </form>
                
</div>
        </div>
    </div>

</x-app-layout>