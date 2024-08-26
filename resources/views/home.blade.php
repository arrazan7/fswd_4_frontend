@extends('layouts.public')

@section('title', 'Home')

@section('content')
    <div class="relative">
        <img src="http://127.0.0.1:8000/storage/web/img_home.jpg" class="w-screen h-screen object-cover brightness-50" />
        <p class="absolute top-1/2 left-1/2 -translate-x-1/2 z-[1] text-3xl font-semibold text-white text-center">
            Selamat datang di Atourin!<br />Platform andalan Anda untuk
            merencanakan dan menikmati liburan impian.
        </p>
    </div>
    <div class="max-w-[1200px] mx-auto">
        <p class="text-3xl text-purple-800 text-center font-semibold py-5 mt-20">
            Paket Wisata Atourin
        </p>
        <div>
            <form action="{{ route('filter_travel') }}" method="POST" enctype="multipart/form-data"
                class="flex justify-around border-2 border-slate-400 rounded-lg py-8">
                @csrf
                <div class="relative inline-block">
                    <button type="button" data-dropdown-id="1"
                        class="border-2 border-purple-500 rounded-lg py-2 pl-5 pr-20 text-purple-500 appearance-none focus:outline-none focus:border-suitmedia"
                        onclick="toggleDropdown(this)">
                        Filter Destinasi
                    </button>
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                        &#9660;
                    </div>
                    <div id="dropdownOption1"
                        class="hidden absolute top-full left-0 right-0 bg-white min-w-full shadow-sm border-2 border-gray-300 rounded-lg z-[1] overflow-hidden">
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="lokasi1" name="lokasi1" value="Yogyakarta"
                                class="mt-px
                            mr-1" multiple
                                {{ in_array('Yogyakarta', $filter['lokasi']) ? 'checked' : '' }} />
                            <label for="lokasi1">Yogyakarta</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="lokasi2" name="lokasi2" value="Jakarta"
                                class="mt-px
                            mr-1" multiple
                                {{ in_array('Jakarta', $filter['lokasi']) ? 'checked' : '' }} />
                            <label for="lokasi2">Jakarta</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="lokasi3" name="lokasi3" value="Surakarta"
                                class="mt-px
                            mr-1" multiple
                                {{ in_array('Surakarta', $filter['lokasi']) ? 'checked' : '' }} />
                            <label for="lokasi3">Surakarta</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="lokasi4" name="lokasi4" value="Surabaya"
                                class="mt-px
                            mr-1" multiple
                                {{ in_array('Surabaya', $filter['lokasi']) ? 'checked' : '' }} />
                            <label for="lokasi4">Surabaya</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="lokasi5" name="lokasi5" value="Bandung"
                                class="mt-px
                            mr-1" multiple
                                {{ in_array('Bandung', $filter['lokasi']) ? 'checked' : '' }} />
                            <label for="lokasi5">Bandung</label>
                        </div>
                        <div class="flex justify-center py-3 px-4">
                            <button type="button" class="px-2 py-1 text-base text-slate-700" onclick="uncheckAll(this)">
                                Hapus
                            </button>
                            <button type="submit"
                                class="px-2 py-1 text-base text-white bg-purple-500 rounded-lg hover:bg-purple-800">
                                Terapkan
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block">
                    <button type="button" data-dropdown-id="2"
                        class="border-2 border-purple-500 rounded-lg py-2 pl-5 pr-20 text-purple-500 appearance-none focus:outline-none focus:border-suitmedia"
                        onclick="toggleDropdown(this)">
                        Filter Harga
                    </button>
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                        &#9660;
                    </div>
                    <div id="dropdownOption2"
                        class="hidden absolute top-full left-0 right-0 bg-white min-w-full shadow-sm border-2 border-gray-300 rounded-lg z-[1] overflow-hidden">
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="harga1" name="harga1" value="1" class="mt-px mr-1" multiple
                                {{ in_array(1, $filter['harga']) ? 'checked' : '' }} />
                            <label for="harga1">Rp0 - Rp50.000</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="harga2" name="harga2" value="2" class="mt-px mr-1" multiple
                                {{ in_array(2, $filter['harga']) ? 'checked' : '' }} />
                            <label for="harga2">Rp50.001 - Rp150.000</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="harga3" name="harga3" value="3" class="mt-px mr-1" multiple
                                {{ in_array(3, $filter['harga']) ? 'checked' : '' }} />
                            <label for="harga3">Rp150.001 - Rp300.000</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="harga4" name="harga4" value="4" class="mt-px mr-1" multiple
                                {{ in_array(4, $filter['harga']) ? 'checked' : '' }} />
                            <label for="harga4">Rp300.001 - Rp500.000</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="harga5" name="harga5" value="5" class="mt-px mr-1" multiple
                                {{ in_array(5, $filter['harga']) ? 'checked' : '' }} />
                            <label for="harga5">Rp500.001 - ...</label>
                        </div>
                        <div class="flex justify-center py-3 px-4">
                            <button type="button" class="px-2 py-1 text-base text-slate-700" onclick="uncheckAll(this)">
                                Hapus
                            </button>
                            <button type="submit"
                                class="px-2 py-1 text-base text-white bg-purple-500 rounded-lg hover:bg-purple-800">
                                Terapkan
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block">
                    <button type="button" data-dropdown-id="3"
                        class="border-2 border-purple-500 rounded-lg py-2 pl-5 pr-20 text-purple-500 appearance-none focus:outline-none focus:border-suitmedia"
                        onclick="toggleDropdown(this)">
                        Filter Keberangkatan
                    </button>
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                        &#9660;
                    </div>
                    <div id="dropdownOption3"
                        class="hidden absolute top-full left-0 right-0 bg-white min-w-full shadow-sm border-2 border-gray-300 rounded-lg z-[1] overflow-hidden">
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi1" name="durasi1" value="1" class="mt-px mr-1"
                                multiple {{ in_array(1, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi1">03:00 - 06:00</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi2" name="durasi2" value="2" class="mt-px mr-1"
                                multiple {{ in_array(2, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi2">06:01 - 09:00</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi3" name="durasi3" value="3" class="mt-px mr-1"
                                multiple {{ in_array(3, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi3">09:01 - 12:00</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi4" name="durasi4" value="4" class="mt-px mr-1"
                                multiple {{ in_array(4, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi4">12:01 - 15:00</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi5" name="durasi5" value="5" class="mt-px mr-1"
                                multiple {{ in_array(5, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi5">15:01 - 18:00</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi6" name="durasi6" value="6" class="mt-px mr-1"
                                multiple {{ in_array(6, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi6">18:01 - 21:00</label>
                        </div>
                        <div class="flex items-center py-3 px-4 border-b hover:bg-slate-300">
                            <input type="checkbox" id="durasi7" name="durasi7" value="7" class="mt-px mr-1"
                                multiple {{ in_array(7, $filter['durasi']) ? 'checked' : '' }} />
                            <label for="durasi7">21:01 - 23:59</label>
                        </div>
                        <div class="flex justify-center py-3 px-4">
                            <button type="button" class="px-2 py-1 text-base text-slate-700" onclick="uncheckAll(this)">
                                Hapus
                            </button>
                            <button type="submit"
                                class="px-2 py-1 text-base text-white bg-purple-500 rounded-lg hover:bg-purple-800">
                                Terapkan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="grid grid-cols-4 gap-5 my-10">
            @forelse ($data as $json)
                <div class="relative rounded-lg overflow-hidden group">
                    <div src="http://127.0.0.1:8000/storage/travel/{{ $json['photo'] }}" alt="{{ $json['name'] }}"
                        onclick="showModal(this)"
                        class="absolute cursor-pointer top-0 right-0 translate-x-full -translate-y-full w-24 h-24 bg-yellow-400 z-[2] -rotate-45 group-hover:translate-x-1/2 group-hover:-translate-y-1/2 transition-transform duration-500 delay-500">
                        <i class="fa-solid fa-magnifying-glass rotate-45 text-3xl mt-8 ml-1"></i>
                    </div>
                    <a href="{{ route('create_booking', ['id_travel' => $json['id']]) }}">
                        <div class="rounded-lg">
                            <div class="w-full h-48 rounded-lg overflow-hidden">
                                <img id="img{{ $json['id'] }}"
                                    src="http://127.0.0.1:8000/storage/travel/{{ $json['photo'] }}"
                                    class="w-full h-full object-cover object-center scale-125 group-hover:scale-100 transition-transform duration-500" />
                            </div>
                            <p class="text-xs text-slate-500 mt-2">
                                <i class="fa-solid fa-plane-departure" style="color: #eab308">
                                    {{ $json['departure'] }}</i>
                                go to {{ $json['destination'] }}
                            </p>
                            <p class="text-base text-slate-800 font-semibold">
                                {{ $json['name'] }}
                            </p>
                            <div class="text-right">
                                <p class="inline-block py-1 px-2 bg-purple-800 rounded-lg text-white">
                                    Rp<?php echo number_format($json['price'], 0, ',', '.'); ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-4 text-xl text-center text-red-600 font-bold">
                    Data Paket Destinasi belum Tersedia.
                </div>
            @endforelse
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="hidden fixed z-[5] pt-24 left-0 top-0 w-full h-full overflow-auto bg-black">
        <span onclick="closeModal()"
            class="absolute top-4 right-9 text-slate-400 text-3xl font-bold duration-300 hover:text-slate-100 hover:no-underline hover:cursor-pointer focus:text-slate-100 focus:no-underline focus:cursor-pointer">&times;</span>
        <img class="m-auto block w-full max-w-[1000px] animate-zoom" id="imgModal">
        <div id="caption"
            class="m-auto text-4xl block w-full max-w-[1000px] text-center text-slate-200 py-3 h-36 animate-zoom">
        </div>
    </div>

    <script src="https://kit.fontawesome.com/1fe05764da.js" crossorigin="anonymous"></script>
    <script>
        // Membuka atau menutup dropdown berdasarkan elemen yang diklik
        function toggleDropdown(button) {
            const dropdownId = button.getAttribute("data-dropdown-id");
            const dropdownContent = document.getElementById(
                "dropdownOption" + dropdownId
            );
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        }

        // Menutup dropdown jika user klik di luar elemen, tetapi tidak menutup jika user klik pada checkbox
        window.onclick = function(event) {
            // Dapatkan semua elemen dropdown di halaman
            const dropdowns = document.querySelectorAll(
                "[id^='dropdownOption']"
            );

            // Iterasi melalui setiap dropdown
            dropdowns.forEach((dropdown) => {
                const dropdownId = dropdown.id;
                const buttonSelector = `[data-dropdown-id='${dropdownId.replace(
                    "dropdownOption",
                    ""
                )}']`;

                if (
                    !event.target.closest(buttonSelector) &&
                    !event.target.closest(`#${dropdownId}`)
                ) {
                    if (dropdown.style.display === "block") {
                        dropdown.style.display = "none";
                    }
                }
            });
        };

        // Fungsi untuk meng-uncheck semua checkbox di dalam dropdown tertentu
        function uncheckAll(button) {
            const dropdownContent = button
                .closest(".relative")
                .querySelector("[id^='dropdownOption']");
            const checkboxes = dropdownContent.querySelectorAll(
                "input[type='checkbox']"
            );
            checkboxes.forEach((checkbox) => {
                checkbox.checked = false;
            });
        }
    </script>
    <script>
        function showModal(element) {
            // Get the modal
            var modal = document.getElementById('myModal');
            modal.style.display = "block";

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var modalImg = document.getElementById("imgModal");
            var captionText = document.getElementById("caption");

            var src = element.getAttribute('src');
            var alt = element.getAttribute('alt');
            modalImg.src = src;
            captionText.innerHTML = alt;

        }

        // When the user clicks on <span> (x), close the modal
        function closeModal() {
            // Get the modal
            var modal = document.getElementById('myModal');
            modal.style.display = "none";
        }
    </script>
@endsection
