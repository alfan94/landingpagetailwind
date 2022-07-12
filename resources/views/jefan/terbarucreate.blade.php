<x-app-layout>
    <div class="pt-40 mx-auto">
        <div class="container">
            <div class="px-4">
                <form action="{{url('terbaru/store')}}" method="post"enctype='multipart/form-data' >
                    @csrf 
                    @method('post')
                <label for="judul" class="text-base text-teal-400 mb-2"> Judul
                    <input type="text" id="judul" name="judul" class="w-full rounded-full text-slate-400 focus:ring-1 focus:text-teal-300 focus:border-1">
                    </label>
                <label for="isi" class="text-base text-teal-400 mb-2"> Isi
                    <input type="text"  id="isi" name="isi" focus:outline-none class="w-full rounded-full text-slate-400 focus:ring-1 focus:text-teal-300 focus:border-1">
                    </label>
                <label for="foto" class="text-base text-teal-400 mb-3"> Foto
                    <input type="file"id="foto" name="foto" focus:outline-none class="w-full rounded-full text-slate-400 focus:ring-1 focus:text-teal-300 focus:border-1">
                    </label>

                    <button type="submit" class="px-4 rounded-full shadow-lg bg-teal-700 text-white
                    hover:bg-green-600">Save</button>
                </form>
                
</div>
        </div>
    </div>
</x-app-layout>