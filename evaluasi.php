<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Evaluasi TIK Online</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="polisi.css" rel="stylesheet" type="text/css" media="screen" />
<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var ans = new Array;
var done = new Array;
var yourAns = new Array;
var explainAnswer = new Array;

var score = 0;
ans[1] = "a";
ans[2] = "e";
ans[3] = "c";
ans[4] = "d";
ans[5] = "b";
ans[6] = "d";
ans[7] = "a";
ans[8] = "b";
ans[9] = "e";
ans[10] = "b";

explainAnswer[1]="The reason why Answer 1 is Melakukan konversi obyek";
explainAnswer[2]="The reason why Answer 2 is mengubah bentuk melalui titik pada pinggiran";
explainAnswer[3]="The reason why Answer 3 is Ctrl+Shift+V";
explainAnswer[4]="The reason why Answer 4 is Mengubah bentuk obyek";
explainAnswer[5]="The reason why Answer 5 is Karena motion lain bukan digunakan untuk berpindah tempat";

function Engine(question, answer) {
yourAns[question]=answer;
}

function Score(){
var answerText = "How did you do?\n------------------------------------\n";
for(i=1;i<=10;i++){
   answerText=answerText+"\nQuestion :"+i+"\n";
  if(ans[i]!=yourAns[i]){
    answerText=answerText+"\nThe correct answer was "+ans[i]+"\n"+explainAnswer[i]+"\n";
  }
  else{
    answerText=answerText+" \nCorrect! \n";
    score++;
  }
}

answerText=answerText+"\n\nYour total score is : "+score+"\n";

//now score the user
answerText=answerText+"\nComment : ";
if(score<=0){
answerText=answerText+"You need to learn some more";
}
if(score>=1 && score <=4){
answerText=answerText+"bit more practice";
}
if(score>=5 && score <=7){
answerText=answerText+"doing ok";
}
if(score>8){
answerText=answerText+"Good";
}

alert(answerText);

}
//  End -->
</script>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header">

		<div id="logo">
			<h1>EVALUASI TIK</a></h1>
			<h2>Online</h2>
		</div>
		<!-- end #logo -->
		<div id="menu">

			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="evaluasi.php">Evaluasi</a></li>
				<li><a href="about.php">Tentang</a></li>

			</ul>
		</div>
		<!-- end #menu -->
	</div>
	<!-- end #header -->
	</div>
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title">Pilihlah Jawaban yang Paling Tepat!</h2>
				<div class="entry">
					<div class="entry-btm">
						<DIV ALIGN="LEFT">

