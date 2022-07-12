<x-app-layout>
    <div class="py-12">
        <div class="container">
            <div class="max-w-7xl sm:px-6 lg:px-8 bg-white">
                <div class="px-4">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-300">No</th>
                                <th class="border border-slate-300">Judul</th>
                                <th class="border border-slate-300">judul 2</th>
                                <th class="border border-slate-300">judul 3</th>
                                <th class="border border-slate-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $no=1;
                            @endphp
                            @foreach ($ten as $tentang)
                            <tr>
                                <td class="border border-slate-300">{{$no++}}</td>
                                <td class="border border-slate-300">{{$tentang->judul}}</td>
                                <td class="border border-slate-300">{{$tentang->keterangan}}</td>
                                <td class="border border-slate-300">{{$tentang->isi}}</td>
                                <td class="border border-slate-300">
                                    <a href="{{url('tentangedit')}}/{{$tentang->id}}" class="px-4 rounded-full shadow-md bg-yellow-400 hover:bg-green-300 text-white">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>