@extends('frontend.index')

@section('title', __('Home'))

@section('content')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
            <div class="section">
                <h3><b>PHP Hosting</b></h3>
                <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                <ul>
                <li><i class="fas fa-check-circle fz-icon-check"></i>Solusi PHP untuk performa query yang lebih cepat</li>
                <li><i class="fas fa-check-circle fz-icon-check"></i>Konsumsi memori uang lebih rendah</li>
                <li><i class="fas fa-check-circle fz-icon-check"></i>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                <li><i class="fas fa-check-circle fz-icon-check"></i>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
              </ul>
            </div>
            </div>
            <div class="col s12 m6">
                <img src ="{{ asset('frontend/assets/svg/illustration banner PHP hosting-01.svg') }}">
            </div>
        </div>

    </div>
  </div>

  <div class="container">

      <!--   Icon Section   -->
      <div class="row center valign-wrapper" >
        <div class="col s12 m4">
          <img src="{{ asset('frontend/assets/images/zendguard.png') }}">
          <p>PHP Zend Guard Loader</p>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
            <img src ="{{ asset('frontend/assets/images/composer.png') }}">
            <p>PHP Composer</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
            <img src ="{{ asset('frontend/assets/images/ioncube.png') }}">
            <p>PHP IonCube Loader</p>
            </div>
        </div>
        </div>
  </div>

  <div class="container">
      <div class="row">
        <div class="col s12 center">
          <h3><b>Paket Hosting Singapura yang Tepat</b></h3>
          <p> Diskon $40% + Domain Dan SSL Gratis untuk Anda</p>
        </div>
        <div class="col s12 m6 l3">
          <div class="icon-block">
            <h4 class="center black-text"><b>Bayi</b></h4>
            <h5 class="center">Rp. 14.900/bln</h5>
            <p><b>938</b> Pengguna Terdaftar</p>
            <ul>
            <li><b>0.5 RESOURCE POWER</b></li>
            <li><b>500</b> MB Disk Space</li>
            <li><b>Unlimited</b> Bandwith</li>
            <li><b>Unlimited</b> Database</li>
            <li><b>1</b> Domain</li>
            <li><b>Instant</b> Backup</li>
            <li><b>Unlimited</b> SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/1') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>
          </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
          <h4 class="center black-text"><b>Pelajar</b></h4>
            <h5 class="center">Rp. 23.450/bln</h5>
            <p><b>4.168</b> Pengguna Terdaftar</p>
            <ul>
            <li><b>1x</b> RESOURCE POWER</li>
            <li><b>Unlimited</b> Disk Space</li>
            <li><b>Unlimited</b> Bandwith</li>
            <li><b>Unlimited POP3</b> Email</li>
            <li><b>Unlimited</b> Database</li>
            <li><b>10</b> addon Domains</li>
            <li><b>Instant</b> Backup</li>
            <li><b>Domain Gratis</b> Selamanya</li>
            <li><b>Unlimited</b> SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/2') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>    
        </div>
        </div>

        <div class="col s12 m6 l3" style="position:relative">
          <img src="{{ url('images/best.png') }}" class="fz-bestseller">
          <div class="icon-block">
           <div class="col s12 blue lighten-1">
          <h4 class="center white-text"><b>Personal</b></h4>
            <h5 class="center white-text">Rp. 38.900/bln</h5>
            <p class="center white-text">10.017 Pengguna Terdaftar</p>
            </div>
            <ul>
            <li><b>2x</b> RESOURCE POWER</li>
            <li><b>Unlimited</b> Disk Space</li>
            <li><b>Unlimited</b> Bandwith</li>
            <li><b>Unlimited</b> POP3 Email</li>
            <li><b>Unlimited</b> Database</li>
            <li><b>Unlimited</b> Addpn Domains</li>
            <li><b>Instant</b> Backup</li>
            <li><b>Domain Gratis</b> Selamanya</li>
            <li><b>Provat</b> Name Server</li>
            <li><b>Unlimited</b> SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/3') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>   
        </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
          <h4 class="center black-text"><b>Bisnis</b></h4>
            <h5 class="center">Rp. 65.900/bln</h5>
            <p>3.552 Pengguna Terdaftar</p>
            <ul>
            <li><b>3x</b> RESOURCE POWER</li>
            <li><b>Unlimited</b> Disk Space</li>
            <li><b>Unlimited</b> Bandwith</li>
            <li><b>Unlimited</b> POP3 Email</li>
            <li><b>Unlimited</b> Database</li>
            <li><b>Unlimited</b> Addpn Domains</li>
            <li><b>Unlimited</b> Backup</li>
            <li><b>Domain Gratis</b> Selamanya</li>
            <li><b>Privat</b> Name Server</li>
            <li><b>Prioritas</b> Layanan Support</li>
            <li>*****</li>
            <li><b>Unlimited</b> SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/4') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>   
        </div>
        </div>
      </div>