<FORM>
<b>1. Salah satu fasilitas dimana kita dapat saling bertukar informasi di internet merupakan pengertian dari:</b><br>
<input type=radio name="q1" value="a" onClick="Engine(1, this.value)">a) www<br>
<input type=radio name="q1" value="b" onClick="Engine(1, this.value)">b) html<br>
<input type=radio name="q1" value="c" onClick="Engine(1, this.value)">c) http<br>
<input type=radio name="q1" value="d" onClick="Engine(1, this.value)">d) web browser<br>
<input type=radio name="q1" value="e" onClick="Engine(1, this.value)">e) web server<p>
<b>2. Yang bertugas untuk menerima dan merespon permintaan-permintaan dari client:</b><br>
<input type=radio name="q2" value="a" onClick="Engine(2, this.value)">a) www<br>
<input type=radio name="q2" value="b" onClick="Engine(2, this.value)">b) html<br>
<input type=radio name="q2" value="c" onClick="Engine(2, this.value)">c) http<br>
<input type=radio name="q2" value="d" onClick="Engine(2, this.value)">d) web browser<br>
<input type=radio name="q2" value="e" onClick="Engine(2, this.value)">e) web server<p>
<b>3. Yang merupakan salah satu jenis dari web browser adalah:</b><br>
<input type=radio name="q3" value="a" onClick="Engine(3, this.value)">a) Apache<br>
<input type=radio name="q3" value="b" onClick="Engine(3, this.value)">b) Tomcat<br>
<input type=radio name="q3" value="c" onClick="Engine(3, this.value)">c) Firefox<br>
<input type=radio name="q3" value="d" onClick="Engine(3, this.value)">d) Wamp<br>
<input type=radio name="q3" value="e" onClick="Engine(3, this.value)">e) Xampp<p>
<b>4. Bagian dari dokumen html yang berfungsi untuk menampilkan text, image, link dan semua yang akan di tampilkan pada web page disebut:</b><br>
<input type=radio name="q4" value="a" onClick="Engine(4, this.value)">a) html<br>
<input type=radio name="q4" value="b" onClick="Engine(4, this.value)">b) head<br>
<input type=radio name="q4" value="c" onClick="Engine(4, this.value)">c) title<br>
<input type=radio name="q4" value="d" onClick="Engine(4, this.value)">c) body<br>
<input type=radio name="q4" value="e" onClick="Engine(4, this.value)">d) header<p>
<b>5. Sekumpulan kata yang menjadi judul atau subjudul dalam sebuah dokumen HTML, dan terdiri dari 6 level disebut:</b><br>
<input type=radio name="q5" value="a" onClick="Engine(5, this.value)">a) Format dokumen<br>
<input type=radio name="q5" value="b" onClick="Engine(5, this.value)">b) heading<br>
<input type=radio name="q5" value="c" onClick="Engine(5, this.value)">c) list<br>
<input type=radio name="q5" value="d" onClick="Engine(5, this.value)">c) font<br>
<input type=radio name="q5" value="e" onClick="Engine(5, this.value)">d) paragraph<p>
<b>6. Fasilitas pengaturan huruf yang akan ditampilkan dalam dokumen disebut:</b><br>
<input type=radio name="q6" value="a" onClick="Engine(6, this.value)">a) Format dokumen<br>
<input type=radio name="q6" value="b" onClick="Engine(6, this.value)">b) heading<br>
<input type=radio name="q6" value="c" onClick="Engine(6, this.value)">c) list<br>
<input type=radio name="q6" value="d" onClick="Engine(6, this.value)">c) font<br>
<input type=radio name="q6" value="e" onClick="Engine(6, this.value)">d) paragraph<p>
<b>7. Perintah untuk membuat baris pada HTML adalah...</b><br>
<input type=radio name="q7" value="a" onClick="Engine(7, this.value)">a) hr<br>
<input type=radio name="q7" value="b" onClick="Engine(7, this.value)">b) br<br>
<input type=radio name="q7" value="c" onClick="Engine(7, this.value)">c) td<br>
<input type=radio name="q7" value="d" onClick="Engine(7, this.value)">c) tr<br>
<input type=radio name="q7" value="e" onClick="Engine(7, this.value)">d) p<p>
<b>8. Perintah untuk mengganti baris pada HTML adalah...</b><br>
<input type=radio name="q8" value="a" onClick="Engine(8, this.value)">a) hr<br>
<input type=radio name="q8" value="b" onClick="Engine(8, this.value)">b) br<br>
<input type=radio name="q8" value="c" onClick="Engine(8, this.value)">c) td<br>
<input type=radio name="q8" value="d" onClick="Engine(8, this.value)">c) tr<br>
<input type=radio name="q8" value="e" onClick="Engine(8, this.value)">d) p<p>
<b>9. Tag <IMG> berfungsi untuk menampilkan:</b><br>
<input type=radio name="q9" value="a" onClick="Engine(9, this.value)">a) teks<br>
<input type=radio name="q9" value="b" onClick="Engine(9, this.value)">b) link<br>
<input type=radio name="q9" value="c" onClick="Engine(9, this.value)">c) tabel<br>
<input type=radio name="q9" value="d" onClick="Engine(9, this.value)">c) html<br>
<input type=radio name="q9" value="e" onClick="Engine(9, this.value)">d) gambar<p>
<b>10. Yang digunakan untuk membuat tampilan halaman HTML yang terbagi-bagi menjadi beberapa bagian dimana setiap bagiannya merupakan satu halaman HTML yang terpisah...</b><br>
<input type=radio name="q10" value="a" onClick="Engine(10, this.value)">a) form<br>
<input type=radio name="q10" value="b" onClick="Engine(10, this.value)">b) frame<br>
<input type=radio name="q10" value="c" onClick="Engine(10, this.value)">c) image<br>
<input type=radio name="q10" value="d" onClick="Engine(10, this.value)">c) color<br>
<input type=radio name="q10" value="e" onClick="Engine(10, this.value)">d) tabel<p>
<LEFT>
<input type=submit onClick="Score()" value="submit">
<input type=reset value="reset">
</LEFT>
</FORM>
</DIV>
						</div>
				</div>
			
			</div>
			
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>

				<li id="search">
					<form method="get" action="">
						<fieldset>
						<input type="text" id="search-text" name="s" value="" />
						<input type="submit" id="search-submit" value="" />
						</fieldset>
					</form>
				</li>
				<li>

					<h2>Tentang </h2>
					<ul>
						<li><a href="sim.php">SIM</a></li>
						<li><a href="stnk.php"> STNK</a></li>
						<li><a href="skck.php">SKCK</a></li>
						<li><a href="bpkb.php">BPKB</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->

</div>
<div id="footer">
	<p>(c) Orang Bahagia 2011</p>
</div>
<!-- end #footer -->
</body>
</html>
