<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenn - Aplikasi Keuangan - Kelola Keuangan dengan Cerdas</title>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --dark-blue: #0f172a;
            --slate: #64748b;
            --light-bg: #f8fafc;
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            color: var(--dark-blue);
            background: #ffffff;
            line-height: 1.5; /* Lebih rapat sedikit */
        }

        /* Navigasi */
        .navbar {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 10px 0; /* Navbar lebih ramping */
        }

        /* Section Spacing (Dirapatkan dari 100px ke 50px) */
        section {
            padding: 50px 0;
            overflow: hidden;
        }

        .soft-bg {
            background-color: var(--light-bg);
        }

        .text-gradient {
            background: linear-gradient(90deg, var(--dark-blue), var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        /* Button & Cards */
        .btn-primary-custom {
            background: var(--primary);
            color: white;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 600;
            border: none;
            transition: 0.3s;
        }

        .card-hover {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1);
        }

        /* Khusus footer & CTA biar gak terlalu makan tempat */
        footer { padding: 40px 0 20px; }
    </style>
</head>
<body>

    @include('landing.navbar')

    <main>
        <!-- Hero & Stats tak dadekno siji alure ben gak kadohan -->
        <div class="hero-wrapper">
            @include('landing.hero')
            <div id="stats" class="py-3 border-top border-bottom bg-white">
                @include('landing.stats')
            </div>
        </div>

        <section id="features" class="soft-bg">
            @include('landing.features')
        </section>

        <section id="preview">
            @include('landing.preview')
        </section>

        <section id="cara" class="soft-bg">
            @include('landing.cara')
        </section>

        <section id="security">
            @include('landing.security')
        </section>

        <section id="testimoni" class="soft-bg">
            @include('landing.testimoni')
        </section>

        <section id="contact">
            @include('landing.contact')
        </section>

        <!-- CTA dibuat mepet ke footer -->
        <div id="cta" class="py-4">
            @include('landing.cta')
        </div>
    </main>

    @include('landing.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
