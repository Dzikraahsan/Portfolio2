<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Title -->
    <title>Profil</title>

    <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="profil.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- preload font -->
    <link rel="preload" href="fonts/Pretendard-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

</head>
<body data-aos="fade-in">

    <!-- Navbar -->
        <nav class="navbar bg-body mx-auto sticky-top">
            <div class="container d-flex align-items-center justify-content-between mt-1">

                <div class="navbar-brand mb-1">
                    <img width="45" height="40" style=" filter: brightness(150%) contrast(110%) saturate(100%);" src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1755931878/logo_smkn_1_maja_no_bg_gxofqf.png" alt="Logo SMKN 1 Maja">
                     <div class="d-flex flex-column text-center">
                        <span class="fw-bold" style="font-size: 0.8rem;">SMK NEGERI 1 MAJA</span>
                        <small class="text-muted" style="font-size: 0.575rem;">Sekolah Pusat Keunggulan</small>
                    </div>
                </div>

                <div class="flex-grow-1"></div>

                    <ul class="navbar-nav mx-auto d-flex flex-row mb-2 mb-lg-0 atur">
                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="beranda.php" data-i18n="nav-profile">Beranda</a>
                        </li>
                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="profil.php" data-i18n="nav-project">Profil</a>
                        </li>
                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="ekstra.php" data-i18n="nav-contact">Ekstrakulikuler</a>
                        </li>
                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="galeri.php" data-i18n="nav-contact">Galeri</a>
                        </li>
                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="kontak.php" data-i18n="nav-contact">Kontak</a>
                        </li>
                    </ul>

                    <div class="input-group me-5 justify-content-end" style="max-width: 180px;">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari">
                        <button class="btn dynamic-btn" type="button" onclick="goToSection()">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                <a class="btn dynamic-btn" type="button" href="dashboard.php"><i class="fa fa-user"></i></a>
            </div>
        </nav>

        <!-- Profil Sekolah -->
        <section id="profil" class="bs-body mb-5 mt-5">
            <h2 class="text-center fw-bold">Profil Sekolah</h2>

            <div class="row py-5 align-items-center">
                <!-- Bagian teks -->
                <div class="col-md-6 offset-md-1 mb-5">
                    <h1 class="dec">SMK Negeri 1 <span class="dec" style="margin-left: 0rem;">Maja</span></h1>
                    <div class="border"></div>
                    <p class="dec" style="font-size: 1.3rem;">
                        SMK Negeri 1 Maja – Menjadi SMK Pusat Keunggulan yang Menghasilkan
                        Sumber Daya Manusia Bermutu dan Berdaya Saing Tinggi Menuju
                        <b>CENTER OF EXCELLENCE</b>.
                    </p>
                    <p class="dec" style="font-size: 1.3rem;">
                        Lulusannya siap bekerja, berwirausaha, dan melanjutkan kuliah ke
                        Perguruan Tinggi Negeri maupun Swasta.
                    </p>
                    <button href="profilsekolah.php" class="btn dynamic-btn btn1">Selengkapnya</button>
                </div>

                <!-- Bagian gambar kepala sekolah -->
                <div class="col-md-3 text-center" style="margin-left: 7.5rem; margin-top: -2.15rem;">
                    <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756702848/kepala_sekolah_wwu4n5.png" alt="Kepala SMKN 1 Maja" class="img-fluid" style="max-width: 250px; margin-left: -1.25rem;">
                    <h5 class="mt-3 fw-bold dec">Kepala SMKN 1 Maja</h5>
                    <p class="fw-semibold dec">Bapak Asep Fahroni, S.Pd., M.M.</p>
                </div>
            </div>
        </section>

        <!-- Informasi sekolah -->
        <section id="info-sekolah" class="container py-5" style="margin-top: -3rem;">
            <h2 class="fw-bold text-center"> <i class="bi bi-building me-2" style="color: #002f49;"></i> Informasi Sekolah </h2>

            <div class="card shadow-sm mb-5 mt-4">
                <div class="card-body px-4 py-5">
                <div class="row g-3">
                    <div class="col-md-6 d-flex align-items-start">
                    <i class="bi bi-mortarboard-fill text-success me-3 ms-4 fs-2"></i>
                    <div>
                        <h4 class="mb-1 fw-semibold text-dark">Nama Sekolah</h4>
                        <h5 class="mb-0 fw-semibold" style="color: #006989">SMK Negeri 1 Maja</h5>
                    </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-start">
                    <i class="bi bi-geo-alt-fill text-danger me-3 ms-4 fs-2"></i>
                    <div>
                        <h4 class="mb-1 fw-semibold text-dark">Alamat</h4>
                        <h5 class="mb-0 fw-semibold" style="color: #006989">Jl. Pasukan Sindangkasih No.155, Maja Selatan</h5>
                    </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-start">
                    <i class="bi bi-calendar-check text-warning me-3 ms-4 fs-2 mt-3"></i>
                    <div>
                        <h4 class="mb-1 mt-3 fw-semibold text-dark">Tahun Berdiri</h4>
                        <h5 class="mb-0 fw-semibold" style="color: #006989">1968</h5>
                    </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-start">
                    <i class="bi bi-card-checklist text-info me-3 ms-4 fs-2 mt-3"></i>
                    <div>
                        <h4 class="mb-1 mt-3 fw-semibold text-dark">NPSN</h4>
                        <h5 class="mb-0 fw-semibold" style="color: #006989">90348923</h5>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Sejarah -->
        <section id="sejarah" class="bs-body mb-5">
            <h2 class="text-center fw-bold">Sejarah</h2>

            <div class="row py-3 align-items-center">
                <!-- Bagian teks -->
                <div class="col-md-11 offset-md-1 mb-5 ">
                    <h1 class="dec">Selayang Pandang</h1>
                    <div class="border"></div>
                    <p class="dec col-md-11" style="font-size: 1.15rem; text-align: justify;">
                        Majalengka “Remaja, Religius, Maju dan Sejahtera” dapat diwujudkan melalui Sumber Daya Manusia SDM yang handal dan Profesional.
                        Salah satu lembaga yang kompeten melahirkan SDM pendukung suksesnya visi tersebut adalah SMK Negeri 1 Maja.
                        Sekolah Menengah Kejuruan SMK Negeri 3 Majalengka yang dikukuhkan dengan SK Bupati No. 422Kep.613-Dis Pk2002. Sekolah yang dirintis dan berdiri sejak tahun 1968 dengan nama SPMA Perjuangan.
                        Di tahun 1974 Status SPMA diakui. Setelah diberlakukannya Otonomi Daerah SPMA Maja Naik statusnya menjadi “Negeri” dengan nama Sekolah Menengah Kejuruan Negeri 3 Majalengka SMKN 3 di bawah naungan Dinas Pendidikan Nasional.
                        Nama SMK Negeri 3 Majalengka pada tanggal 03 Maret 2008 berubah nama kembali menjadi SMK Negeri 1 Maja.
                        Kini SMK Negeri 1 Maja telah terakreditasi A.
                    </p>
                 </div>

            </div>
        </section>

        <!-- Visi & Misi -->
        <section id="visi misi" class="bs-body mb-5">
            <h2 class="text-center fw-bold">Visi dan Misi</h2>

            <div class="row py-3 align-items-center">
                <!-- Bagian teks -->
                <div class="col-md-11 offset-md-1">
                    <h2 class="dec">Visi dan Misi</h2>
                    <div class="border"></div>
                 </div>

                 <div class="text-center v-m">
                    <h4 class="fw-bold mb-3">Visi</h4>
                    <p class="fw-bold">Terwujudnya Lulusan SMK Negeri 1 Maja Yang Cerdas, Berakhlak Mulia, Berdaya Saing Global, Dan Peduli Lingkungan.</p>

                    <h4 class="fw-bold mb-3 mt-5">Misi</h4>

                    <div class="container text-start">
                        <ol class="list-group-numbered text-left">
                            <li class="list-group-item">
                                Mengembangkan kurikulum sekolah secara berkelanjutan.
                            </li>
                            <li class="list-group-item">
                                Mengembangkan proses pembelajaran dan pengembangan diri secara profesional.
                            </li>
                            <li class="list-group-item">
                                Mengembangkan sistem penilaian pendidikan berbasis kelas dan kompetensi.
                            </li>
                            <li class="list-group-item">
                                Meningkatkan kinerja pendidik dan tenaga kependidikan yang profesional.
                            </li>
                            <li class="list-group-item">
                                Mengembangkan sarana dan prasarana pendidikan.
                            </li>
                            <li class="list-group-item">
                                Mengembangkan kemitraan sekolah dengan berbagai pihak baik ke dalam maupun keluar lembaga.
                            </li>
                            <li class="list-group-item">
                                Menerapkan manajemen berbasis sekolah dan sistem manajemen mutu ISO 9001:2008.
                            </li>
                            <li class="list-group-item">
                                Membangun jiwa peserta didik yang kreatif, inovatif, sportif, dan wirausaha.
                            </li>
                            <li class="list-group-item">
                                Meningkatkan pengawasan dan evaluasi program pendidikan.
                            </li>
                            <li class="list-group-item">
                                Mengembangkan sekolah berbudaya lingkungan.
                            </li>
                        </ol>
                    </div>

                 </div>

            </div>
        </section>

        <!-- Fasilitas -->
        <section class="fasilitas" class="py-5 bs-body">
            <div class="container bs-body">
                <h2 class="fw-bold text-center mb-5">Fasilitas Sekolah</h2>
                <div class="grid">
                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677713/Paper_map-bro_hhsst8.png" alt="Lokasi">
                        <h3 class="fw-medium">Lokasi Strategis</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677714/Connected_world-bro_vabxqa.png" alt="Internet">
                        <h3 class="fw-medium">Akses Internet</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677713/Parking-bro_lw5rvn.png" alt="Parkir">
                        <h3 class="fw-medium">Area Parkir Luas</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677713/Sport_family-bro_ckhofj.png" alt="Perpustakaan">
                        <h3 class="fw-medium">Fasilitas Olahraga</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677713/Hotel_Booking-rafiki_tvvq3t.png" alt="Laboratorium">
                        <h3 class="fw-medium">Lodging</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677712/Mosque_online_service-bro_diclux.png" alt="Masjid">
                        <h3 class="fw-medium">Masjid</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677713/Library-bro_vb7r2u.png" alt="Perpustakaan">
                        <h3 class="fw-medium">Perpustakaan</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677712/Data_extraction-rafiki_hpkeoo.png" alt="Lab Office">
                        <h3 class="fw-medium">Lab Komputer Office</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677712/Marketing-bro_czvsce.png" alt="Lapangan">
                        <h3 class="fw-medium">Lapangan Olahraga</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677712/Making_art-pana_jliwp3.png" alt="Ekstrakulikuler">
                        <h3 class="fw-medium">Ekstrakulikuler</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677712/Living_room-bro_ifk89k.png" alt="Ruang Seni">
                        <h3 class="fw-medium">Ruang Kesenian</h3>
                    </div>

                    <div class="card fasilitas-card mb-5">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757677712/Data_extraction-cuate_xugjdb.png" alt="Lab Multimedia">
                        <h3 class="fw-medium">Lab Komputer Multimedia</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prestasi sekolah -->
        <section id="prestasi sekolah" class="py-5 mb-5">
            <div class="container mb-5">
                <h2 class="text-center fw-bold mb-5">Prestasi Sekolah</h2>

                <div id="prestasiCarousel" class="carousel slide">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="card border-0 w-75 shadow-lg overflow-hidden" style="display: block; margin: 0 auto;">
                                <div class="row g-0 h-100">
                                    <!-- Gambar -->
                                    <div class="col-md-4 d-flex justify-content-center align-items-center bg-light">
                                    <img src="https://smkn1maja.sch.id/src/img/achievement/4cf28db8a3e55b7a6bd0c6b7e40ca936.jpg"
                                        class="img-fluid h-100 w-100 object-fit-cover" alt="Trophy" style="max-height: 200px;">
                                    </div>
                                    <!-- Teks -->
                                    <div class="col-md-8 bg-dark text-white p-4">
                                        <h5 class="fw-bold">JUARA HARAPAN 3 LINTAS</h5>
                                        <p class="mb-1">ALAM AMRANX CUP IV</p>
                                        <p class="mb-1"><strong>Tingkat:</strong> Pulau Jawa | <strong>Tim:</strong> Pramuka</p>
                                        <p class="mb-0"><small>Tahun: 2018</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="card border-0 w-75 shadow-lg overflow-hidden" style="display: block; margin: 0 auto;">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center bg-light">
                                    <img src="https://smkn1maja.sch.id/src/img/achievement/4cf28db8a3e55b7a6bd0c6b7e40ca936.jpg"
                                        class="img-fluid h-100 w-100 object-fit-cover" alt="Medal" style="max-height:200px;">
                                    </div>
                                    <div class="col-md-8 bg-dark text-white p-4">
                                        <h5 class="fw-bold">JUARA HARAPAN 2 FUTSAL</h5>
                                        <p class="mb-1">RUKIBRA</p>
                                        <p class="mb-1"><strong>Tingkat:</strong> Provinsi Jawa Barat |  <strong>Tim:</strong> Paskibra</p>
                                        <p class="mb-0"><small>Tahun: 2019</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="card border-0 w-75 shadow-lg overflow-hidden" style="display: block; margin: 0 auto;">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center bg-light">
                                    <img src="https://smkn1maja.sch.id/src/img/achievement/4cf28db8a3e55b7a6bd0c6b7e40ca936.jpg"
                                        class="img-fluid h-100 w-100 object-fit-cover" alt="Medal" style="max-height:200px;">
                                    </div>
                                    <div class="col-md-8 bg-dark text-white p-4">
                                        <h5 class="fw-bold">JUARA 1 DAN 3 MADYA</h5>
                                        <p class="mb-1">LOMBA PENGIBARAN BENDERA SMA</p>
                                        <p class="mb-1"><strong>Tingkat:</strong> Priangan Timur | <strong>Tim:</strong> Paskibra</p>
                                        <p class="mb-0"><small>Tahun: 2019</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Jurusan -->
        <h2 class="text-center fw-bold">Program Kejuruan</h2>

        <section id="jurusan" class=" bs-body py-5 mb-5 mt-3">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3 c-a">
                        <div class="card card1">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756623231/RPL_fixed_zrwm7e.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Rekayasa Perangkat Lunak</h5>
                            </div>
                         </div>
                     </div>
                    <div class="col-md-3 c-a">
                        <div class="card card2">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756636199/TKJ_fixed_l23mcn.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Teknik Komputer & Jaringan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card3">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756700221/TE_de3ls9.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Teknik Audio Video Elektronika</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card4">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756636186/ATPH_fixed_j9qneq.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Agribisnis Tanaman Pangan dan Hortikultura</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card5 mt-4">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756709204/poster_jepang_cuw0ba.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Bahasa Jepang</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card6 mt-4">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756709212/poster_pkl_bbqvpa.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">PKL</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card7 mt-4">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756709205/poster_gambar_dimjht.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Teknik Gambar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card8 mt-4">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756709205/poster_kewirausahaan_fdrtlg.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Kewirausahaan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Informasi -->
                    <div class="col-md-3 mb-3">
                      <h5>Informasi</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">PPDB</a></li>
                            <li><a href="#">LMS</a></li>
                            <li><a href="#">LSP-P1</a></li>
                            <li><a href="#">E-Arsip Surat</a></li>
                            <li><a href="#">Kalender Pendidikan</a></li>
                        </ul>
                    </div>

                    <!-- Alumni -->
                    <div class="col-md-3 mb-3">
                      <h5>Alumni</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Grup Alumni</a></li>
                            <li><a href="#">Lowongan Kerja</a></li>
                            <li><a href="#">Kelulusan</a></li>
                            <li><a href="#">Testimoni</a></li>
                        </ul>
                    </div>

                    <!-- Komunitas -->
                    <div class="col-md-3 mb-3">
                      <h5>Komunitas & Link</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Kemdikbud</a></li>
                            <li><a href="#">Disdik Jabar</a></li>
                            <li><a href="#">Pemprov Jabar</a></li>
                            <li><a href="#">Pemkab Majalengka</a></li>
                        </ul>
                    </div>

                    <!-- Kontak -->
                    <div class="col-md-3 mb-3">
                      <h5>Kontak</h5>
                        <p>Jl. Pasukan Sindangkasih No. 155, Maja Selatan, kab. Majalengka</p>
                        <p>(0233) 282480</p>
                        <p>smkn1maja@yahoo.com</p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Bottom -->
                <div class="footer-bottom">
                    <p class="mt-4 mb-0">@ 2025 SMK NEGERI 1 MAJA. ALL RIGHTS RESERVED | By: DZIKRA</p>
                </div>
            </div>
        </footer>

    <!-- font awesome JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script>

        // initial aos
        AOS.init();

         // untuk nav link
        document.addEventListener("DOMContentLoaded", () => {
            const currentPage = window.location.pathname.split("/").pop();
            const links = document.querySelectorAll(".nav-link");

            links.forEach(link => {
            if(link.getAttribute("href") === currentPage){
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
            });
        });

        // swiper photo
        const swiper1 = new Swiper(".mySwiper1", {
          slidesPerView: 1,
          spaceBetween: 20,
          navigation: {
            nextEl: ".next1",
            prevEl: ".prev1",
          },
          grabCursor: true,
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        });

        const swiper2 = new Swiper(".mySwiper2", {
          slidesPerView: 1,
          spaceBetween: 20,
          navigation: {
            nextEl: ".next2",
            prevEl: ".prev2",
          },
          grabCursor: true,
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        });

        // section id
        function goToSection() {
            let input = document.getElementById("searchInput").value.toLowerCase();

            let sections = {
                "profil": "profil",
                "sejarah": "sejarah",
                "visi misi": "visi misi",
                "prestasi sekolah": "prestasi sekolah",
                "jurusan": "jurusan"
            };

            if(sections[input]) {
                document.getElementById(sections[input]).scrollIntoView({ behavior: "smooth" });
            } else {
                alert("Bagian tidak ditemukan 😅");
            }
        }

        // navbar
        document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".navbar").classList.add("show");
        });

        // carousel
        document.addEventListener("DOMContentLoaded", function () {
        const myCarousel = document.querySelector('#prestasiCarousel');
            new bootstrap.Carousel(myCarousel, {
            interval: 5000,  // 4 detik per slide
            ride: 'carousel',
            pause: false,    // jangan stop kalau hover
            wrap: true       // loop terus
            });
        });

         // GSAP
        document.querySelectorAll(".nav-link").forEach(link => {
            let line = document.createElement("span");
            line.style.position = "absolute";
            line.style.left = "0";
            line.style.bottom = "8px";
            line.style.height = "2px";
            line.style.width = "0";
            line.style.background = "#000";
            line.style.pointerEvents = "none";
            link.style.position = "relative";
            link.appendChild(line);

            // animasi GSAP hover
            link.addEventListener("mouseenter", () => {
                gsap.to(line, { width: "100%", duration: 0.3, ease: "power2.out" });
            });
            link.addEventListener("mouseleave", () => {
                gsap.to(line, { width: "0%", duration: 0.3, ease: "power2.in" });
            });
        });

    </script>

</body>
</html>