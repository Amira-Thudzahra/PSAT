@extends('templates.page')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Visi dan Misi</h2>
            <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-brush display-4 text-warning mb-3"></i>
                        <h5 class="card-title">Visi</h5>
                        <p class="card-text">
                            Menjadi mitra teknologi terdepan yang mendorong transformasi digital melalui solusi perangkat lunak yang inovatif, handal, dan berdampak positif bagi masyarakat dan bisnis di Indonesia maupun global.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-gear display-4 text-warning mb-3"></i>
                        <h5 class="card-title">Misi</h5>
                        <p class="card-text">
                            <ul>
                                <li>Mengembangkan solusi perangkat lunak berkualitas tinggi. </li>
                                <li>Mendukung pertumbuhan bisnis klienMendukung pertumbuhan bisnis klien.</li>
                                <li>Membangun tim pengembang yang profesional dan berdaya saing tinggi.</li>
                                <li>Menjalin kemitraan strategis.</li>
                                <li>Menjaga etika dan integritas dalam setiap proses bisnis.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-code-slash display-4 text-primary mb-3"></i>
                            <img src="/images/webDeveloper.jpg" alt="ZAA_CODE webDev" style="height: 250px; width:350px;">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Custom websites and systems built for performance and scalability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-phone display-4 text-success mb-3"></i>
                            <img src="/images/mobile app.jpg" alt="ZAA_CODE mobile" style="height: 250px; width:350px;">
                            <h5 class="card-title">Mobile Apps</h5>
                            <p class="card-text">iOS & Android apps to take your product anywhere users go.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-brush display-4 text-warning mb-3"></i>
                            <img src="/images/uiux.jpg" alt="ZAA_CODE UI/UX" style="height: 250px; width:350px;">
                            <h5 class="card-title">UI/UX Design</h5>
                            <p class="card-text">Intuitive designs that enhance usability and delight users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
