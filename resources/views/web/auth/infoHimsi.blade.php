@extends('template/web')

@section('index')

    <div id="infoRegist">
        <div class="registrasi">
            <div class="regis__content py-5">
                <div class="regis__forms">
                    <div class="regis__registre">
                        <img src="{{ url('img/himsi-unsri.png') }}" alt="" width="180px;"
                            style="margin: auto; display: block" /><br />

                        <h1 class="regis__title fw-bold fs-2 mb-2">TERIMA KASIH</h1>
                        <center style="font-size: 1rem; font-weight: 500">
                            Berkas kamu telah diterima. Harap hubungi admin jika terjadi
                            kesalahan.
                        </center>

                        <hr />
                        <br />

                        <div class="please-read">
                            <div class="alert alert-danger text-center text-danger fw-bold" role="alert">
                                HARAP UNTUK DIBACA!!!
                            </div>
                            <ol>
                                <li>
                                    Peserta diwajibkan untuk bergabung di grup LINE.
                                </li>
                                <li>
                                    Peserta diwajibkan untuk membuat tugas sesuai
                                    departemen/divisi pilihannya (jika ada).
                                </li>
                                <li>
                                    Peserta diwajibkan untuk memasang twibbon dan
                                    mempostingnya ke akun Instagram-nya masing-masing.
                                </li>
                                <li>
                                    Peserta yang berdomisili di Kota Palembang
                                    <b>diwajibkan</b> mengikuti tes wawancara secara
                                    offline, jika berhalangan silakan hubungi admin atau
                                    contact person.
                                </li>
                            </ol>
                            <p
                                style="
                            color: red;
                            font-size: 12px;
                            letter-spacing: 2px;
                            margin-top: -5px;
                            margin-left: 15px;
                        ">
                                ** Lakukan login apabila ingin mengakses laman ini kembali
                            </p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="regis__button text-white mb-3" data-bs-toggle="modal"
                            data-bs-target="#grupLine">
                            JOIN GRUP LINE
                        </button>

                        <!-- Button trigger modal -->
                        <button type="button" class="regis__button text-white mb-3 mt-3" data-bs-toggle="modal"
                            data-bs-target="#tugas">
                            LIHAT TUGAS DEPARTEMEN/DIVISI
                        </button>

                        <a href="https://drive.google.com/drive/folders/1W_AOoxIGMqXEIc1El_212TEgQ3W3INeN?usp=drive_link"
                            class="regis__button text-white mb-3 mt-3" style="text-decoration: none" target="_blank">
                            DOWNLOAD TWIBBON</a>

                        <button type="button" class="regis__button text-white mb-3 mt-3" data-bs-toggle="modal"
                            data-bs-target="#admin">
                            HUBUNGI ADMIN
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
                                        <p>Mem-follow IG BISTRA HIMSI UNSRI yaitu
                                            <a href="https://www.instagram.com/himsi.store" target="_blank">@himsi.store
                                            </a>.
                                        </p>
                                        <ul>
                                            <li>
                                                Buatlah Business Model Canvas dari suatu perusahaan yang ada di Indonesia! (kirim dalam bentuk pdf)
                                            </li>
                                            <li>
                                                Buat ide makanan manis, makanan asin, minuman dan merchandise masing masing 3! (kirim dalam bentuk pdf)
                                            </li>
                                        </ul>

                                        <p>Kirimkan Dalam Bentuk Zip melalui tempat upload yang sudah disediakan dibawah</p>

                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe-_QGTqasv7OvpRwg1fES3CXk2K-h66cuiJ-_3b1mtb8R7tg/viewform"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <hr />

                                        <h3 class="fs-5 fw-bolder">
                                            <i class="bx bx-paper-plane"></i> DEPARTEMEN PSDM
                                        </h3>
                                        <p>Mengerjakan tes psikologi yang telah disediakan dengan penuh konsentrasi dan kejujuran!</p>

                                        <i class="bx bx-link"></i>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdmyGigESS8DoRYXBC2HoGpJ8oU626qDkq8MdUuAFJjBzJ0oQ/viewform?usp=header"
                                            target="_blank">Link Pengerjaan Tugas</a>
                                        <br>
                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br /> --}}
                                        <hr />
                                        

                                        <h3 class="fs-5 fw-bolder">
                                            <i class="bx bx-paper-plane"></i> DEPARTEMEN
                                            MEDINFO (DIVISI MULMED)
                                        </h3>
                                        <ul>
                                            <li>Mengirimkan 1 video biasa/ video animasi terbaik yang pernah dibuat</li>
                                            <li>Mengumpulkan 1 desain terbaik yang pernah dibuat.</li>
                                            <li>WAJIB : Mengumpulkan 1 desain poster A4 terbaru dengan tema (pilih salah
                                                satu):
                                                <ul>
                                                    <li>“Teknologi”</li>
                                                    <li>"Budaya Indonesia"</li>
                                                </ul>
                                                Dan dengan pilihan konsep desain (pilih salah satu):
                                                <ul>

                                                    <li>Neon/Futuristic</li>
                                                    <li>Abstract Geometric/Abstract Gradient </li>
                                                    <li>Retro/Vintage</li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>*File di simpan dengan format nama <br> (ex: Nama_Video, Nama_Poster,
                                                Nama_Portofolio).</li>
                                        </ul>
                                        <p>
                                            <b>File di-upload ke folder GDrive yang
                                                telah disediakan (link di bawah ini) dengan membuat folder baru
                                                dengan format (Nama_Kelas).</b>
                                        </p>
                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://drive.google.com/drive/folders/1RUs_xNHrIuCUoz3SwdDHRZbpOvX8G7QP?usp=drive_link"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>

                                        <br />
                                        <hr />

                                        <h3 class="fs-5 fw-bolder">
                                            <i class="bx bx-paper-plane"></i> DEPARTEMEN KASTRAD
                                        </h3>
                                        <p>Mem-follow IG KASTRAD HIMSI UNSRI yaitu
                                            <a href="https://www.instagram.com/himsi.kastrad/" target="_blank">@himsi.kastrad
                                            </a>.
                                        </p>
                                        <br>

                                        <p><b>SS Dan Kumpulkan bukti :</b></p>
                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://drive.google.com/drive/folders/19LVU3h860ftYr2fXID3VTpemj4xArAfX"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>
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
                                        
                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://drive.google.com/drive/folders/1OzFIH1k5033_BOCXAvlamaOdbWm0QwsN?usp=drive_link"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>
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

                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://drive.google.com/drive/folders/1f5CcyZKh_tNsPVdF1cBZMA9DZG5lDgkO?usp=drive_link"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>

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

                                        <p><b>SS Dan Kumpulkan bukti :</b></p>
                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://drive.google.com/drive/folders/1SvMwU52OEbUy4XiczlO7kmyrVbbGQ1Fg"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>

                                        <br />

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

                                        {{-- <i class="bx bx-link"></i>
                                        <a href="https://drive.google.com/drive/folders/1cnReJTVoHhlwbHHo19emS-mdS9kHx55n?usp=sharing"
                                            target="_blank">Link Pengumpulan Tugas</a>
                                        <br> --}}
                                        <i class="bx bx-link"></i>
                                        <a href="https://forms.gle/28PDEYg7i9z2ovL49"
                                            target="_blank">Link Pengumpulan Tugas</a>
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

                        <!-- Admin Modal -->
                        <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="admin" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content container-md">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="admin">
                                            Admin
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body"
                                        style="
                                    text-align: left;
                                    font-size: 0.938rem !important;
                                ">
                                        <center>
                                        <p>
                                            Klik atau scan barcode di bawah ini untuk menghubungi via Line
                                        </p>
                                        <a href="https://line.me/ti/p/a4hGo3O5OI" target="_blank">
                                            <img border="0" src="{{ url('img/admin_barcode.jpg') }}" width="170"
                                                height="170" /></a>

                                        <hr>
                                        <a href="https://wa.me/6281279730993" target="_blank">
                                            <p>
                                                Hubungi via WhatsApp
                                            </p>
                                        </a>
                                        </center>
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

                        <!-- BPH Group Modal -->
                        <div class="modal fade" id="grupLine" tabindex="-1" aria-labelledby="grupLine"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content container-md">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="grupLine">
                                            Join Grup LINE
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body"
                                        style="
                                    text-align: left;
                                    font-size: 0.938rem !important;
                                ">
                                        <center>
                                            <p>
                                                Klik atau scan barcode di bawah ini buat
                                                join ke grup ya...
                                            </p>
                                            <a href="https://line.me/ti/g/Tgfu-ZKqFJ" target="_blank">
                                                <img border="0" src="{{ url('img/barcode.jpg') }}" width="170"
                                                    height="170" /></a>
                                        </center>
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

                        <center>
                            <div class="form-footer" style="margin-top: 4rem">
                                <!-- <button type="submit" class="button btn-primary block pushed expand"> LANJUTKAN </button> -->
                                <p style="color: black">
                                    Created by
                                    <a href="#"> Departemen RISTEK - Divisi PTI</a>
                                </p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- PENGUMUMAN --}}

    <div id="pengumuman">
        @if (Auth::user()->lulus)
            <div class="registrasi">
                <div class="regis__content py-5">
                    <div class="regis__forms">
                        <form class="regis__registre">
                            <img src="{{ url('img/himsi-unsri.png') }}" alt="" width="180px;"
                                style="margin: auto; display: block" /><br /><br />
                            <h1 class="regis__title fw-bold">
                                PENGUMUMAN OPREC BPH HIMSI UNSRI 2025
                            </h1>
                            <hr />
                            <br />

                            <div class="alert alert-success py-5" style="text-align: justify">
                                <strong>Selamat!</strong> kamu telah diterima menjadi bagian
                                dari BPH HIMSI FASILKOM UNSRI 2025. <br /><br />
                                Kamu adalah yang terbaik diantara yang terbaik. <br /><br />
                                Terus berikan dan buktikan bahwa memang kamu layak dan
                                pantas untuk menjadi bagian dari BPH HIMSI FASILKOM UNSRI
                                2025. <br /><br />
                                Mari bersama membahu kita wujudkan visi misi kita.
                                <br /><br />
                                <strong id="hastag">#RangkaiSinergiWujudkanTransformasi</strong>
                                <strong id="hastag-space">#RangkaiSinergiWujudkan Transformasi</strong>
                            </div>

                            <br />
                            <div class="tagline"><span> Data Diri </span></div>
                            <br />

                            <div class="regis__box">
                                <i class="bx bxs-id-card regis__icon"></i>
                                <input type="text" placeholder="NIM" name="nim" class="regis__input"
                                    value="{{ Auth::user()->nim }}"
                                    style="text-transform: capitalize; font-weight:bold !important" readonly />
                            </div>
                            <br />

                            <div class="regis__box">
                                <i class="bx bxs-user regis__icon"></i>
                                <input type="text" placeholder="Nama" name="nama" class="regis__input"
                                    value="{{ Auth::user()->nama }}"
                                    style="text-transform: capitalize; font-weight:bold !important" readonly />
                            </div>

                            <br />
                            <div class="tagline"><span> Departemen/Divisi </span></div>
                            <br />

                            @if (Auth::user()->lulus === 'Kastrad_Kastrat')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen KASTRAD (Kajian Strategi dan Advokasi) - Divisi Kastrat (Kajian Strategi)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Kastrad_Adkesma')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen KASTRAD (Kajian Strategi dan Advokasi) - Divisi Adkesma (Advokasi Kesejahteraan Mahasiswa)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'PSDM')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen PSDM (Pengembangan Sumber Daya Mahasiswa)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Ristek_PTI')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen RISTEK (Riset dan Teknologi) - Divisi PTI
                                        (Pengembangan Teknologi Informasi)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Ristek_Akademik')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen RISTEK (Riset dan Teknologi) - Divisi Akademik
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Bistra')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen BISTRA (Bisnis dan Kemitraan)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Kestari')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen KESTARI (Kesekretariatan)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'PMB_Seni')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen PMB (Pengembangan Minat Bakat) - Divisi Seni
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'PMB_Olahraga')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen PMB (Pengembangan Minat Bakat) - Divisi Olahraga
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Medinfo_Humas')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen MEDINFO (Media dan Informasi) - Divisi HUMAS
                                        (Hubungan Masyarakat)
                                    </p>
                                </div>
                                <br />
                            @elseif (Auth::user()->lulus === 'Medinfo_Mulmed')
                                <div class="regis__box">
                                    <i class="bx bxs-group regis__icon"></i>
                                    <p name="lulus" class="regis__input"
                                        style="text-transform: capitalize; font-weight:bold !important; margin:0" readonly>
                                        Departemen MEDINFO (Media dan Informasi) - Divisi MULMED
                                        (Multimedia)
                                    </p>
                                </div>
                                <br />
                            @endif

                            <!-- GRUP DEPARTEMEN/DIVISI -->
                            <div class="alert alert-primary text-center">
                                Silakan join ke grup departemen masing-masing yaa!
                            </div>

                            <br />
                            <div class="tagline"><span> Join Grup Line </span></div>
                            <br />


                            <center>
                                @if (Auth::user()->lulus === 'Kastrad_Kastrat' || 'Kastrad_Adkesma')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen KASTRAD</font>
                                    </p>
                                    <a href="https://line.me/R/ti/g/w-jT7j3BW5">
                                        <img border="0" src="{{ url('img/barcode/kastrad.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @elseif (Auth::user()->lulus === 'PSDM')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen PSDM</font>
                                    </p>
                                    <a href="https://line.me/ti/g/CMs_chDBLP">
                                        <img border="0" src="{{ url('img/barcode/psdm.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @elseif (Auth::user()->lulus === 'Ristek_PTI' || Auth::user()->lulus === 'Ristek_Akademik')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen RISTEK</font>
                                    </p>
                                    <a href="https://line.me/R/ti/g/hHdn3XLbUK">
                                        <img border="0" src="{{ url('img/barcode/ristek.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @elseif (Auth::user()->lulus === 'Bistra')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen BISTRA</font>
                                    </p>
                                    <a href="https://line.me/ti/g/ZNUQb4k27s">
                                        <img border="0" src="{{ url('img/barcode/bistra.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @elseif (Auth::user()->lulus === 'Kestari')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen KESTARI</font>
                                    </p>
                                    <a href="https://line.me/R/ti/g/FzQhE4ZyM7">
                                        <img border="0" src="{{ url('img/barcode/kestari.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @elseif (Auth::user()->lulus === 'PMB_Seni' || Auth::user()->lulus === 'PMB_Olahraga')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen PMB</font>
                                    </p>
                                    <a href="https://line.me/ti/g/G_6DgAV4BZ">
                                        <img border="0" src="{{ url('img/barcode/pmb.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @elseif (Auth::user()->lulus === 'Medinfo_Humas' || Auth::user()->lulus === 'Medinfo_Mulmed')
                                    <p>
                                        <font color="#8C8C8C">Grup Departemen MEDINFO</font>
                                    </p>
                                    <a href="https://line.me/R/ti/g/_DmD2EAmeJ">
                                        <img border="0" src="{{ url('img/barcode/medinfo.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                @endif
                                <center>
                                    <p>
                                        <font color="#8C8C8C">Grup BPH 2024/2025</font>
                                    </p>
                                    <a href="https://line.me/ti/g/kK2tg_3EHz">
                                        <img border="0" src="{{ url('img/barcode/BPH.jpg') }}" width="170"
                                            height="170" />
                                    </a>
                                    <br />
                                </center>

                                <p>
                                    <font color="#8C8C8C">Scan atau Klik QR Code di atas yaa!</font>
                                </p>
                            </center>

                            <center>
                                <div class="form-footer" style="margin-top: 4rem">
                                    <p style="color: black">
                                        Created by
                                        <a href="#"> Departemen RISTEK - Divisi PTI</a>
                                    </p>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="registrasi">
                <div class="regis__content py-5">
                    <div class="regis__forms">
                        <form class="regis__registre">
                            <img src="{{ url('img/himsi-unsri.png') }}" alt="" width="180px;"
                                style="margin: auto; display: block" /><br /><br />

                            <h1 class="regis__title fw-bold">
                                PENGUMUMAN OPREC BPH HIMSI UNSRI 2025
                            </h1>
                            <hr />

                            <br />
                            <div class="alert alert-danger py-5 px-3" style="margin-bottom: 2rem; text-align: justify">
                                <p style="margin:0">
                                    Hi, {{ Auth::user()->nama }} <br /><br />
                                    Terima kasih telah mengikuti kegiatan OPREC BPH HIMSI
                                    UNSRI 2025. <br /><br />
                                    Mohon Maaf kamu belum diterima untuk menjadi bagian dari
                                    BPH HIMSI FASILKOM UNSRI 2025.
                                </p>
                            </div>

                            <div class="form-body">
                                <div class="frm-row">
                                    <div class="spacer-t5 spacer-b30">
                                        <div class="tagline">
                                            <span> SEMANGAT!!! </span>
                                        </div>
                                    </div>

                                    <div class="alert alert-primary text-left py-5"
                                        style="margin-top: 2rem; text-align: justify">
                                        <p style="margin:0">
                                            <font>Teruslah berkarya di manapun kamu berada.
                                                <br /><br />
                                                Seorang pemenang sejati tak akan runtuh
                                                hanya karena satu-dua rintangan menghadang.
                                                <br /><br />
                                                Terus asah kemampuan diri, maksimalkan
                                                potensi dan semangat untuk terus berproses
                                                dan ingatlah bahwa kamu masih bagian dari
                                                <strong>Keluarga HIMSI FASILKOM UNSRI</strong>
                                                .<br /><br /><br />
                                                <b id="hastag">#RangkaiSinergiWujudkanTransformasi</b>
                                                <strong id="hastag-space">#RangkaiSinergiWujudkan Transformasi</strong>
                                            </font>
                                        </p>
                                    </div>
                                </div>

                                <center>
                                    <div class="form-footer" style="margin-top: 4rem">
                                        <p style="color: black">
                                            Created by
                                            <a href="#"> Departemen RISTEK - Divisi PTI</a>
                                        </p>
                                    </div>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
