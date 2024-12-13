<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentasi Sistem Membership Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .slide {
            display: none;
            animation: fadeIn 0.5s;
        }
        .slide.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="presentation" class="position-relative">
                    {{-- Slide 1: Pembuka --}}
                    <div class="slide active text-center py-5" data-slide="1">
                        <h1 class="display-4 mb-4">Sistem Membership Gym</h1>
                        <p>Nama: Allpa taniy</p>
                        <p>NIM: 240258302064</p>
                        <p>Jurusan: TRPL</p>
                    </div>

                    {{-- Slide 2: Latar Belakang --}}
                    <div class="slide text-center py-5" data-slide="2">
                        <h2 class="mb-4">Latar Belakang</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-5 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Masalah</h3>
                                        <p>Kesulitan dalam pengelolaan data member dan administrasi gym</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Solusi</h3>
                                        <p>Sistem manajemen membership gym berbasis web untuk mempermudah administrasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 3: Tujuan Proyek --}}
                    <div class="slide text-center py-5" data-slide="3">
                        <h2 class="mb-4">Tujuan Proyek</h2>
                        <ul class="list-group list-group-flush col-md-6 mx-auto">
                            <li class="list-group-item">Mempermudah proses pendaftaran dan manajemen member</li>
                            <li class="list-group-item">Memberikan solusi keanggotaan yang efisien</li>
                            <li class="list-group-item">Menyediakan dashboard untuk monitoring aktivitas gym</li>
                        </ul>
                    </div>

                    {{-- Slide 4: Fitur Aplikasi --}}
                    <div class="slide py-5" data-slide="4">
                        <h2 class="text-center mb-4">Fitur Aplikasi</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header">Manajemen Member</div>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li>Registrasi member baru</li>
                                            <li>Update data member</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header">Dashboard</div>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li>list member</li>
                                            <li>update member</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header">Authentication</div>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li>Login admin</li>
                                            <li>Registrasi member</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 5: Teknologi --}}
                    <div class="slide text-center py-5" data-slide="5">
                        <h2 class="mb-4">Teknologi yang Digunakan</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Backend</h5>
                                        <p>Laravel 11</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Frontend</h5>
                                        <p>Laravel UI (Blade)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Database</h5>
                                        <p>MySQL (via XAMPP)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Tools</h5>
                                        <p>Git Bash, CMD, PowerShell</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 8: Keunggulan --}}
                    <div class="slide text-center py-5" data-slide="8">
                        <h2 class="mb-4">Keunggulan Aplikasi</h2>
                        <ul class="list-group col-md-6 mx-auto">
                            <li class="list-group-item">Manajemen member yang terstruktur</li>
                            <li class="list-group-item">Sistem pembayaran terintegrasi ke WhatsApp</li>
                            <li class="list-group-item">Kemudahan monitoring member gym</li>
                        </ul>
                    </div>

                    {{-- Slide 9: Kesimpulan --}}
                    <div class="slide text-center py-5" data-slide="9">
                        <h2 class="display-4 mb-4">Kesimpulan</h2>
                        <p class="lead">Aplikasi ini mempermudah manajemen membership dan administrasi gym</p>
                        <p class="lead">Memberikan solusi komprehensif untuk pengelolaan fasilitas gym</p>
                    </div>

                    {{-- Slide 10: Penutup --}}
                    <div class="slide text-center py-5" data-slide="10">
                        <h2 class="display-4 mb-4">Terima Kasih</h2>
                        <p>Pertanyaan? Silakan hubungi:</p>
                        <p>alfataniisok@gmail.com</p>
                    </div>
                </div>

                {{-- Kontrol Navigasi --}}
                <div class="text-center mt-4">
                    <button id="prevBtn" class="btn btn-primary me-2">Sebelumnya</button>
                    <button id="nextBtn" class="btn btn-primary">Selanjutnya</button>
                    <p class="mt-2" id="slideCounter">Slide 1 dari 10</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const slideCounter = document.getElementById('slideCounter');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                slides[index].classList.add('active');
                slideCounter.textContent = `Slide ${index + 1} dari ${slides.length}`;
            }

            nextBtn.addEventListener('click', function() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            });

            prevBtn.addEventListener('click', function() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            });
        });
    </script>
</body>
</html>
