<!DOCTYPE html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content='YukCoding Solution' name='description'/>
    <meta content='fawaiq, mohammad nur fawaiq, yukcoding, yukcoding solution, yukcoding dev' name='keywords'/>
    <title>OOWL Indonesia</title>
   <link rel="stylesheet" href="assets/asset/css_landing/landing_page.css">
   <link rel="icon" type="img" href="assets/asset/img/orion.jpeg" />

<body>
	<main>
        <div id="home">/

        	<div class="button-menu">
            	<div style="line-height:8px;">-</div>
                <div style="line-height:8px;">-</div>
                <div style="line-height:8px;">-</div>
            </div>
            <div class="menu-responsive" id="res">
            	<ul>
                	<li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#maps">MAPS</a></li>
                    <li><a href="auth/login.php" target="_blank">LOGIN</a></li>
            	</ul>
            </div>
            <div id="top">
            	<div class="header">
                	<div style="padding:11px; 0 12px 20px;"><b>PT. OOWL Indonesia</b></div>
                </div>
                <div class="menu">
                	<ul>
                    	<li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#maps">MAPS</a></li>
                        <li><a href="auth/login" target="_blank">LOGIN</a></li>
                    </ul>
                </div>
            </div>
            
     		<div class="content">
				<div id="jd-1">Selamat Datang.</div>
                <div id="jd-1"><span style='color:#0cf;'>kami hadir dengan solusi inventori yang canggih untuk perusahaan.</span></div>
                <div id="gr" class="garis-tebal"></div>
                <div id="sb" class="sub-judul">
                	Hemat waktu dengan aplikasi inventori kami
                </div>           
             </div>
        </div>i

        <div id="about">
            <style>
             #about {
               background-color: navy; /* Warna latar belakang navy */
               padding: 20px; /* Padding agar kontennya tidak terlalu dekat dengan batas luar */
               }
            </style>
            <div class="page4-judul" id="judul">ABOUT US</div>
            <div class="page4-kotak" id="kiri">
            	<div style="padding:60px;">
                	<div style="font-size:22px;"><b></b></div>
                    <div style="font-size:18px; margin-top:20px;"></div>
                    <div style="font-size:22px; margin-top:30px;"><b></b></div>
                    <div style="font-size:18px; margin-top:20px;"></div>
            		<div style="font-size:22px; margin-top:30px;"><b></b></div>
                    <div style="font-size:18px; margin-top:20px;"></div>
                </div>
            </div>
            <div class="page4-kotak" id="kanan">
            <div style="text-align:left;">
                <img src="assets/asset/img/orion.jpeg" alt="Deskripsi gambar Anda" style="width: 100%; max-width: 700px; height: auto;">
            </div>
            </div>
        <footer>
<div class="canvas-footer">
    <div class="footer">
        <section class="page-section" id="maps">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">OUR LOCATION.</h2>
                    <h3 class="section-subheading text-muted">Lokasi PT.OOWL Indonesia.</h3>
                </div>
                <div id="map" style="height: 360px; width: 315%;"></div>

                <!-- Memuat Leaflet.js -->
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

                <script>
                    var map = L.map('map').setView([-3.4488957301358893, 114.78703932164125], 13);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(map);

                    var marker = L.marker([-3.4488888496910803, 114.78704326120555]).addTo(map);
                    marker.bindPopup("<b>PT.OOWL Indonesia</b>").openPopup();
                </script>
            </div>
        </section>
        <div style="padding:20px; text-align:left">
            <div style="color: #000000; font-size:25px; font-family:'Agency FB', 'Segoe UI'; margin:30px 0 20px 0;">
                CONTACT
            </div>
            <div>
        <div style="text-align: left;"># Banjarbaru, Kalimantan Selatan, Indonesia.</div>
        <div style="text-align: left;"># PT.OOWL INDONESIA.</div>   
                <div class="col-lg-4 text-lg-end">
                    <!-- <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a> -->
                </div>
            </div>
        </div>

    </div>
</div>

</section> <!-- Tutup section yang terbuka sebelumnya -->

</footer>
</main>

    
	<script src="assets/asset/js/jquery.js"></script>
<script>
    $(document).ready(function() {
        var b = ["g-1.jpg"]; // Daftar gambar latar belakang
        var i = 0;
        $("#home").css({
            "background": "url('assets/asset/img/" + b[i] + "') no-repeat",
            "background-size": "cover", // Mengatur gambar latar belakang agar memenuhi elemen
        });

        setInterval(function() {
            i = (i + 1) % b.length; // Ganti indeks gambar latar belakang
            $("#home").css({
            "background": "url('assets/asset/img/" + b[i] + "') no-repeat",
            "background-size": "cover", // Mengatur gambar latar belakang agar memenuhi elemen
        });

        }, 2500); // Ganti gambar setiap 2.5 detik (2500 milidetik)

		var jd1 = ["Selamat Datang"] ;
		var jd2 = ["WE ARE <span style='color:#0cf;'>A SOLID TEAM</span>", "HOW TO <font color=#0cf>DO IT</font>", "THE NEXT <font color=#0cf>WEB</font>"];
		var sb = ["Fawaiq Solution is a design and innovation consultancy that<br>helps bring innovative products to market.", "We love making themes, and we hope you will love<br>them too.", "We have applied our experience to establish a efficient<br>& effective studio."];
		var x = 0;
		setInterval(function() {
			$("#jd-1").fadeOut(800, function() {
				$(this).html(jd1[x]).fadeIn(1000);
				$("#jd-2").fadeOut(800, function() {
					$(this).html(jd2[x]).fadeIn(800);
					$("#gr").css({"width":"100%", "background-color":"#ff0"});
					$("#sb").slideUp(650, function() {
						$("#gr").css({"width":"20%"});
						$(this).html(sb[x]).slideDown(650, function() {
							$("#gr").css({"background-color":"#fff"});
						});
					});
				});
			});
			x = x+1;
			if(x >= jd1.length) {
				x = 0;
			}
		}, 2500);
		
		$(window).scroll(function(){
			if($(this).scrollTop() > 100) {
				$("#top").css({"background-color":"#fff", "border-bottom":"1px solid #333"});
				$(".header").css({"color":"#000"});
				$(".menu ul li a").css({"color":"#333"});
			} else if ($(this).scrollTop() < 100) {
				$("#top").css({"background-color":"transparent", "border-bottom":"1px solid #fff"});
				$(".header").css({"color":"#fff"});
				$(".menu ul li a").css({"color":"#fff"});
			}
		});

		$(".tombol-kanan").click(function() {
			var col = $(this).attr("id");
			if(col == "2-col") {
				$(".gallery").css({"width":"50.15%", "height":"450px"});
			} else if(col == "3-col") {
				$(".gallery").css({"width":"33.43%", "height":"310px"});
			} else if(col == "4-col") {
				$(".gallery").css({"width":"25.076%", "height":"230px"});
			}
		});
		
		$(".menu ul li a").click(function() {
			var tujuan = $(this).attr("href");
			$("html, body").animate({scrollTop:eval($(tujuan).offset().top - $("#top").height())}, 1000);
			return false;
		});
		
		$(".menu-responsive ul li a").click(function() {
			var tujuan = $(this).attr("href");
			$("html, body").animate({scrollTop:eval($(tujuan).offset().top - $("#top").height())}, 1000);
			return false;
		});
		
		$(".button-menu").click(function() {
			$(".menu-responsive").slideToggle(800);
		});
	
	});
	</script>

</body>
</html>