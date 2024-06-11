<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Soal</h1>
        </div>

        <form action="{{route('olimpiade.soal.update', $soals->id_soal)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Soal*</label>
                        </div>
                        <textarea type="text" name="soal" id="classic-editor"
                            class="flex-grow w-full shadow-sm text-sm rounded-md" required>
                            {{$soals->soal}}
                        </textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="subyek" class="block text-sm font-medium text-gray-600">Subyek</label>
                        </div>
                        <select id="subyek" name="subyek"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline">
                            <option class="font-medium text-sm" value="#">...</option>
                            @foreach ($subyeks as $subyek)
                            <option class="font-medium text-sm" value="{{$subyek->id_subyek}}" {{ $soals->id_subyek == $subyek->id_subyek ? 'selected' : '' }}>{{$subyek->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="urutan_soal" class="block text-sm font-medium text-gray-600">Urutan Soal</label>
                        </div>
                        <input type="number" name="urutan_soal" id="urutan_soal" value="{{ $soals->urutan_soal }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" placeholder="0">
                    </div>
                    <hr>
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Jawaban A</label>
                        </div>
                        <textarea type="text" name="jawaban[{{$jawabans[0]->id_jawaban}}]" id="classic-editor2"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{$jawabans[0]->jawaban}}
                        </textarea>
                        <div class="flex items
                        -center gap-4 mt-4">
                            <input type="checkbox" name="status_jawaban[{{$jawabans[0]->id_jawaban}}]" id="status_jawaban[0]" value="1" class="p-2 border border-gray w-4 h-4 shadow-sm text-sm rounded-md" {{ $jawabans[0]->status_jawaban == 1 ? 'checked' : ''}} >
                            <label for="status_jawaban" class="block text-sm font-medium text-gray-600">Jawaban Benar</label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Jawaban B</label>
                        </div>
                        <textarea type="text" name="jawaban[{{$jawabans[1]->id_jawaban}}]" id="classic-editor3"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{$jawabans[1]->jawaban}}
                        </textarea>
                        <div class="flex items
                        -center gap-4 mt-4">
                            <input type="checkbox" name="status_jawaban[{{$jawabans[1]->id_jawaban}}]" id="status_jawaban[1]" value="1" class="p-2 border border-gray w-4 h-4 shadow-sm text-sm rounded-md" {{ $jawabans[1]->status_jawaban == 1 ? 'checked' : ''}} >
                            <label for="status_jawaban" class="block text-sm font-medium text-gray-600">Jawaban Benar</label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Jawaban C</label>
                        </div>
                        <textarea type="text" name="jawaban[{{$jawabans[2]->id_jawaban}}]" id="classic-editor4"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{$jawabans[2]->jawaban}}
                        </textarea>
                        <div class="flex items
                        -center gap-4 mt-4">
                            <input type="checkbox" name="status_jawaban[{{$jawabans[2]->id_jawaban}}]" id="status_jawaban[2]" value="1" class="p-2 border border-gray w-4 h-4 shadow-sm text-sm rounded-md" {{$jawabans[2]->status_jawaban == 1 ? 'checked' : ''}} >
                            <label for="status_jawaban" class="block text-sm font-medium text-gray-600">Jawaban Benar</label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Jawaban D</label>
                        </div>
                        <textarea type="text" name="jawaban[{{$jawabans[3]->id_jawaban}}]" id="classic-editor5"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{$jawabans[3]->jawaban}}
                        </textarea>
                        <div class="flex items
                        -center gap-4 mt-4">
                            <input type="checkbox" name="status_jawaban[{{$jawabans[3]->id_jawaban}}]" id="status_jawaban[3]" value="1" class="p-2 border border-gray w-4 h-4 shadow-sm text-sm rounded-md" {{$jawabans[3]->status_jawaban == 1 ? 'checked' : ''}} >
                            <label for="status_jawaban" class="block text-sm font-medium text-gray-600">Jawaban Benar</label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Jawaban E</label>
                        </div>
                        <textarea type="text" name="jawaban[{{$jawabans[4]->id_jawaban}}]" id="classic-editor6"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{$jawabans[4]->jawaban}}
                        </textarea>
                        <div class="flex items
                        -center gap-4 mt-4">
                            <input type="checkbox" name="status_jawaban[{{$jawabans[4]->id_jawaban}}]" id="status_jawaban[4]" value="1" class="p-2 border border-gray w-4 h-4 shadow-sm text-sm rounded-md" {{$jawabans[4]->status_jawaban == 1 ? 'checked' : ''}} >
                            <label for="status_jawaban" class="block text-sm font-medium text-gray-600">Jawaban Benar</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{route('olimpiade.soal.index', $soals->id_ujian)}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmEdit(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout>