<?php
$TOKEN = "yn7wfbPX6uVBVKqzNXUS";

$nama = $_POST['Nama'];
$nope = $_POST['Nope'];
$email = $_POST['Email'];
$pesan = $_POST['Pesan'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $nope,
'message' => "
Hai $nama, terimakasih telah memesan

Nama: $nama
Nomor HP: $nope
Email: $email
Pesan: $pesan",

),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $TOKEN"
  ),
));

$response = curl_exec($curl);
if (curl_errno($curl)) {
  $error_msg = curl_error($curl);
}
curl_close($curl);

if (isset($error_msg)) {
 echo $error_msg;
}
echo $response;
?>