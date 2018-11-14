<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Muhammad Nuzulul Ilham</title>
<link href="style/styles.css" rel="stylesheet" type="text/css"/>
<link href="javascript/styles.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script type="text/javascript">
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function maxDays(mm, yyyy){
var mDay;
    if((mm == 3) || (mm == 5) || (mm == 8) || (mm == 10)){
        mDay = 30;
      }
      else{
          mDay = 31
          if(mm == 1){
               if (yyyy/4 - parseInt(yyyy/4) != 0){
                   mDay = 28
               }
               else{
                   mDay = 29
              }
        }
  }
return mDay;
}
function changeBg(id){
    if (eval(id).style.backgroundColor != "yellow"){
        eval(id).style.backgroundColor = "yellow"
    }
    else{
        eval(id).style.backgroundColor = "#ffffff"
    }
}
function writeCalendar(){
var now = new Date
var dd = now.getDate()
var mm = now.getMonth()
var dow = now.getDay()
var yyyy = now.getFullYear()
var arrM = new Array("January","February","March","April","May","June","July","August","September","October","November","December")
var arrY = new Array()
    for (ii=0;ii<=4;ii++){
        arrY[ii] = yyyy - 2 + ii
    }
var arrD = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")

var text = ""
text = "<form name=calForm>"
text += "<table border=1>"
text += "<tr><td>"
text += "<table width=100%><tr>"
text += "<td align=left>"
text += "<select name=selMonth onChange='changeCal()'>"
    for (ii=0;ii<=11;ii++){
        if (ii==mm){
            text += "<option value= " + ii + " Selected>" + arrM[ii] + "</option>"
        }
        else{
            text += "<option value= " + ii + ">" + arrM[ii] + "</option>"
        }
    }
text += "</select>"
text += "</td>"
text += "<td align=right>"
text += "<select name=selYear onChange='changeCal()'>"
    for (ii=0;ii<=4;ii++){
        if (ii==2){
            text += "<option value= " + arrY[ii] + " Selected>" + arrY[ii] + "</option>"
        }
        else{
            text += "<option value= " + arrY[ii] + ">" + arrY[ii] + "</option>"
        }
    }
text += "</select>"
text += "</td>"
text += "</tr></table>"
text += "</td></tr>"
text += "<tr><td>"
text += "<table border=1>"
text += "<tr>"
    for (ii=0;ii<=6;ii++){
        text += "<td align=center><span class=label>" + arrD[ii] + "</span></td>"
    }
text += "</tr>"
aa = 0
    for (kk=0;kk<=5;kk++){
        text += "<tr>"
        for (ii=0;ii<=6;ii++){
            text += "<td align=center><span id=sp" + aa + " onClick='changeBg(this.id)'>1</span></td>"
            aa += 1
        }
        text += "</tr>"
    }
text += "</table>"
text += "</td></tr>"
text += "</table>"
text += "</form>"
document.write(text)
changeCal()
}
function changeCal(){
var now = new Date
var dd = now.getDate()
var mm = now.getMonth()
var dow = now.getDay()
var yyyy = now.getFullYear()
var currM = parseInt(document.calForm.selMonth.value)
var prevM
    if (currM!=0){
        prevM = currM - 1
    }
    else{
        prevM = 11
    }
var currY = parseInt(document.calForm.selYear.value)
var mmyyyy = new Date()
mmyyyy.setFullYear(currY)
mmyyyy.setMonth(currM)
mmyyyy.setDate(1)
var day1 = mmyyyy.getDay()
    if (day1 == 0){
        day1 = 7
    }
var arrN = new Array(41)
var aa
    for (ii=0;ii<day1;ii++){
        arrN[ii] = maxDays((prevM),currY) - day1 + ii + 1
    }
    aa = 1
    for (ii=day1;ii<=day1+maxDays(currM,currY)-1;ii++){
        arrN[ii] = aa
        aa += 1
    }
    aa = 1
    for (ii=day1+maxDays(currM,currY);ii<=41;ii++){
        arrN[ii] = aa
        aa += 1
    }
    for (ii=0;ii<=41;ii++){
        eval("sp"+ii).style.backgroundColor = "#FFFFFF"
    }
var dCount = 0
    for (ii=0;ii<=41;ii++){
        if (((ii<7)&&(arrN[ii]>20))||((ii>27)&&(arrN[ii]<20))){
            eval("sp"+ii).innerHTML = arrN[ii]
            eval("sp"+ii).className = "c3"
        }
        else{
            eval("sp"+ii).innerHTML = arrN[ii]
            if ((dCount==0)||(dCount==6)){
                eval("sp"+ii).className = "c2"
            }
            else{
                eval("sp"+ii).className = "c1"
            }
            if ((arrN[ii]==dd)&&(mm==currM)&&(yyyy==currY)){
                eval("sp"+ii).style.backgroundColor="#90EE90"
            }
        }
    dCount += 1
        if (dCount>6){
            dCount=0
        }
    }
}
//  End -->
</script>

