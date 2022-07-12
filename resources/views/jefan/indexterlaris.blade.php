<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4">
            <div class="px-4 bg-white shadow-lg rounded-lg ">
                <span class="flex mb-3 justify-between">
                <span  class="ustify-between"> Data Terbaru </span>
                <a href="{{url('terlaris/create')}}"class="bg-teal-500 text-right rounded-full px-4 text-base text-white hover:bg-red-900 cursor-pointer">Create</a>
                </span>
             
                <table id="datables" class="min-w-full mx-auto divide-y divide-gray-200 mb-3">
                    <thead>
                        <tr>
                            <th class="border border-slate-200">No</th>
                            <th class="border border-slate-200">Judul</th>
                            <th class="border border-slate-200">Isi</th>
                            <th class="border border-slate-200">Gambar</th>
                            <th class="border border-slate-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $no=1;
                        @endphp
                        @foreach($laris as $terbaru)
                        <tr>
                        <td class="  border border-slate-200">{{$no++}}</td>
                        <td class="border border-slate-200">{{$terbaru->judul}}</td>
                        <td class="border border-slate-200">{{$terbaru->isi}}</td>
                        <td class="border border-slate-200"><img class="h-10 w-10" src="{{asset('jefan/terlaris/'.$terbaru->foto)}}"></td>
                        <td class="border border-slate-200 flex justify-center">
                            <a href="{{url('terlaris/edit')}}/{{$terbaru->id}}" class=" px-4 shadow-lg bg-yellow-600 rounded-full text-white hover:bg-blue-400 font-semibold">Edit</a>

                            <form action="{{url('terlaris/hapus')}}/{{$terbaru->id}}" method="post" enctype='multipart/form-data' >
                    @csrf 
                    @method('delete')
                        <button type="submit" class=" ml-2 px-4 shadow-lg bg-red-700 rounded-full text-white hover:bg-red-900">Delete</a>
                        </form>

                    </td>
                        </tr>   
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>