<div class="container">
    <div class="section">
    <div class="col s12 center">
          <h5>Powerful dengan Limit PHP yang Lebih Besar</h4>
        </div>
      <!--   Icon Section   -->
      <div class="row" >
        <div class="col s6">
          <ul>
            <li><i class="fas fa-check-circle fz-icon-check"></i>max executeion time 300s</li>
            <li><i class="fas fa-check-circle fz-icon-check"></i>max executeion time 300s</li>
            <li><i class="fas fa-check-circle fz-icon-check"></i>php memory limit 1024 MB</li>
          </ul>
        </div>

        <div class="col s6">
          <ul>
            <li><i class="fas fa-check-circle fz-icon-check"></i>post max 128 MB</li>
            <li><i class="fas fa-check-circle fz-icon-check"></i>upload max filesize 128 MB</li>
            <li><i class="fas fa-check-circle fz-icon-check"></i>max input vars 2500</li>
          </ul>
          </div>
        </div>
    </div>
  </div>

  <div class="col s18">
    <div class="col s12 center">
          <h4>Semua Paket Hosting Sudah Termasuk</h4>
        </div>
      <div class="row center" >
        <div class="col s4 center">
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5><b>PHP Semua Versi</b></h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5><b>Garansi Uptime 99.9%</b></h5>
          <p>Data center yang mendukung kelangsungan website Anda 14/7</p>
        </div>

        <div class="col s4">
            <img width="50" src ="{{ asset('frontend/assets/svg/icon PHP Hosting_My SQL.svg') }}">
            <h5><b>MySQL Versi 5.6</b></h5>
          <p>Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5><b>Database InnoDB Unlimited</b></h5>
          <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda</p>
        </div>

        <div class="col s4">
            <img width="50" src ="{{ asset('frontend/assets/svg/icon PHP Hosting_CPanel.svg') }}">
            <h5><b>Panel Hosting CPanel</b></h5>
          <p>Kelola website dengan panel canggih yang familiar di hati anda</p>
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5><b>Wildcard Remote MySQL</b></h5>
          <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
        </div>
     </div>
    <br>

    <div class="row">
        <div class="col s12 center">
          <h4>Mendukung Penuh Framework Laravel</h4>
        </div>
            <div class="col s12 m6">
            <div class="section">
                <h5>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan
                    PHP hostiing murah kami mendukung penuh frramework favorite Anda
                </h5>
                <li>Install Laravel 1 klik dengan Softaculous Install</li>
                <li>Mendukung ekstensi PHP MYCrypet, phar, mbstring, json, dan fileinfo</li>
                <li>Tersedia Composer dan SSH untuk menginstal package pilihan Anda</li>
                <p>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                <a class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>   
            </div>
            </div>
            <div class="col s12 m6">
                <img src ="{{ asset('frontend/assets/svg/illustration banner support laravel hosting.svg') }}">
            </div>
    </div>
        
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 center">
          <h3>Paket Hosting Singapura yang Tepat</h3>
          <p> Diskon $40% + Domain Dan SSL Gratis untuk Anda</p>
        </div>
        <div class="col s12 m6 l3">
          <div class="icon-block">
            <ul>
            <li>ICePHP</li>
            <li>apc</li>
            <li>apcu</li>
            <li>apm</li>
            <li>ares</li>
            <li>bcmath</li>
            <li>bcompiler</li>
            <li>big_int</li>
            <li>bitset</li>
            <li>bloomy</li>
            <li>bz2_filter</li>
            <li>clamav</li>
            <li>coin_acceptor</li>
            <li>crack</li>
            <li>dba</li>
            <ul>
          </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
            <ul>
            <li>http</li>
            <li>huffman</li>
            <li>idn</li>
            <li>igbinery</li>
            <li>imageick</li>
            <li>imap</li>
            <li>inclued</li>
            <li>inotify</li>
            <li>interbase</li>
            <li>intl</li>
            <li>ioncube_loader</li>
            <li>ioncube_loader_4</li>
            <li>jsmin</li>
            <li>json</li>
            <li>idap</li>
            </ul>    
        </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
            <ul>
            <li>nd_pdo_mysql</li>
            <li>oauth</li>
            <li>osi8</li>
            <li>odbc</li>
            <li>opcache</li>
            <li>pdf</li>
            <li>pdo</li>
            <li>pdo_dblib</li>
            <li>pdo_firebird</li>
            <li>pdo_mysql</li>
            <li>pdo_pgsql</li>
            <li>pdo_odbc</li>
            <li>pdo_sqlite</li>
            <li>pgsql</li>
            <li>phalcon</li>
            </ul>   
        </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
          <ul>
            <li>stats</li>
            <li>stem</li>
            <li>stomp</li>
            <li>suhosin</li>
            <li>sybase_ct</li>
            <li>sysvmsg</li>
            <li>sysvsem</li>
            <li>sysvhm</li>
            <li>tidy</li>
            <li>timezonedb</li>
            <li>treder</li>
            <li>translit</li>
            <li>uploadprogress</li>
            <li>uri_tamplate</li>
            <li>uuid</li>
            </ul>     
        </div>
        </div>
        <div class="col s12 center">
        <a class="waves-effect waves-teal btn-flat blue white-text">Selengkapnya</a>   
        </div>
      </div>