<script type="text/javascript">
 window.setTimeout("waktu()", 1000);
 function waktu(){
  var tanggal = new Date();
  setTimeout("waktu()", 1000);
  document.getElementById('jam').innerHTML= tanggal.getHours()+" : "+tanggal.getMinutes()+" : "+tanggal.getSeconds();
 }
</script>
</head>

<body onLoad="MM_preloadImages('kkl/1.jpg','kkl/2.jpg','kkl/3.jpg','kkl/4.JPG')">

<div id="wrapper">
  <div id="header"></div>
    <div id="navigation">
  	<ul>
      <li><a href="https://zulhamweb.herokuapp.com/">home</a></li>
      <li><a href="#">teks</a>
      	<ul>
          <li><a href="?page=kompresiteks">Kompresi Data</a></li>
          <li><a href="?page=jeniskompresiteks">Jenis Kompresi Data</a></li>
          <li><a href="?page=klasifikasiteks">Klasifikasi Teknik Kompresi</a></li>
          <li><a href="?page=contohteks">Contoh-contoh</a></li>
          <li><a href="?page=aplikasiteks">Aplikasi Kompresi</a></li>
        </ul>
      </li>
      <li><a href="#">image</a>
     	<ul>
          <li><a href="?page=kompresiimage">Teknik Kompresi</a></li>
          <li><a href="?page=jenisimage">Format Gambar</a></li>
        </ul>
      </li>
       <li><a href="#">Audio</a>
       	<ul>
          <li><a href="?page=konsepsuara">Konsep Dasar</a></li>
          <li><a href="?page=jenisaudio">Format Audio</a></li>
          <li><a href="?page=softwareaudio">Software</a></li>
        </ul>
       </li>
      <li><a href="#">Animasi</a>
      	<ul>
          <li><a href="?page=pengertiananimasi">Pengertian</a></li>
          <li><a href="?page=jenisanimasi">Format Animasi</a></li>
        </ul>
      </li>
      <li><a href="#">Video</a>
      	<ul>
          <li><a href="?page=jenisvideo">Format Video</a></li>
          <li><a href="?page=softwarevideo">Software</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div id="menuright">
  <ul>
      <li>
        <h3>Menu Pilihan</h3>
      </li>
      <li><a href="?page=kkl">Album Kenangan KKL</a></li>
      <li><a href="?page=daftarmatkul">Daftar Mata Kuliah</a></li>
      <li><a href="?page=daftarmahasiswa">Daftar Mahasiswa</a></li>
      <li><a href="http://www.ganool.ph/">Download Movies</a></li>
      <li><a href="http://www.stafaband.info/">Download Music</a></li>
      <li><a href="http://www.bagas31.com/">Download Program</a></li>
      <li><a href="http://www.polsri.ac.id/">File Polsri</a></li>
    </ul>
     <div id="menuright2">
      <ul>
      <li>
        <h3>Kalender</h3>
      </li>
      <center><script type="text/javascript">writeCalendar()</script></center>
      </ul>
      </div>
      <div id="waktu">
      <ul>
        <li>
          <h3>Jam</h3>
        </li>
      </ul>
    </div> 
    <div id="jam">
    <ul>
      <script type="text/javascript">writeWaktu()</script>
      </ul>
    </div>
  <div id="social">
      <ul>
        <li>
          <h3>Social Media</h3>
        </li>
      </ul>
    </div>
    <a href="https://facebook.com/ZulhaamID" target="_blank">
    <div class="facebook-hover social-slide"></div></a>
    <a href="https://twitter.com/Zulhaam23" target="_blank">
    <div class="twitter-hover social-slide"></div></a>
  <a href="https://plus.google.com/+MuhammadNuzululIlham" target="_blank">
    <div class="google-hover social-slide"></div></a>
    <a href="https://zulhaam.blogspot.com" target="_blank">
    <div class="blogger-hover social-slide"></div></a>
    <a href="mailto:ilham.muhammad23@gmail.com" rel="nofollow">
    <div class="email-hover social-slide"></div></a>
    <a href="https://www.youtube.com/user/ZulhaamID" target="_blank">
    <div class="youtube-hover social-slide"></div></a>
    <a href="https://linkedin.com" target="_blank">
  <div class="linkedin-hover social-slide"></div></a>
    <a href="https://www.pinterest.com" target="_blank">
  <div class="pinterest-hover social-slide"></div></a>
    <a href="https://instagram.com" target="_blank">
  <div class="instagram-hover social-slide"></div></a>
    <a href="https://tumblr.com" target="_blank">
  <div class="tumblr-hover social-slide"></div></a>
    <a href="https://skype.com" target="_blank">
    <div class="skype-hover social-slide"></div></a>
    <a href="https://stumbleupon.com/" target="_blank">
  <div class="stumbleupon-hover social-slide"></div></a>
