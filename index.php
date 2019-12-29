<?php
include_once ("system/class.php");
$Run = new Database();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Cara mudah memulai segala hal.">
    <meta name="keywords" content="Cara,Mudah,Cara-mudah,memulai,segala,hal,unsiq,fastikom">
    <title><?php echo $Run->site; ?></title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900%7CPoppins:400,700" rel="stylesheet"> 
</head>
<body data-target="#nav-main" data-spy="scroll">
   <!-- <div class="preloader">
        <div class="loader">
            <i class="fa fa-circle-o-notch fa-pulse"></i>
       </div>
    </div>-->
    <header id="beranda" class="site-header">
        <div class="bg-images" style="background-image: url(assets/images/header-bg.jpg);"></div>
        <nav id="nav-main" class="navbar navigation-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-main">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a href="/" class="navbar-brand text-logo">CMD</a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="navbar-main">
                            <ul class="nav navbar-nav mainmanu">
                                <li class="active"><a class="smoot_scroll" href="#beranda">Beranda</a></li>
                                <li><a class="smoot_scroll" href="blog.php">Blog</a></li>
                                <li><a class="smoot_scroll" href="#profil">Profil</a></li>
                                <li><a class="smoot_scroll" href="#crew">Crew</a></li>
                                <li><a class="smoot_scroll" href="#tamu">Daftar Tamu</a></li>
                                <li><a class="smoot_scroll" href="#bukutamu">Buku Tamu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </nav>
        <div id="sticky-header"></div>
        <div class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-full-width">
                        <div class="hero-area text-center tb">                           
                            <div class="hero-area-inner tb-cell">                           
                                <div class="hero-static">
                                    <h1 class="author-name">Cara-Mudah.com</h1>
                                    <div class="type-wrap">
                                        <div id="typed-strings">
                                            <p>Cara mudah memulai segala Hal.</p>
                                        </div>
                                        <span id="typed" style="white-space:pre;"></span>
                                    </div>
                                </div>
                                <div class="social-share">
                                    <a class="facebook" href="#CMD"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#CMD"><i class="fa fa-twitter"></i></a>
                                    <a class="instagram" href="#CMD"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            <audio controls style="background: transparent;">
                              <source src="multimedia/audio/Despacito.mp3" type="audio/ogg">
                              <source src="multimedia/audio/Despacito.mp3" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-arrow-down">
            <a href="#profil" class="smoth-scroll btn smoot_scroll"><i class="fa fa-angle-double-down"></i></a>
        </div>
    </header>
    <div class="main-content"> 
        <section id="profil" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-full-width text-center">
                        <h2 class="section-title"><span>Profil</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-thumb-area text-center">
                            <div class="about-thumb">
                                <img class="img-responsive" src="assets/images/logo.png" alt="person">
                            </div>
                            <h3 class="author-name">Cara-Mudah <span>Dev</span></h3>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="about-details">
                            <h2 class="about-title">Hallo,</h2>
                            <p>Perkenalkan <strong>kami adalah salah tiga</strong> dari beberapa mahasiswa yang kuliah di salah satu <i>Universitas di Jawa Tengah</i>.</p>
                            <div class="btn-group">
                                <a href="http://unsiq.ac.id" class="btn"><i class="fa fa-globe"></i>UNSIQ</a>
                                <a href="http://fastikom-unsiq.ac.id" class="btn"><i class="fa fa-globe"></i>FASTIKOM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="crew" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-full-width text-center">
                        <h2 class="section-title"><span>CMD DEV</span></h2>
                    </div>
                </div><
                <div class="row services-content">

                <?php
                    $Run->connect();
                    $Run->select('user');
                    $i=0;
                    foreach($Run->getResult() AS $data){ $i++; ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item text-center">
                            <div class="service-icon"><i class="fa fa-user"></i></div>
                            <div class="service-info">
                                <h4><?php echo $data['nama'];?></h4>
                                 <div class="customer-header"><img src="assets/images/user/<?php echo $data['foto'];?>"  width="150"  alt="customer" class="customer-thumb">
                                    <p>
                                    <b>NIM</b> <?php echo $data['nim'];?><br>
                                    <b>KELAS</b> <?php echo $data['kelas'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                      <?php }
                      $Run->disconnect();
                      ?>
                </div> 
            </div>
        </section>
        <section id="tamu" class="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-full-width text-center">
                        <h2 class="section-title"><span>Daftar Tamu</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-full-width">
                        <div id="customer-reviews">               
                           
                            <?php 
                            $Run->connect();
                            $Run->sql("SELECT * FROM guestbook WHERE publish='Y' ORDER BY id_guest DESC LIMIT 5");
                            $fotonya =  array('1.png','2.png','3.png');
                            $i=1;
                            foreach($Run->getResult() AS $data){
                                shuffle($fotonya);
                                ?>
                            <div class="single-customer-review text-center">
                                <div class="customer-info">                           
                                    <p><?php echo $data['pesan'];?></p>
                                </div>
                                <div class="customer-header"><img src="assets/images/tamu/<?php echo $fotonya[0]; ?>" alt="customer" class="customer-thumb">
                                    <h3 class="customer-name"><?php echo $data['nama']; ?> </h3>
                                    <p><?php echo $data['email'];?></p>
                                </div>
                            </div>
                                <?php $i++; } $Run->disconnect();
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" align="center">
                    <a href="http://www.alexa.com/siteinfo/cara-mudah.com"><script src="http://xslt.alexa.com/site_stats/js/s/a?url=cara-mudah.com" type="text/javascript"></script></a> 
                    <script>
                    var Digital=new Date()
                    var hours=Digital.getHours()
                    if (hours>=5&&hours<=11)
                        document.write('<strong><font color="red"><span style="background-image: url(http://i41.servimg.com/u/f41/16/21/76/15/bling510.gif/u/f41/16/21/76/15/bling310.gif); color: yellow; font-size: 14px; text-shadow: 1px 1px 4px black;"><marquee direction="left"><b> SELAMAT PAGI ^_^ . Have a Nice Day </b></marquee> </span></font> </strong>')
                    else if (hours==12) 
                        document.write('<strong><font color="red"><span style="background-image: url(http://i41.servimg.com/u/f41/16/21/76/15/bling510.gif/u/f41/16/21/76/15/bling310.gif); color: yellow; font-size: 14px; text-shadow: 1px 1px 4px black;"><marquee direction="left"><b> SELAMAT SIANG ^_^ . Sudah Makan belum? </b></marquee> </span></font> </strong>')
                    else if (hours>=13&&hours<=17) 
                        document.write('<strong><font color="red"><span style="background-image: url(http://i41.servimg.com/u/f41/16/21/76/15/bling510.gif/u/f41/16/21/76/15/bling310.gif); color: yellow; font-size: 14px; font-family: arial; text-shadow: 1px 1px 4px black;"><marquee direction="left"><b> SELAMAT SORE ^_^ . Dah Mandi dong ya.. </b></marquee> </span></font> </strong>')
                    else if (hours>=18&&hours<=20)
                        document.write('<strong><font color="red"><span style="background-image: url(http://i41.servimg.com/u/f41/16/21/76/15/bling510.gif/u/f41/16/21/76/15/bling310.gif); color: yellow; font-size: 14px; font-family: arial; text-shadow: 1px 1px 4px black;"><marquee direction="left"><b> SELAMAT MALAM ^_^ . belajar dulu :D </b></marquee> </span></font> </strong>')
                    else if (hours>=21&&hours<=11)
                        document.write('<strong><font color="red"><span style="background-image: url(http://i41.servimg.com/u/f41/16/21/76/15/bling510.gif/u/f41/16/21/76/15/bling310.gif); color: yellow; font-size: 14px; font-family: arial; text-shadow: 1px 1px 4px black;"><marquee direction="left"><b> SELAMAT MALAM ^_^ . Belum Nganguk ya ? </b></marquee> </span></font> </strong>')
                    else 
                        document.write('<strong><font color="red"><span style="background-image: url(http://i41.servimg.com/u/f41/16/21/76/15/bling510.gif/u/f41/16/21/76/15/bling310.gif); color: yellow; font-size: 14px; font-family: arial; text-shadow: 1px 1px 4px black;"><marquee direction="left"><b> SELAMAT MALAM ^_^ . Kok belum Tidur? </b></marquee> </span></font> </strong>')
                    </script>

                <div id="histats_counter"></div>
                <script type="text/javascript">var _Hasync= _Hasync|| [];
                _Hasync.push(['Histats.start', '1,3829027,4,26,190,115,00000011']);
                _Hasync.push(['Histats.fasi', '1']);
                _Hasync.push(['Histats.track_hits', '']);
                (function() {
                    var hs = document.createElement('script'); 
                    hs.type = 'text/javascript'; hs.async = true;
                    hs.src = ('//s10.histats.com/js15_as.js');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                })();</script>
                <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3829027&101" alt="hit counter code" border="0"></a>
                </noscript>


                    </div>
                </div>
            </div>
        </div>
        <section id="bukutamu" class="contact-section">
            <div class="container">
                 <div class="row">
                    <div class="col-md-10 col-full-width text-center">
                        <h2 class="section-title"><span>Buku Tamu!</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-full-width">
                    <?php
                    if (isset($_POST['kirim'])) {
                        
                    if(empty($_POST['nama'])||empty($_POST['email'])||empty($_POST['pesan'])){
                        echo "Tidak boleh kosong!";
                    }else{
                        if(is_numeric($_POST['nama'])==TRUE){
                        echo "Nama tidak valid!";
                        }else{
                            $Run->connect();
                            $id='';
                            $nama = $Run->escapeString($_POST['nama']);
                            $email =$Run->escapeString($_POST['email']);
                            $pesan = $Run->escapeString($_POST['pesan']);
                            $tanggal = date('Y-m-d');
                            $datanu = "{".$nama."|".$email."|".$pesan."|".$tanggal."}";
                            $in = $Run->insert('guestbook',array('tanggal'=>$tanggal,'nama'=>$nama,'email'=>$email,'pesan'=>$pesan,'publish'=>'T'));
                            var_dump($in);
                            $Run->disconnect();
                     }
                    }
                }
                    ?>

                        <form id="contact_form" method="post" action="index.php#bukutamu">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 padding-right">
                                    <p>
                                        <input type="text" name="nama" aria-required="true" placeholder="Nama*" class="form-controllar">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <p>
                                        <input type="text" name="email" aria-required="true" placeholder="Email*" class="form-controllar email">
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <textarea name="pesan" aria-required="true" rows="5" cols="45" placeholder="Pesan anda" class="form-controllar"></textarea>
                                    </p>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-submit" name="kirim">Kirim</button>
                                    <button type="reset" class="btn btn-submit">Batal</button>
                                </div>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>  
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="social-share">
                        <a class="facebook" href="https://fb.me/ctrndk"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="https://twitter.com/ctrndk"><i class="fa fa-twitter"></i></a>
                        <a class="instagram" href="https://instagram.com/ctrndk"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <p class="copyright-text">&copy; 2017 - <?= date('Y'); ?> CMD | All RightReserved.</p>
                    <p><a href="http://www.dmca.com/Protection/Status.aspx?ID=71492b50-7535-49c9-86a1-b1baa657535e" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120am.png?ID=71492b50-7535-49c9-86a1-b1baa657535e" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.1.1.min.js"></script> 
    <script src="assets/js/plugins.js"></script>       
    <script src="assets/js/main.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKVqNxDsmUcCaoSU7yTlmQKnLO%2bcKdGr42Xvbud3eoq5EHLGgmgKV6k8ovO6RAHBpnI1Wx2hnz0jIUQZL4iVy0%2fWck0RT6XtG6ZiKBXPlg%2b3Tfkm83PgTXOy%2bYTjWeuzMhDHhi6rBtdBvKyk6jCfB8k1ulpzxoSoxm5bUY%2f%2f1t8eDToz3KJsFnJjJmtkQNJg6pEIq0L%2bw9jR8kWC%2bSZ%2bunKpwCByFrAC6SNAfHUCrkDQ7n3UozO2tYI5%2fpVE%2bn%2fhCWpQc11SIWZMl6NiPGXutqNeq8Ar0nQEpRDGAI96wJG0U18%2fHaObEYZR8qx%2fmNWoinR3oPpWgOA7IdA7deMyXODB0H3EP8P51k6WY%2bMT5g9djKoGntM2A%2fsaoMkN2pSb93ZBeZoV%2bU4bliMLw%2fCV4DF1wr29MncHIj%2b9jeuf8ODKEuFzHvMkHAS9jsgID46JrbWxmVMi29HTAmi33L%2fgFkgt7OIQUWTQSw%2fgnG02WZwQ8pFcmLlfJPhkpURmCOBJA5IPpRwz2FEjL1fCF6BxSKhc7rOGPCysLgGVoPNuGy1DuIuG8rJkQ9xGJ9p%2fDSlyOeV1hXnP0jTNg%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
