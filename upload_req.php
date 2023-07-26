<?
$json = file_get_contents('php://input');
$data = json_decode($json);
$file = fopen("templates/$data->id.jsonc", "w");
$split = explode(",", $data->tags);

fwrite($file, '
{
    "data": "' . $data->code . '",
    "author": "' . $data->author . '",
    "tags": "' . $data->tags . '",
    "description": "' . $data->description . '",
    "downloads": 0,
    "stars": 0
}
');

fclose($file);
echo '{"posted":"true"}';

$timestamp = date("c", strtotime("now"));
$json_data = json_encode([
    "content" => "New package has been uploaded!",
    "username" => "dfpm",
    "tts" => "false",
    "embeds" => [
        "title" => "$data->id",
        "type" => "rich",
        "description" => "$data->description",
        "url" => "http://localhost:8000/get_template.php?id=$data->id",
        "color" => hexdec("770000"),
        "author" => [
            "name" => "$data->id",
            "url" => "",
        ],
        "fields" => [
            [
                "name" => "Category",
                "value" => "$data->tags",
                "inline" => "false",
            ],
            [
                "name" => "Author",
                "value" => "$data->author",
                "inline" => "false",
            ],
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => json_encode($json_data),
    ),
);
$context  = stream_context_create($options);
var_dump($_ENV["DFPM_WEBHOOK"]);
$url = trim($_ENV["DFPM_WEBHOOK"]);
$result = file_get_contents($url, false, $context);
var_dump($result);
// 
?>