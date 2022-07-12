<x-app-layout>

<div class="py-12 mt-10">
    <div class="container">
        <div class="max-w-7xl sm:px-6 lg:px-8 bg-white">
            <div class="px-4">
               <form action="{{url('baruupdate')}}/{{$tere->id}}" method="post">
                @csrf 
                @method('PUT')
                <Label for="judul" class="text-teal-400 mt-5 hover:text-teal-800">Judul
                <input type="isi" id="judul" value ="{{$tere->judul}}"name="judul" class="mt-5 focus:border-1 w-full rounded-lg focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">
                </Label>
                <Label for="judul" class=" text-teal-400 mt-5 hover:text-teal-800">Keterangan
                <input type="isi"  id="keterangan" value ="{{$tere->keterangan}}" name="keterangan" class="mt-5 focus:border-1 w-full rounded-lg focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">
                </Label>
                <Label for="judul" class=" text-teal-400 mt-5 hover:text-teal-800">isi
                <textarea type="isi" id="isi"name="isi" class="mt-5 w-full rounded-lg focus:border-1 focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">{{$tere->isi}} </textarea></Label>
                <button type="submit" class="rounded-full bg-blue-500 hover:bg-blue-900 shadow-lg
                text-white ">Update</button>
               </form>
            </div>

        </div>
    </div>
</div>
</x-app-layout>