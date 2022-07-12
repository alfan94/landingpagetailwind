<x-app-layout>

<div class="py-12 mt-10">
    <div class="container">
        <div class="max-w-7xl sm:px-6 lg:px-8 bg-white">
            <div class="px-4">
               <form action="{{url('tentangupdate')}}/{{$ter->id}}" method="post">
                @csrf 
                @method('PUT')
                <Label for="judul" class="text-teal-400 mt-5 hover:text-teal-800">Judul
                <input type="text" id="judul" value ="{{$ter->judul}}"name="judul" class="mt-5 focus:border-1 w-full rounded-lg focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">
                </Label>

                <Label for="judul" class=" text-teal-400 mt-5 hover:text-teal-800">Keterangan
                <input type="text"  id="keterangan" value ="{{$ter->keterangan}}" name="keterangan" class="mt-5 focus:border-1 w-full rounded-lg focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">
                </Label>

                <Label for="isi" class=" text-teal-400 mt-5 hover:text-teal-800">isi
                <textarea type="text" value ="{{$ter->isi}}" id="isi"name="isi" class="mt-5 w-full rounded-lg focus:border-1 focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">{{$ter->isi}} </textarea></Label>

                <Label for="isi1" class=" text-teal-400 mt-5 hover:text-teal-800">isi 1
                <textarea type="text" value ="{{$ter->isi1}}" id="isi1"name="isi1" class="mt-5 w-full rounded-lg focus:border-1 focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">{{$ter->isi1}} </textarea></Label>

                <Label for="isi2" class=" text-teal-400 mt-5 hover:text-teal-800">isi 2
                <textarea type="text" value ="{{$ter->isi2}}" id="isi2"name="isi2" class="mt-5 w-full rounded-lg focus:border-1 focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">{{$ter->isi2}} </textarea></Label>

                <Label for="isi3" class=" text-teal-400 mt-5 hover:text-teal-800">isi 3
                <textarea type="text" value ="{{$ter->isi3}}" id="isi3"name="isi3" class="mt-5 w-full rounded-lg focus:border-1 focus:border-slate-500 focus:outline-none
                focus:ring-1 text-slate-500">{{$ter->isi3}} </textarea></Label>

                <button type="submit" class="rounded-full bg-blue-500 hover:bg-blue-900 shadow-lg
                text-white ">Update</button>
               </form>
            </div>

        </div>
    </div>
</div>
</x-app-layout>