</div>

  <div id="maincontent">
    <?php
	$page = @$_GET['page'];
		if ($page == "") {
		include "inc/home.php";
	}  if ($page == "kompresiteks") {
	  	include "inc/kompresiteks.php";
	}  if ($page == "jeniskompresiteks") {
	  	include "inc/jeniskompresiteks.php";
	} if ($page == "klasifikasiteks") {
		include "inc/klasifikasiteks.php";
	} if ($page == "contohteks") {
		include "inc/contohteks.php";
	} if ($page == "aplikasiteks") {
		 include "inc/aplikasiteks.php";
  } if ($page == "kompresiimage") {
     include "inc/kompresiimage.php";
  } if ($page == "jenisimage") {
     include "inc/jenisimage.php";
  } if ($page == "konsepsuara") {
     include "inc/konsepsuara.php";
  } if ($page == "jenisaudio") {
     include "inc/jenisaudio.php";
  } if ($page == "softwareaudio") {
     include "inc/softwareaudio.php";
  } if ($page == "pengertiananimasi") {
     include "inc/pengertiananimasi.php";
  } if ($page == "jenisanimasi") {
     include "inc/jenisanimasi.php";
  } if ($page == "jenisvideo") {
     include "inc/jenisvideo.php";
  } if ($page == "softwarevideo") {
     include "inc/softwarevideo.php";
	} if ($page == "daftarmatkul") {
     include "inc/jadwalmatkul.php";
  } if ($page == "daftarmahasiswa") {
     include "inc/namamahasiswa.php";
  } if ($page == "kkl") {
     include "inc/kkl.php";
  } 
	?>
  </div> 
  
    <div id="footer">
      <p>Muhammad Nuzulul Ilham - All Rights Reserved</p>
      <p>Politeknik Negeri Sriwijaya</p>
  	</div>
    
</div>
</body>

</html>