</div>

<div class="row">
            <div class="col s12 m6">
            <div class="section">
                <h5>Linux Hosting yang Stabil dengan Teknologi LIVE
                </h5>
                <p>SuperMicro Intel Xeion 24-Cores server dengan RAM 128 GB dan teknologi LVE 
                    CloudeLinux untuk stabilitas server Anda. Dilengkapi dengan SSD untuk kecepatan
                    MYSQL dan caching, Apache load balancer berbasis LiteSpeed Technologies,
                     CageFS security, RAID-10 protection dan auto backup untuk kemananan webite PHP Anda</p>
                <a class="waves-effect waves-teal btn-flat blue white-text">Pilih Hosting Anda</a>   
            </div>
            </div>
            <div class="col s12 m6">
                <img src ="{{ asset('frontend/assets/images/Image support.png') }}">
            </div>
    </div>
    </div>
  </div>
</div>
<div class="fz-sosmed">
    <div class="fz-sosmedtext">
    Bagikan jika Anda menyukai halaman ini.</div>
    <img src="{{ asset('images/google.png') }}" width="30">
    <img src="{{ asset('images/google.png') }}" width="30">
    <img src="{{ asset('images/google.png') }}" width="30">
</div>
<div class="fz-chat">
    <div class="fz-chattext">
    Perlu BANTUAN? Hubungi Kami : 0274-5305505</div>
    <a class="waves-effect waves-teal btn-flat blue white-text"><i class="material-icons left">chat_bubble</i>LiveChat</a>   
</div>
  
@endsection
