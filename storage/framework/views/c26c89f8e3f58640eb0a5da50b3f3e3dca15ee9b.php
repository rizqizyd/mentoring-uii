

<?php $__env->startSection('title', 'Mentoring'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- Mentoring -->
        <div class="mentoring row">
            <div class="gambar col-lg-6 col-sm-12">
                <img class="pertama" src="/images/profesor.png" height="400" width="545">
            </div>
            <div class="pertama col-lg-6 col-sm-12">
                <h1 class="mt-3">Mentoring</h1>
                <p>Lingkaran pengembangan diri yang mempertemukan berbagai individu dengan mentor yang senantiasa memberikan inspirasi dan motivasi dalam mengembangkan potensi diri kita.</p>
                <p>Produktif sering kali dikaitkan dengan hal-hal yang berat dan besar. Padahal hobi atau minat (passion) kita bisa menjadi salah satu jalan untuk produktif! ​</p>
                <a href="register" class="tombol btn btn-primary center mt-3 col-sm-12">Daftar Mentoring</a>
                <a href="#about" class="tombol btn btn-warning center mt-3 col-sm-12">Tentang Mentoring</a>
            </div>
        </div>

    <h1 id="about" class="judul mt-4 mb-3">Benefit</h1>
    
    <!-- Card -->
    <div class="shadow p-3 bg-white rounded row mb-3">
        <div class="benefit col-lg-4 col-sm-12">
            <div class="card-body text-primary">
                <img src="/images/study.png" height="120" width="180"><br><br>
                <h5 class="card-title">Belajar</h5>
                <p class="card-text">Sarana pembelajaran interaktif yang menggugah rasa penasaran terhadap wawasan keislaman</p>
            </div>
        </div>
        <div class="benefit col-lg-4 col-sm-12">
            <div class="card-body text-primary">
                <img src="/images/eiffel.png" height="120" width="180"><br><br>
                <h5 class="card-title">Inspirasi</h5>
                <p class="card-text">Tempat berkumpul bersama orang-orang yang saling memotivasi dan menginspirasi</p>
            </div>
        </div>
        <div class="benefit col-lg-4 col-sm-12">
            <div class="card-body text-primary">
                <img src="/images/jaringan.png" height="120" width="180"><br><br>
                <h5 class="card-title">Jaringan</h5>
                <p class="card-text">Jaringan perkenalan yang luas yang mempertemukan dengan orang-orang baru yang luar biasa</p>
            </div>
        </div>
    </div>
    
    <!-- <div class="row mt-3 mb-3">
        <div class="col-12 text-center">
            <button style="padding:15px 30px;" type="button" class="btn btn-primary center">Daftar Mentoring Sekarang</button>
        </div>
    </div> -->

    <!-- Goals -->
    <div class="mentoring row">
        <div class="col-lg-6 col-sm-12">
            <h1 class="mt-3">Goals</h1>
            <p>Saat bisa mengaktualisasikan diri sebaik mungkin, menjadi pribadi muslim yang ideal serta memberikan manfaat untuk banyak orang. Saat itulah hidup menjadi lebih hidup.</p>
            <p>Mau hidupmu menjadi lebih hidup dengan menemukan serta mengembangkan passion-mu dan sejalan dengan nilai-nilai kebaikan Islam?</p>
            <h5>Ayo, Ikut Mentoring!</h5>
        </div>
        <div class="gambar col-lg-6 col-sm-12">
            <img src="/images/goals.png" height="400" width="600">
        </div>
    </div>

    <!-- Slider -->
    <section class="shadow orange p-5 margin-top-xl pos-r">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h1 id="faq" class="judul" style="color:white;">Pengalaman Mentoring</h1>
                <!-- <h2 class="text-center font-weight-bold text-white">Our Customers are Seeing Big Results</h2> -->
            <div class="mt-5 pos-r">
                <div class="testimonial-carousel">
                    <div class="one-slide white">
                    <div class="testimonial w-100 h-100  p-3 text-center">
                        <img src="/images/naufal.jpg" alt="">
                        <h6 class="card-title mt-2">Naufal W. Luneto (Atlet Basket)</h5>
                        <p class="card-text">
                        “Gue punya teman dengan berbagai latar belakang: mapres, akademisi, gamer, atlet, dll. Lengkap rasanya, gue dan teman" kumpul bareng, saling ngingetin lewat mentoring.”
                        </p>
                        <!-- <div class="separator">&nbsp;</div> -->
                        <!-- <div class="brand"><img alt="Florida Dairy Farmers" src="https://raw.githubusercontent.com/solodev/slider-boxes/master/images/img-1.png" class="mx-auto"/></div> -->
                    </div>
                    </div>
                    <div class="one-slide white">
                    <div class="testimonial w-100 h-100  p-3 text-center">
                        <img src="/images/zaki.jpeg" alt="">
                        <h6 class="card-title mt-2">Zaki Vernando (Vokalis Band)</h5>
                        <p class="card-text">
                        “Mentoring itu tempat dimana kita ngumpul-ngumpul ngobrol santai bareng temen-temen, saling berbagi, saling evaluasi, serta saling ngasih motivasi satu sama lain."
                        </p>
                    </div>
                    </div>
                    <div class="one-slide white">
                    <div class="testimonial w-100 h-100  p-3 text-center">
                        <img src="/images/zaidan.jpeg" alt="">
                        <h6 class="card-title mt-2">M. T. Abdurrosyid Zaidan (Ketua UKM Karate UI 2018)</h5>
                        <p class="card-text">
                        “Saat ikut mentoring, gua dipertemukan dengan banyak orang-orang hebat, bahkan gua ditemukan dengan seorang kakak yang sangat hebat."
                        </p>
                    </div>
                    </div>
                    <div class="one-slide white">
                    <div class="testimonial w-100 h-100  p-3 text-center">
                        <img src="/images/bimo.jpeg" alt="">
                        <h6 class="card-title mt-2">Bimo Maulidianto P. B. (Founder @kita.juragan)</h5>
                        <p class="card-text">
                        “Kadang kita butuh me-recharge iman, melalui mentoring ini lah gua me-recharge iman dan punya temen" yg ngingetin kita disaat jatuh ataupun ketika sedang di atas."
                        </p>
                    </div>
                    </div>
                    <!-- <div class="one-slide white">
                    <div class="testimonial w-100 h-100  p-3 text-center">
                        <div class="message text-center text-gray">Everyone on the Solodev team is very knowledgeable and they have been always been very responsive.</div>
                        <div class="separator">&nbsp;</div>
                        <div class="brand"><img alt="Miami Beach VCA" src="https://raw.githubusercontent.com/solodev/slider-boxes/master/images/img-5.png" class="mx-auto" /></div>
                    </div>
                    </div> -->
                </div>
                </div>
                <div class="carousel-controls testimonial-carousel-controls mt-4">
                    <div class="row">
                    <div class="col-6">
                        <div class="control prev"><i class="fa fa-chevron-left text-white">&nbsp;</i></div>
                    </div>
                    <div class="col-6">
                        <div class="control next"><i class="fa fa-chevron-right text-white">&nbsp;</i></div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <h1 id="faq" class="judul mt-4 mb-4">Frequently Asked Question</h1>
    <!-- Collapse -->
    <div class="mentoring row mb-4">

        <div class="gambar col-lg-6 col-sm-12">
            <img src="/images/rocket.png" height="400" width="600">
        </div>

        <div class="col-lg-6 col-sm-12">
        
        <div id="accordion">
            <div class="card">
                <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed">
                    Mentoring Itu Apa Sih?
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                Tempat kumpul bareng temen-temen dan kakak mentor untuk belajar dan diskusi tentang keislaman dan sarana menemukan serta mengembangkan potensimu yang akan bikin hidup kamu lebih hidup!
                </div>
                </div>
            </div>
            <div class="card">
                <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed">
                    Mentoring Biasanya Kapan Dan Dimana?
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                Kapan pun dan di mana pun bisa! Pagi, siang, sore, atau malem jam berapapun senyaman kamu dan kelompok mentoringmu. Di mall, di tempat nongkrong, di lapangan futsal, di masjid, atau di pelataran fakultasmu juga bisa.
                </div>
                </div>
            </div>
            <div class="card">
                <div data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed">
                    Siapa Aja Yang Bisa Ikut Mentoring?
                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                Siapa pun yang mau jadi lebih baik dan bermanfaat bagi sekitarnya. Gak ada syarat khusus untuk bisa ikut mentoring!
                </div>
                </div>
            </div>
            <div class="card">
                <div data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed">
                    Gimana Caranya Biar Bisa Ikut Mentoring?
                    </button>
                </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                Daftar aja lewat website ini (atau langsung klik di sini). Isi formnya dan tunggu konfirmasi dari tim Yuk Mentoring di email kamu. Dalam waktu 2 pekan, kamu akan menerima informasi mengenai mentor dan kelompok mentoring barumu!
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

<!-- batas row -->
</div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>    

<?php echo $__env->make('layout/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\mentoring-uii\resources\views/index.blade.php ENDPATH**/ ?>