<section id="contact" class="py-5" style="background: #ffffff;">
    <div class="container py-lg-5">

        <div class="row g-5 align-items-center">

            <!-- INFO KONTAK (Kiri) -->
            <div class="col-lg-5">
                <div class="mb-4">
                    <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3 fw-bold">HUBUNGI KAMI</span>
                    <h2 class="fw-bold display-6 text-dark-blue">Ada Pertanyaan? Kami Siap Membantu</h2>
                    <p class="text-muted mt-3">Butuh bantuan teknis atau punya saran untuk pengembangan fitur MoneyTracker? Jangan ragu untuk menyapa kami.</p>
                </div>

                <div class="contact-info-item d-flex align-items-center mb-4">
                    <div class="icon-box-sm bg-primary text-white rounded-3 me-3">
                        <i class="bi bi-envelope-at-fill"></i>
                    </div>
                    <div>
                        <p class="text-muted small m-0">Email Support</p>
                        <h6 class="fw-bold text-dark-blue m-0">admin@xenntracker.com</h6>
                    </div>
                </div>

                <div class="contact-info-item d-flex align-items-center">
                    <div class="icon-box-sm bg-success text-white rounded-3 me-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <p class="text-muted small m-0">Kantor Pusat</p>
                        <h6 class="fw-bold text-dark-blue m-0">Malang, East Java, Indonesia</h6>
                    </div>
                </div>
            </div>

            <!-- FORM (Kanan) -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5">
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-dark-blue">Nama Lengkap</label>
                                <input type="text" class="form-control custom-input" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-dark-blue">Alamat Email</label>
                                <input type="email" class="form-control custom-input" placeholder="nama@email.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-dark-blue">Pesan</label>
                                <textarea class="form-control custom-input" rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-sm transition-all">
                                    Kirim Pesan Sekarang <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .text-dark-blue { color: #0f172a; }

    /* Icon Small Box */
    .icon-box-sm {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
    }

    /* Custom Input Styling */
    .custom-input {
        background-color: #f8fafc;
        border: 2px solid #f1f5f9;
        padding: 12px 15px;
        border-radius: 10px;
        transition: kabeh 0.3s ease;
    }

    .custom-input:focus {
        background-color: #ffffff;
        border-color: #3b82f6;
        box-shadow: none;
        outline: 0;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #3b82f6;
        border: none;
    }
    .btn-primary:hover {
        background-color: #2563eb;
        transform: translateY(-2px);
    }

    .transition-all {
        transition: all 0.3s ease;
    }
</style>
