@extends('template/web')

@section('index')
    <div class="registrasi">
        <div class="regis__content py-5">
            <div class="regis__forms">

                <form action="{{ route('storeForm') }}" method="post" class="regis__registre needs-validation"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <center><img src="{{ url('img/himsi-unsri.png') }}" width="180" alt=""></center>
                    <br>

                    <h1 class="regis__title fw-bold fs-2">FORMULIR PENDAFTARAN <br> BPH HIMSI UNSRI 2025</h1>
                    <hr><br>

                    <div class="alert alert-primary text-center" role="alert">
                        Isi Formulir Pendaftaran ini dengan Lengkap dan Benar!
                    </div>
                    <br>

                    <div class="tagline"><span> DATA DIRI </span></div>
                    <br>

                    <div class="regis__box">
                        <i class='bx bxs-id-card regis__icon'></i>
                        <input type="text" name="nim" placeholder="NIM" value="{{ $mhs['nim'] }}"
                            class="regis__input form-control" minlength="14" maxlength="14" readonly required>
                    </div>
                    @error('nim')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <div class="regis__box">
                        <i class='bx bxs-user regis__icon'></i>
                        <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ $mhs['nama'] }}"
                            class="regis__input form-control" readonly required>
                    </div>
                    @error('nama')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <div class="regis__box">
                        <i class='bx bxs-calendar regis__icon'></i>
                        <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir : &nbsp"
                            value="{{ old('tgl_lahir', date('Y-m-d')) }}" class="regis__input form-control"
                            title="Tanggal Lahir" min="2001-01-01" max="2008-12-31" required>
                    </div>                    
                    @error('tgl_lahir')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <div class="regis__box">
                        <i class='bx bxs-graduation regis__icon'></i>
                        <input type="text" name="prodi" placeholder="Program Studi"
                            value="Sistem Informasi {{ $mhs['akt'] }}" class="regis__input form-control" readonly
                            required>
                    </div>
                    <br>
                    @error('prodi')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <select id="kelas" name="kelas" class="form-select regis__input form-control py-3" required>
                        <option value="" selected disabled hidden>Pilih Kelas...</option>
                        <option {{ old('kelas') === 'Sistem Informasi Reguler A' ? 'selected' : '' }}
                            value="Sistem Informasi Reguler A">SI Reguler A</option>
                        <option {{ old('kelas') === 'Sistem Informasi Reguler B' ? 'selected' : '' }}
                            value="Sistem Informasi Reguler B">SI Reguler B</option>
                        <option {{ old('kelas') === 'Sistem Informasi Reguler C' ? 'selected' : '' }}
                            value="Sistem Informasi Reguler C">SI Reguler C</option>
                        <option {{ old('kelas') === 'Sistem Informasi Bilingual A' ? 'selected' : '' }}
                            value="Sistem Informasi Bilingual A">SI Bilingual A</option>
                        <option {{ old('kelas') === 'Sistem Informasi Bilingual A' ? 'selected' : '' }}
                            value="Sistem Informasi Bilingual B">SI Bilingual B</option>
                    </select>

                    <br>
                    <div class="tagline"><span> ASAL DOMISILI </span></div>
                    <br><br>

                    <!-- Terhubung ke database provinsi -->
                    <select id="provinsi" name="provinsi" class="form-select regis__input form-control py-3" required>
                        <option value="" selected disabled hidden>Pilih Provinsi...</option>
                        @foreach ($provinces as $p)
                            <option value="{{ $p['id'] }},{{ $p['name'] }}"
                                {{ old('provinsi') == $p['id'] ? 'selected' : '' }}>
                                {{ $p['name'] }}
                            </option>
                        @endforeach
                    </select>

                    <img src="{{ url('img/loading.gif') }}" width="35" id="load1" style="display:none;" />

                    <br>

                    <select id="kota" name="kota" class="form-select regis__input form-control py-3" required>
                        <option value="" selected disabled hidden>Pilih Kota/Kabupaten...</option>
                    </select>

                    <br>
                    <div class="tagline"><span> TUGAS DEPARTEMEN/DIVISI </span></div>
                    <br>

                    <button type="button" class="regis__button text-white mb-3 mt-3" data-bs-toggle="modal"
                        data-bs-target="#tugas">
                        LIHAT TUGAS DEPARTEMEN/DIVISI
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="tugas" tabindex="-1" aria-labelledby="tugas" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container-md">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tugas">
                                        List Tugas Departemen/Divisi
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body"
                                    style="
                                    text-align: left;
                                    font-size: 0.938rem !important;
                                ">
                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> SEMUA
                                        PESERTA
                                    </h3>
                                    <p>
                                        Mem-follow IG HIMSI UNSRI yaitu
                                        <a href="https://www.instagram.com/himsiunsri" target="_blank">@himsiunsri</a>.
                                    </p>
                                    <br>
                                    <hr />

                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN
                                        BISTRA
                                    </h3>

                                    <p>
                                        Follow Instagram BISTRA
                                                <a href="https://www.instagram.com/himsi.store/" target="_blank">@himsi.store</a>.
                                    </p>
                                    <ul>
                                        <li>
                                            Buatlah Business Model Canvas dari suatu perusahaan yang ada di Indonesia!
                                        </li>
                                        <li>
                                            Buat ide makanan manis, makanan asin, minuman dan merchandise masing masing 3! 
                                        </li>
                                    </ul>

                                    <br>
                                    <hr />

                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN PSDM
                                    </h3>
                                    <p>Mengerjakan tes psikologi yang telah disediakan dengan penuh konsentrasi dan kejujuran</p>

                                    <br>
                                    <hr />

                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN
                                        MEDINFO (DIVISI MULMED)
                                    </h3>
                                    Membuat Design Poster ukuran A4, serta mengirimkan portofolio design yang pernah dibuat.
                                    <ul>
                                        <br>
                                        <li><span style="font-weight: 800;">Opsional :</span> mengirimkan 1 video biasa / video animasi terbaik yang pernah dibuat.</li>
                                        <li>Design poster dibuat dengan memilih salah satu tema berikut:
                                            <ul>
                                                <li>“Teknologi di era society 5.0”</li>
                                                <li>"Nusantara"</li>
                                            </ul>
                                        </li>
                                        <li>Design Poster juga wajib dibuat menggunakan salah satu konsep desain berikut:
                                            <ul>

                                                <li>Glassmorphism/Abstract Gradients</li>
                                                <li>Retro/Vintage</li>
                                                <li>Futuristic</li>
                                            </ul>
                                        </li>
                                        <br>
                                        File di-upload ke folder GDrive yang telah disediakan, dengan membuat folder baru dengan format (Nama_Kelas).
                                    </ul>

                                    <br>
                                    <hr />
                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN KASTRAD
                                    </h3>
                                    <p>Mem-follow IG KASTRAD HIMSI UNSRI yaitu
                                        <a href="https://www.instagram.com/himsi.kastrad/" target="_blank">@himsi.kastrad
                                        </a>.
                                    </p>

                                    <p><b>SS Dan Kumpulkan bukti</b></p>
                                    <br>
                                    <hr />
                                    
                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN KESTARI
                                    </h3>
                                    <p>Peserta diminta untuk menyusun proposal sesuai dengan tema kegiatan yang telah ditentukan.</p>
                                    <ul>
                                        <li>
                                            Peserta <span style="font-weight: 800;">DIWAJIBKAN</span> menyusun proposal yang sesuai dengan asset design yang telah disediakan.
                                        </li>
                                        <li>
                                            Rincian Tugas Dapat Dilihat Melalui Buku Panduan Yang Telah Disediakan : 
                                        </li>
                                        <a href="https://docs.google.com/document/d/1-i7Ns_7HqU5ab5SU-CdB5yr63z4tVgCEiODNwdPEHU0/edit?tab=t.0"
                                                    target="_blank" style="font-weight: 800">Panduan Pelaksanaan Tugas Departemen Kestari</a>
                                        <br>
                                    </ul>
                                    <p>Proposal dikumpulkan dalam format PDF (.pdf) melalui link pengumpulan tugas yang tersedia.</p>
                                    
                                    <br />
                                    <hr />
                                    
                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN PMB
                                        (DIVISI OLAHRAGA DAN SENI)
                                    </h3>
                                    <p>
                                        Mem-follow IG PMB HIMSI UNSRI yaitu
                                        <a href="https://www.instagram.com/himsi.pmb" target="_blank">@himsi.pmb</a>.
                                    </p>
                                    <p>Mengerjakan Tugas Sesuai Dengan Arahan yang Diberikan Dalam Buku Panduan Pelaksanaan Tugas Departemen PMB:</p>
                                    <ul>
                                        
                                            <a href="https://docs.google.com/document/d/1p8vsmQjN0sJFn_TcRq28QxUR6IBpnSI917ubYwBT7bE/edit?usp=sharing"
                                                    target="_blank" style="font-weight: 800">Panduan Pelaksanaan Tugas Departemen PMB</a>
                                    </ul>

                                    <br />
                                    <hr />

                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN
                                        RISTEK (DIVISI AKADEMIK)
                                    </h3>
                                    <p>Mem-follow IG RISTEK HIMSI UNSRI yaitu
                                        <a href="https://www.instagram.com/himsi.ristek" target="_blank">@himsi.ristek
                                        </a>.
                                    </p>
                                    {{-- <p>
                                        Tugas akan dikumpulkan pada
                                        saat melakukan wawancara dalam bentuk hardcopy yang berisikan data sebagai berikut :
                                    </p>
                                    <ul>
                                        <li>Mencari kontak dosen Sistem Informasi minimal 10 dan kontak admin jurusan Sistem
                                            Informasi.</li>
                                        <li>Mencari akun sosial media yang menyediakan info info akademik seperti
                                            beasiswa,lomba,webinar dll minimal 10.</li>
                                    </ul> --}}
                                    <p><b>SS Dan Kumpulkan bukti </b></p>
                                    <br>
                                    <hr />
                                    
                                    <h3 class="fs-5 fw-bolder">
                                        <i class="bx bx-paper-plane"></i> DEPARTEMEN
                                        RISTEK (DIVISI PTI)
                                    </h3>
                                    <p>
                                        Membuat website sesuai dengan kreatifitas anda dengan beberapa ketentuan
                                        sebagai berikut :
                                    </p>
                                    <ul>
                                        <li>Tanpa menggunakan CSS framework.</li>
                                        <li>
                                            Penggunaan library javaScript untuk menunjang tampilan website
                                            diperbolehkan.
                                        </li>
                                        <li>
                                            Website dilengkapi dengan fitur CRUD sederhana (Opsional).
                                        </li>
                                        <li>
                                            Struktur folder file yang tertata dengan rapi akan menjadi nilai tambah.
                                        </li>
                                        <li>
                                            Bentuk/format file yang akan di-upload adalah file kompres (.zip/.rar).
                                        </li>
                                    </ul>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <br>
                    <div class="tagline"><span> PILIHAN DEPARTEMEN/DIVISI PERTAMA </span></div>
                    <br>

                    <select id="pil1" name="pil1" class="form-select regis__input form-control py-3" required>
                        <option value="" selected disabled hidden>Pilih Departemen/Divisi Pertama...</option>
                        <option {{ old('pil1') === 'Bistra' ? 'selected' : '' }} value="Bistra">DEPARTEMEN BISTRA (Bisnis dan
                            Kemitraan)</option>
                        <option {{ old('pil1') === 'Medinfo_Humas' ? 'selected' : '' }} value="Medinfo_Humas">DEPARTEMEN
                            MEDINFO (Media dan Informasi) - Divisi HUMAS (Hubungan Masyarakat)</option>
                        <option {{ old('pil1') === 'Medinfo_Mulmed' ? 'selected' : '' }} value="Medinfo_Mulmed">DEPARTEMEN
                            MEDINFO (Media dan Informasi) - Divisi MULMED (Multimedia)</option>
                        <option {{ old('pil1') === 'Kastrad_Kastrat' ? 'selected' : '' }} value="Kastrad_Kastrat">Departemen KASTRAD (Kajian Strategi dan Advokasi) - Divisi Kastrat (Kajian Strategi)</option>
                        <option {{ old('pil1') === 'Kastrad_Adkesma' ? 'selected' : '' }} value="Kastrad_Adkesma">Departemen KASTRAD (Kajian Strategi dan Advokasi) - Divisi Adkesma (Advokasi Kesejahteraan Mahasiswa)</option>
                        <option {{ old('pil1') === 'Kestari' ? 'selected' : '' }} value="Kestari">DEPARTEMEN KESTARI
                            (Kesekretariatan)</option>
                        <option {{ old('pil1') === 'PMB_Seni' ? 'selected' : '' }} value="PMB_Seni">DEPARTEMEN PMB
                            (Pengembangan Minat Bakat) - Divisi Seni</option>
                        <option {{ old('pil1') === 'PMB_Olahraga' ? 'selected' : '' }} value="PMB_Olahraga">DEPARTEMEN PMB
                            (Pengembangan Minat Bakat) - Divisi Olahraga</option>
                        <option {{ old('pil1') === 'PSDM' ? 'selected' : '' }} value="PSDM">DEPARTEMEN PSDM (Pengembangan
                            Sumber Daya Mahasiswa)</option>
                        <option {{ old('pil1') === 'Ristek_Akademik' ? 'selected' : '' }} value="Ristek_Akademik">DEPARTEMEN
                            RISTEK (Riset dan Teknologi) - Divisi Akademik</option>
                        <option {{ old('pil1') === 'Ristek_PTI' ? 'selected' : '' }} value="Ristek_PTI">DEPARTEMEN RISTEK
                            (Riset dan Teknologi) - Divisi PTI (Pengembangan Teknologi Informasi)</option>
                    </select>

                    <div class="">
                        <label for="alasan1" class="field prepend-icon">
                            <textarea class="gui-textarea form-control pt-3" id="alasan1" name="alasan1" placeholder="Alasan" cols="54"
                                rows="6" style="border: none; outline: none; padding: 1rem; border-radius: .5rem;" required>{{ old('alasan1') }}</textarea>
                            <div class="alert alert-dark text-center" role="alert">
                                Tulis Alasan Kamu Memilih Departemen/Divisi Ini!
                            </div>
                        </label>
                    </div>

                    <br>

                    <div class="tagline"><span> PILIHAN DEPARTEMEN/DIVISI KEDUA </span></div><br><br>

                    <div class="alert alert-danger text-center" role="alert">
                        Kamu diwajibkan memilih 2 Departemen/divisi!
                    </div>

                    <select id="pil2" name="pil2" class="form-select regis__input form-control py-3" required>
                        <option value="" selected disabled hidden>Pilih Departemen/Divisi Pertama...</option>
                        <option {{ old('pil2') === 'Bistra' ? 'selected' : '' }} value="Bistra">DEPARTEMEN BISTRA (Bisnis dan
                            Kemitraan)</option>
                        <option {{ old('pil2') === 'Medinfo_Humas' ? 'selected' : '' }} value="Medinfo_Humas">DEPARTEMEN
                            MEDINFO (Media dan Informasi) - Divisi HUMAS (Hubungan Masyarakat)</option>
                        <option {{ old('pil2') === 'Medinfo_Mulmed' ? 'selected' : '' }} value="Medinfo_Mulmed">DEPARTEMEN
                            MEDINFO (Media dan Informasi) - Divisi MULMED (Multimedia)</option>
                        <option {{ old('pil2') === 'Kastrad_Kastrat' ? 'selected' : '' }} value="Kastrad_Kastrat">Departemen KASTRAD (Kajian Strategi dan Advokasi) - Divisi Kastrat (Kajian Strategi)</option>
                        <option {{ old('pil2') === 'Kastrad_Adkesma' ? 'selected' : '' }} value="Kastrad_Adkesma">Departemen KASTRAD (Kajian Strategi dan Advokasi) - Divisi Adkesma (Advokasi Kesejahteraan Mahasiswa)</option>
                        <option {{ old('pil2') === 'Kestari' ? 'selected' : '' }} value="Kestari">DEPARTEMEN KESTARI
                            (Kesekretariatan)</option>
                        <option {{ old('pil2') === 'PMB_Seni' ? 'selected' : '' }} value="PMB_Seni">DEPARTEMEN PMB
                            (Pengembangan Minat Bakat) - Divisi Seni</option>
                        <option {{ old('pil2') === 'PMB_Olahraga' ? 'selected' : '' }} value="PMB_Olahraga">DEPARTEMEN PMB
                            (Pengembangan Minat Bakat) - Divisi Olahraga</option>
                        <option {{ old('pil2') === 'PSDM' ? 'selected' : '' }} value="PSDM">DEPARTEMEN PSDM (Pengembangan
                            Sumber Daya Mahasiswa)</option>
                        <option {{ old('pil2') === 'Ristek_Akademik' ? 'selected' : '' }} value="Ristek_Akademik">DEPARTEMEN
                            RISTEK (Riset dan Teknologi) - Divisi Akademik</option>
                        <option {{ old('pil2') === 'Ristek_PTI' ? 'selected' : '' }} value="Ristek_PTI">DEPARTEMEN RISTEK
                            (Riset dan Teknologi) - Divisi PTI (Pengembangan Teknologi Informasi)</option>
                    </select>

                    <div class="">
                        <label for="alasan2" class="field prepend-icon">
                            <textarea class="gui-textarea form-control pt-3" id="alasan2" name="alasan2" placeholder="Alasan" cols="54"
                                rows="6" style="border: none; outline: none; padding: 1rem; border-radius: .5rem;" required>{{ old('alasan2') }}</textarea>
                            <div class="alert alert-dark text-center" role="alert">
                                Tulis Alasan Kamu Memilih Departemen/Divisi Ini!
                            </div>
                        </label>
                    </div>

                    <br>
                    <div class="tagline"><span> TAMBAHAN </span></div>
                    <br>

                    <div class="regis__box">
                        <i class='bx bxs-conversation regis__icon'></i>
                        <input type="text" name="idline" id="idline"
                            class="form-control regis__input regis__input__add" placeholder="ID LINE"
                            value="{{ old('idline') }}" required>
                    </div>
                    @error('idline')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <div class="regis__box">
                        <i class='bx bxl-instagram-alt regis__icon'></i>
                        <input type="text" name="instagram" id="instagram"
                            class="form-control regis__input regis__input__add" placeholder="Username Instagram"
                            value="{{ old('instagram') }}" required>
                    </div>
                    @error('instagram')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <div class="">
                        <label for="tentang" class="field prepend-icon">
                            <textarea class="gui-textarea form-control pt-3" id="tentang" name="tentang" placeholder="Tentang Diri Kamu"
                                cols="54" rows="6" style="border: none; outline: none; padding: 1rem; border-radius: .5rem;" required>{{ old('tentang') }}</textarea>
                            <div class="alert alert-dark text-center" role="alert">
                                Jelasin Tentang Diri Kamu!
                            </div>
                        </label>
                    </div>

                    <br>
                    <div class="tagline"><span> JADWAL WAWANCARA </span></div>
                    <br><br>

                    <select id="wawancara" name="wawancara" class="form-select regis__input form-control py-3" required>
                        <option value="" selected disabled hidden>Pilih Jadwal dan Lokasi Wawancara...</option>
                        <option {{ old('wawancara') === 'Indralaya' ? 'selected' : '' }} value="Indralaya">Indralaya.
                            Jumat, 31 Januari 2025</option>
                        <option {{ old('wawancara') === 'Palembang' ? 'selected' : '' }} value="Palembang">Palembang
                            (Bukit). Sabtu, 1 Febuari 2025</option>
                    </select>

                    <br>
                    <div class="tagline"><span> UPLOAD FOTO, KHS, & BUKTI FOLLOW </span></div>
                    <br><br>

                    <div class="alert alert-primary text-left pt-4" role="alert">
                        <p>
                            Kamu wajib mengupload: <br>
                            <i class='bx bx-paperclip'></i>&nbsp;&nbsp;Pas Foto (Formal)<br>
                            <i class='bx bx-paperclip'></i>&nbsp;&nbsp;Bukti (Screenshot) Follow Instagram & TikTok HIMSI (<a
                                href="https://www.instagram.com/himsiunsri" target="_blank">Instagram</a> & <a
                                href="https://www.tiktok.com/@himsiunsri?_t=ZS-8t8fHjiIToe&_r=1" target="_blank">Tiktok</a>)<br>
                            <i class='bx bx-paperclip'></i>&nbsp;&nbsp;KHS (Kartu Hasil Studi) Semester Kemarin<br>
                            <br>
                            File Pas Foto dan Bukti (Screenshot) ber-ekstensi <strong>".jpg/.jpeg/.png"</strong>. <br>
                            File KHS ber-ekstensi <strong>".pdf/.docx/.doc"</strong>.
                            <br><br>
                            Seluruh File yang diupload tidak boleh lebih dari <strong>5 MB</strong>.
                        </p>
                    </div>

                    <div class="regis__box__file">
                        <p><b>Maksimal Ukuran File 4MB<b/></p>
                        <label for="foto" class="field prepend-icon">Pilih File Pas Foto (Formal) &raquo;
                            <small><b>.jpg/.jpeg/.png</b></small></label><br><br>
                        <input type="file" name="foto" id="foto" class="desktop gui-input upload__box"
                            accept="image/jpg,image/jpeg,image/png" placeholder="Pilih FIle Foto" required>
                        <br>
                        @error('foto')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror

                        <label for="ss" class="field prepend-icon">Pilih File Bukti (Screenshot) &raquo;
                            <small><b>.jpg/.jpeg/.png</b></small></label><br><br>
                        <input type="file" name="bukti_ss" id="bukti_ss" class="desktop gui-input upload__box"
                            accept="image/jpg,image/jpeg,image/png" placeholder="Pilih File Bukti ScreenShoot" required>
                        <br>

                        <label for="khs" class="field prepend-icon">Pilih File KHS &raquo;
                            <small><b>.pdf/.doc/.docx</b></small></label><br><br>
                        <input type="file" name="khs" id="khs" class="desktop gui-input upload__box"
                            accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            placeholder="Pilih FIle KHS" required>
                    </div>
                    <br>

                    <div class="tagline"><span> BUAT PASSWORD </span></div>
                    <br>

                    <div class="regis__box">
                        <i class='bx bxs-lock-alt regis__icon'></i>
                        <input type="password" name="password" placeholder="Buat Password"
                            class="regis__input form-control" required>
                    </div>
                    <div class="form-text text-danger">Diharapkan untuk mengingat password anda!</div>

                    <div class="form-check mt-5">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Kesempatan mengisi data hanya 1 kali. Harap pastikan data yang diisi sudah benar dan sesuai!
                        </label>
                    </div>

                    <center>
                        <div class="form-footer">
                            <button type="submit" class="button regis__button block pushed expand" name="kirim_data">
                                Kirim Data </button>
                        </div>
                    </center>

                    <center>
                        <div class="form-footer" style="margin-top: 4rem;">
                            <!--<button type="submit" class="button btn-primary block pushed expand"> LANJUTKAN </button> -->
                            <p style="color: black">Created by <a href="#"> DEPARTEMEN RISTEK - Divisi PTI</a></p>
                        </div>
                    </center>

                </form>

            </div>
        </div>
    </div>
@endsection
