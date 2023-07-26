<html>
    <head>
        <title>dfpm Home</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <h1>dfpm <span style="color:#555;">DiamondFire Package Manager</span></h1>
            <h2>Search Page</h2>
            Here are the results for your query, <b>"<? echo $_GET["filter"]; ?>"<b>.
            <br>
            <h3>List of Found Templates</h3>
            <?
                function search($string) {
                    include './grab_templates.php';

                    $templates = grab_templates();

                    foreach($templates as $template) {
                        $template->name = htmlspecialchars($template->name);
                        $template->author = htmlspecialchars($template->author);
                        $template->description = htmlspecialchars($template->description);
                        $template->tags = htmlspecialchars($template->tags);

                        if(str_starts_with($string, "category:")) {
                            $category = str_replace("category:", "", $string);
                            if($template->tags == $category) {
                                echo_template($template);
                            }
                        } else {
                            if(str_contains($template->name, $string)) {
                                echo_template($template);
                            }
                        }
                        
                    };
                }

                function echo_template($template) {
                    echo "
                        <div class=\"template-box\">
                            <b style=\"font-size:20px;\"><a href=\"../get_template.php?id=$template->name\" style=\"color:#eee;\">$template->name</a></b><br>
                            <b>Author:</b> <i>$template->author</i><br>
                            <br>
                            <i>$template->description</i>
                        </div>
                        ";
                }

                search($_GET["filter"]);
                
            ?>
        </div>
        <script src="recode.js"></script>

        
    </body>
</html>