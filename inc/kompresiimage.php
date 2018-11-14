    <h1><strong>Teknik Kompresi Citra/Gambar</strong>    </h1>
    <p><strong>Kompresi  Citra adalah</strong> aplikasi kompresi data yang dilakukan terhadap citra digital  dengan tujuan untuk mengurangi redundansi dari data-data yang terdapat dalam  citra sehingga dapat disimpan atau ditransmisikan secara efisien.    </p>
    <p><strong>TEKNIK KOMPRESI CITRA</strong></p>
    <p>Teknik kompresi pada  citra tetap sama: </p>
    <h3>1. <strong>Lossy Compression</strong>:<strong> </strong></h3>
    <p>- Ukuran  file citra menjadi lebih kecil dengan menghilangkan beberapa informasi dalam  citra asli. </p>
    <p>- Teknik ini mengubah  detail dan warna pada file citra menjadi lebih sederhana tanpa terlihat  perbedaan yang mencolok dalam pandangan manusia, sehingga ukurannya menjadi  lebih kecil. </p>
    <p>- Biasanya digunakan  pada citra foto atau image lain yang tidak terlalu memerlukan detail citra,  dimana kehilangan bit rate foto tidak berpengaruh pada citra. </p>
    <p><span dir="LTR"> </span>- Beberapa teknik loseless: </p>
    <p> a. <strong>Color reduction : </strong> untuk warna-warna tertentu yang mayoritas dimana informasi warna  disimpan dalam color palette.</p>
    <p>b. <strong>Chroma subsampling :</strong>Teknik yang memanfaatkan fakta<strong> </strong>bahwa mata manusia merasa brightness  (luminance) lebih berpengaruh daripada warna (chrominance) itu sendiri, maka  dilakukan pengurangan resolusi warna dengan disampling ulang. Biasanya  digunakan pada sinyal YUV. </p>
    <p> - Chorma  Subsampling terdiri dari 3 komponen: Y (luminance) : U (CBlue) : V (CRed) </p>
    <p><center><img src="image/kompresimg.jpg" alt="" width="533" height="158"></center></p>
    <p>c. <strong>Transform coding</strong>:  menggunakan Fourier Transform<strong> </strong>seperti DCT. </p>
    <p>- <span dir="LTR"> </span>Fractal  Compression: adalah suatu metode lossy untuk mengkompresi citra dengan  menggunakan kurva fractal. Sangat cocok untuk citra natural seperti pepohonan,  pakis, pegunungan, dan awan. </p>
    <p>- Fractal  Compression bersandar pada fakta bahwa dalam sebuah image, terdapat  bagian-bagian image yang menyerupai bagian bagian image yang lain. </p>
    <p>- Proses  kompresi Fractal lebih lambat daripada JPEG sedangkan proses dekompresinya  sama. </p>
    <h3>2. <strong>Loseless Compression</strong>:</h3>
    <p><strong>- </strong>Teknik kompresi citra  dimana tidak ada satupun informasi citra yang dihilangkan.</p>
    <p>-  Biasa digunakan pada  citra medis. </p>
    <p>- Metode  loseless: Run Length Encoding, Entropy Encoding (Huffman, Aritmatik), dan  Adaptive Dictionary Based (LZW)</p>