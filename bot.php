<php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://example.com/upload");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$post = array(
    "file1" => "@" .realpath("file1.txt"),
    "file2" => "@" .realpath("file2.txt")
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/x-www-form-urlencoded";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>
