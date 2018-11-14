    <h1><strong>Kompresi Data</strong></h1>
    <p>- Kompresi berarti  memampatkan/mengecilkan ukuran
    <p>- Kompresi data adalah  proses mengkodekan informasi menggunakan bit atau information-bearing unit yang  lain yang lebih rendah daripada representasi data yang tidak terkodekan dengan  suatu sistem enkoding tertentu.
    <p>- Contoh kompresi  sederhana yang biasa kita lakukan misalnya adalah menyingkat kata-kata yang  sering digunakan tapi sudah memiliki konvensi umum. Misalnya: kata &ldquo;yang&rdquo;  dikompres menjadi kata &ldquo;yg&rdquo;.<span dir="LTR"> </span>Pengiriman data hasil  kompresi dapat dilakukan jika pihak pengirim/yang melakukan kompresi dan pihak  penerima memiliki aturan yang sama dalam hal kompresi data.
    <p>- Pihak pengirim harus  menggunakan algoritma kompresi data yang sudah baku dan pihak penerima juga  menggunakan teknik dekompresi data yang sama dengan pengirim sehingga data yang  diterima dapat dibaca/di-dekode kembali dengan benar.
    <p>- Kompresi data menjadi  sangat penting karena memperkecil kebutuhan penyimpanan data, mempercepat  pengiriman data, memperkecil kebutuhan bandwidth.
    <p>- Teknik kompresi bisa  dilakukan terhadap data teks/biner, gambar (JPEG, PNG, TIFF), audio (MP3, AAC,  RMA, WMA), dan video (MPEG, H261, H263). </p>
    <center><blockquote>
      <p><strong>Contoh  kebutuhan data selama 1 detik pada layar resolusi 640 x 480:</strong></p>
    </blockquote></center>
    <p><strong> - Data Teks</strong></p>
    <p>1 karakter = 2 bytes (termasuk  karakter ASCII Extended)</p>
    <p>Setiap karakter ditampilkan dalam 8x8  pixels </p>
    <p>Jumlah karakter yang  dapat ditampilkan per halaman = <u>640 x 480</u> = 4800 karakter 8  x 8 </p>
    <p>Kebutuhan tempat penyimpanan per halaman =  4.800×2 byte = 9.600 byte = 9.375 Kbyte </p>
    <blockquote>
      <p><strong>- Data Grafik Vektor</strong></p>
      <p>1 still image membutuhkan 500 baris </p>
      <p>Setiap 1 baris  direpresentasikan dalam posisi horisontal, vertikal, dan field atribut sebesar  8-bit</p>
      <p>Sumbu Horizontal dipresentasikan dengan log2 640 = 10 bits</p>
      <p>Sumbu vertikal direpresentasikan dengan log2 640 = 9 bits</p>
      <p>Bits per line = 9 bits + 10 bits + 8 bits = 27 bits</p>
      <p>Storage required per screen page = 500 x 27/8 = 1687,5 byte = 1,65 byte</p>
    </blockquote>
    <blockquote>
      <p><strong>-   Color Display</strong></p>
      <p>Jenis  : 256, 4.096, 16.384, 65.536, 16.777.216 warna</p>
      <p>Masing-masing  warna pixel memakan tempat 1 byte</p>
      <p>Misal 640 x 480 x 256 warna x 1 byte =  307.200 byte = 300 KByte </p>
    </blockquote>
    <center><blockquote>
      <p><strong>Kebutuhan  tempat penyimpanan untuk media kontinyu untuk 1 detik playback:</strong></p>
      <p>Sinyal audio tidak  terkompres dengan kualitas suara telepon dengan sample 8 kHz dan dikuantisasi 8  bit per sample, pada bandwidth 64 Kbits/s, membutuhkan storage:</p>
    </blockquote></center>
    <center>
      <p><center>
        <img src="image/teks1.jpg" alt="teks" width="440" height="83">
      </center></p>
      <p>Sinyal audio CD disample 44,1 kHz,  dikuantisasi 16 bits per sample, Storage = 44,1 kHz x 16 bits = 705,6 x 103  bits = 88.200 bytes untuk menyimpan 1 detik playback      </p>
      <p>Kebutuhan sistem PAL standar      </p>
      <p>- 625 baris dan 25 frame/detik </p>
    </center>
    <center>
      <p>-  bytes/pixel (luminance, red chrom, blue chrom) o Luminance  Y menggunakan sample rate 13,5 MHz      </p>
      <p>-  Chrominance  (R-Y dan B-Y) menggunakan sample rate 6.75 MHz o Jika  menggunakan 8 bit/sample, maka </p>
    </center>
      <p><center><img src="image/teks2.jpg" alt="teks2" width="498" height="146"></center></p>
