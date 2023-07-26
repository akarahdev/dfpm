<?
class Template {
    public $name;
    public $data;
    public $author;
    public $tags;
    public $description;
    public $downloads;
    public $stars;
}

function grab_templates(): array {
    $fileSystemIterator = new FilesystemIterator('templates');
    $entries = array();
    foreach ($fileSystemIterator as $fileInfo) {
        $template = new Template();
        $json = file_get_contents("./templates/" . $fileInfo->getFilename());
        $json = json_decode($json);
        $template->author = $json->author;
        $template->data = $json->data;
        $template->description = $json->description;
        $template->downloads = $json->downloads;
        $template->stars = $json->stars;
        $template->tags = $json->tags;
        $template->name = $fileInfo->getFilename();
        $template->name = str_replace(".jsonc", "", $template->name);
        array_push($entries, $template);
    }
    return $entries;
}

function get_template_by_id($id): Template {
    $templates = grab_templates();
    foreach($templates as $template) {
        if($template->name == $id) {
            return $template;
        };
    };
    return new Template();
}
?>