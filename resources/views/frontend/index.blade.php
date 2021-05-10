
<html>
    <head>
        <title>punyaAsuransi.com</title>
        <!-- meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel = "icon" href = "/resources/logo/logo.png" type = "image/x-icon">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- css -->
        <link href="{{url('public/frontend/css/mainStyle.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>

        <!-- Whatsapp floating -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.link/9ih9fc" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>

        <!-- navbar -->
        
        <div id=rowContainer>
        @include('frontend.partials.navbar')
        </div>
       

        <div id="mainContainer">
            <div id="coverContainer" class="row justify-content-md-center">
                <div class="slideContainer col-12 col-md-8">
                    <!--images-->
                    <div class="slideImage fade">
                        <img src="{{url('public/frontend/resources/cover/1.jpg')}}">
                    </div>
                    <div class="slideImage fade">
                        <img src="{{url('public/frontend/resources/cover/2.jfif')}}">
                    </div>
                    <div class="slideImage fade">
                        <img src="{{url('public/frontend/resources/cover/3.jfif')}}">
                    </div>
                    

                    <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlide(1)">&#10095;</a>

                    <div class="strip-container" style="text-align:center">
                        <span class="strip" onclick="currentSlidess(1)"></span>
                        <span class="strip" onclick="currentSlidess(2)"></span>
                        <span class="strip" onclick="currentSlidess(3)"></span>
                    </div>
                </div>

                <div id="coverFormContainer" class="col-12 col-md-4">
                    <div class="satu">Ingin tahu asuransi apa yang cocok untuk anda?</div>
                    <div class="dua">Hubungi saya segera di</div>
                    <div class="tiga">081318210546</div>
                    <div class="empat">Konsultasi Gratis!</div>

                    <!-- <div id="coverFormTitle">Miliki Asuransi Sekarang!</div>
                    <div id="coverForm">
                    <label>Nama Lengkap</label><br>
                    <input type="text" name="nama Lengkap" id="nama"><br>
                    <label>Tanggal Lahir</label><br>
                    <input type="date" name="tgl lahir" id="tgllahir"><br>
                    <label>No HP / WA</label><br>
                    <input type="text" name="no HP" id="nomor"><br>
                    <label>Alamat Email</label><br>
                    <input type="email" name="email" id="email"><br>
                    <label>Asuransi yang Diinginkan</label><br>
                    <select name="produk" id="produk">
                            <option value="pilih">PILIH PRODUK</option>
                            <option value="jiwa">Asuransi Jiwa</option>
                            <option value="kesehatan">Asuransi Kesehatan</option>
                            <option value="lainnya">Lainnya</option>
                    </select> <br>
                    <button onclick="kirim()">Kirim</button>
                </div> -->
                </div>
            </div>

            <div id="produkContainer">
                <div id="title">Produk Asuransi Allianz</div>

                <div id="subContainer">
                    <a href="/produk.html#asuransi-jiwa"><div class="box">
                        <div class="symbol"><img src="{{url('public/frontend/resources/symbol/jiwa.png')}}"></div>
                        <div class="content">Asuransi Jiwa</div>
                    </div></a>
                    <a href="/produk.html#asuransi-kesehatan"><div class="box">
                        <div class="symbol"><img src="{{url('public/frontend/resources/symbol/kesehatan.png')}}"></div>
                        <div class="content">Asuransi Kesehatan</div>
                    </div></a>
                    <a href="/produk.html#asuransi-kendaraan"><div class="box">
                        <div class="symbol"><img src="{{url('public/frontend/resources/symbol/kendaraan.png')}}"></div>
                        <div class="content">Asuransi Kendaraan</div>
                    </div></a>
                </div>
            </div>
            
            <div id="apaContainer">
                <div id="box">
                    <div id="title">
                        Apa Itu Allianz?
                    </div>
                    <div id="content">
                        Allianz merupakan salah satu perusahaan global terbesar yang bergerak di bidang layanan asuransi dan manajemen aset. Telah berdiri sejak 1890 di Jerman sebagai perusahaan yang sangat berpengalaman dan mempunyai posisi finansial yang kuat. <br>
                        Allianz memiliki 100 juta nasabah personal dan perusahaan. Nasabah Allianz mendapatkan manfaat dari berbagai layanan asuransi personal dan perusahaan, mulai dari asuransi properti, jiwa dan kesehatan sampai layanan bantuan asuransi kredit dan asuransi bisnis secara global.
                    </div>
                </div>
            </div>

            <div id="manfaatContainer">
                <div id="title">
                    Manfaat Asuransi
                </div>
                <div class="box">
                    <div class="title">Memberikan Ketenangan</div>
                    <div class="content">Kita tidak pernah mengetahui kemungkinan kejadian yang akan dialami esok hari. Setiap hari kita lewati dengan kemungkinan kejadian yang bisa saja menuntut pengeluaran tak terduga. Bila Anda termasuk orang yang sangat siap terhadap sesuatu, risiko kerugian yang diakibatkan oleh kejadian tak terduga tersebut bisa diminimalisir dengan mudah.</div>
                </div>
                <div class="box">
                    <div class="title">Sebagai Investasi dan Tabungan</div>
                    <div class="content">Dengan mendaftarkan diri sebagai nasabah pemegang polis di Allianz, Anda akan mendapatkan jaminan pengembalian investasi pada akhir kontrak. Asuransi yang diperuntukkan investasi juga memberikan kelonggaran dan fleksibilitas dalam memilih masa pertanggungan. Biasanya akan ada tiga pilihan waktu masa pertanggungan nasabah pemegang polis, yakni 5, 7, dan 10 tahun. Selain itu, besarnya premi adalah premi tunggal yang relatif terjangkau dan bisa dibebaskan dari biaya administrasi.</div>
                </div>
                <div class="box">
                    <div class="title">Membantu Meminimalkan Kerugian</div>
                    <div class="content">Sesuai dengan jenisnya masing-masing, fungsi dari kepemilikan asuransi secara umum adalah membantu para pemegang polis untuk meminimalkan kerugian dari kejadian tak terduga yang mungkin terjadi seperti biaya kerugian bencana kebakaran, kecelakaan, dan biaya rumah sakit.</div>
                </div>
                <div class="box">
                    <div class="title">Membantu Mengatur Keuangan</div>
                    <div class="content">Adanya asuransi akan membantu Anda untuk mengurangi pengeluaran tak terduga yang biasanya jauh lebih tinggi dari pengeluaran rutin harian atau bahkan bulanan Anda. Dengan memiliki asuransi, Anda tidak perlu membayarkan biaya penuh atas kerugian yang dialami karena pihak penyedia layanan jasa asuransi ini akan menyediakan ganti rugi.</div>
                </div>
            </div>
        </div>

        <div class="footer">@include('frontend.partials.footer')</div>

        <script src="{{url('public/frontend/js/load.js')}}"></script>
        <script src="{{url('public/frontend/js/mainJs.js')}}"></script>
        
    </body>

</html>