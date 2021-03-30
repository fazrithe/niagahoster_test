@extends('frontend.index')

@section('title', __('Home'))

@section('content')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
            <div class="section">
                <h3>PHP Hosting</h3>
                <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                <li>Solusi PHP untuk performa query yang lebih cepat</li>
                <li>Konsumsi memori uang lebih rendah</li>
                <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7, PHP 8</li>
                <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
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
          <h3>Paket Hosting Singapura yang Tepat</h3>
          <p> Diskon $40% + Domain Dan SSL Gratis untuk Anda</p>
        </div>
        <div class="col s12 m6 l3">
          <div class="icon-block">
            <h4 class="center light-blue-text">Bayi</h4>
            <h5 class="center">Rp. 14.900/bln</h5>
            <p>938 Pengguna Terdaftar</p>
            <ul>
            <li>0.5 RESOURCE POWER</li>
            <li>500 MB Disk Space</li>
            <li>Unlimited Bandwith</li>
            <li>Unlimited Database</li>
            <li>1 Domain</li>
            <li>Instant Backup</li>
            <li>Unlimited SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/1') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>
          </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
          <h4 class="center light-blue-text">Pelajar</h4>
            <h5 class="center">Rp. 23.450/bln</h5>
            <p>4.168 Pengguna Terdaftar</p>
            <ul>
            <li>1x RESOURCE POWER</li>
            <li>Unlimited Disk Space</li>
            <li>Unlimited Bandwith</li>
            <li>Unlimited POP3 Email</li>
            <li>Unlimited Database</li>
            <li>10 addon Domains</li>
            <li>Instant Backup</li>
            <li>Domain Gratis Selamanya</li>
            <li>Unlimited SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/2') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>    
        </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
           <div class="col s12 blue lighten-1">
          <h4 class="center white-text">Personal</h4>
            <h5 class="center white-text">Rp. 38.900/bln</h5>
            <p class="center white-text">10.017 Pengguna Terdaftar</p>
            </div>
            <ul>
            <li>2x RESOURCE POWER</li>
            <li>Unlimited Disk Space</li>
            <li>Unlimited Bandwith</li>
            <li>Unlimited POP3 Email</li>
            <li>Unlimited Database</li>
            <li>Unlimited Addpn Domains</li>
            <li>Instant Backup</li>
            <li>Domain Gratis Selamanya</li>
            <li>Provat Name Server</li>
            <li>Unlimited SSL Gratis Selamanya</li>
            </ul>
            <a href="{{ url('/transaction/3') }}" class="waves-effect waves-teal btn-flat blue white-text">Pilih Sekarang</a>   
        </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
          <h4 class="center light-blue-text">Bisnis</h4>
            <h5 class="center">Rp. 65.900/bln</h5>
            <p>3.552 Pengguna Terdaftar</p>
            <ul>
            <li>3x RESOURCE POWER</li>
            <li>Unlimited Disk Space</li>
            <li>Unlimited Bandwith</li>
            <li>Unlimited POP3 Email</li>
            <li>Unlimited Database</li>
            <li>Unlimited Addpn Domains</li>
            <li>Instant Backup</li>
            <li>Domain Gratis Selamanya</li>
            <li>Provat Name Server</li>
            <li>Prioritas Layanan Support</li>
            <li>*****</li>
            <li>Unlimited SSL Gratis Selamanya</li>
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
            <li>max executeion time 300s</li>
            <li>max executeion time 300s</li>
            <li>php memory limit 1024 MB</li>
        </div>

        <div class="col s6">
            <li>post max 128 MB</li>
            <li>upload max filesize 128 MB</li>
            <li>max input vars 2500</li>
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
          <h5>PHP Semua Versi</h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5>PHP Semua Versi</h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
        </div>

        <div class="col s4">
            <img width="50" src ="{{ asset('frontend/assets/svg/icon PHP Hosting_My SQL.svg') }}">
            <h5>PHP Semua Versi</h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5>PHP Semua Versi</h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
        </div>

        <div class="col s4">
            <img width="50" src ="{{ asset('frontend/assets/svg/icon PHP Hosting_CPanel.svg') }}">
            <h5>PHP Semua Versi</h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
          <img width="50" src="{{ asset('frontend/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
          <h5>PHP Semua Versi</h5>
          <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</p>
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
  
@endsection
