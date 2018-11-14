    <h1><strong>Contoh-Contoh Kompresi Teks</strong></h1>
    <p>&nbsp;</p>
    <p class="judulh2"><strong>1. Shannon-Fano  Algorithm</strong></p>
    <p><span dir="LTR"> </span>Dikembangkan oleh Shannon (Bell Labs)  dan Robert Fano (MIT) </p>
    <p>Contoh : </p>
    <center><table border="5" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="76" valign="bottom"><p>Simbol </p></td>
        <td width="36" valign="bottom"><p>H </p></td>
        <td width="35" valign="bottom"><p>E </p></td>
        <td width="36" valign="bottom"><p>L </p></td>
        <td width="35" valign="bottom"><p>O </p></td>
      </tr>
      <tr>
        <td width="76" valign="bottom"><p>Jumlah</p></td>
        <td width="36" valign="bottom"><p>1</p></td>
        <td width="35" valign="bottom"><p>1</p></td>
        <td width="36" valign="bottom"><p>2</p></td>
        <td width="35" valign="bottom"><p>1</p></td>
      </tr>
    </table>
    </center>
    <p>&nbsp;</p>
    <p><span dir="LTR"> </span>Algoritma : </p>
    <p><span dir="LTR"> </span>1. Urutkan simbol berdasarkan frekuensi  kemunculannya </p>
    <p>2. Bagi simbol menjadi 2  bagian secara rekursif, dengan jumlah yang kira-kira sama pada kedua bagian,  sampai tiap bagian hanya terdiri dari 1 simbol. </p>
    <p><span dir="LTR"> </span>Cara yang paling  tepat untuk mengimplementasikan adalah dengan membuat binary tree. </p>
    <p><center>
     <p><center><img src="image/cteks1.jpg" alt="" width="545" height="426"></center></p>
    <p><strong>2. Adaptive Huffman  Coding</strong>    </p>
    <p>- Metode SHC  mengharuskan kita mengetahui terlebih dahulu frekuensi masing-masing karakter  sebelum dilakukan proses pengkodean. Metode AHC merupakan pengembangan dari SHC  dimana proses penghitungan frekuensi karakter dan pembuatan pohon Huffman  dibuat secara dinamis pada saat membaca data.
    <p>- Algoritma Huffman  tepat bila dipergunakan pada informasi yang bersifat statis. Sedangkan untuk  multimedia application, dimana data yang akan datang belum dapat dipastikan  kedatangannya (audio dan video streaming), algoritma Adaptive Huffman dapat  dipergunakan.        
    <p>- Metode SHC maupun AHC merupakan  kompresi yang bersifat loseless. 
      </center>
    </p>
    <p>- Dibuat oleh David A. Huffman dari MIT  tahun 1952 </p>
    <p>- Huffman banyak  dijadikan &ldquo;back-end&rdquo; pada algoritma lain, seperti Arithmetic Coding, aplikasi  PKZIP, JPEG, dan MP3.    </p>
   <p><center><img src="image/cteks2.jpg" alt="" width="628" height="444"></center></p>
    <p>&nbsp;</p>