<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4">
            <div class="px-4 bg-white shadow-lg rounded-lg ">
                <span class="flex mb-3 justify-between">
                <span  class="ustify-between"> Pesan Para Member</span>
                </span>
             
                <table id="datables" class="min-w-full mx-auto divide-y divide-gray-200 mb-3">
                    <thead>
                        <tr>
                            <th class="border border-slate-200">No</th>
                            <th class="border border-slate-200">Nama</th>
                            <th class="border border-slate-200">Email</th>
                            <th class="border border-slate-200">Pesan</th>
                            <th class="border border-slate-200">Tanggal</th>
                            <th class="border border-slate-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $no=1;
                        @endphp
                        @foreach($pesan as $terbaru)
                        <tr>
                        <td class="  border border-slate-200">{{$no++}}</td>
                        <td class="border border-slate-200">{{$terbaru->name}}</td>
                        <td class="border border-slate-200">{{$terbaru->email}}</td>
                        <td class="border border-slate-200">{{$terbaru->pesan}}</td>
                        <td class="border border-slate-200">{{$terbaru->created_at}}</td>
                        <td class="border border-slate-200"><form action="{{url('pesan/hapus')}}/{{$terbaru->id}}" method="post" enctype='multipart/form-data' >
                    @csrf 
                    @method('delete')
                        <button type="submit" class=" ml-2 px-4 shadow-lg bg-red-700 rounded-full text-white hover:bg-red-900">Delete</a>
                        </form></td>
                       
                            

                  
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