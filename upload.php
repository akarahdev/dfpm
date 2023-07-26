<html>
    <head>
        <title>dfpm Upload</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <h1>dfpm <span style="color:#555;">DiamondFire Package Manager</span></h1>
            <h2>Upload Template</h2>
            To submit the template, use <code>/sendtemplate</code> ingame with Recode to upload the template!<br>
            The server will recieve the template and use the form data to post it to the server.<br>
            <br>
            <label for="template_id">Template Identifier:</label>
            <input type="text" id="template_id"></input>
            <br>
            <label for="template_author">Template Author:</label>
            <input type="text" id="template_author"></input>
            <br>
            <label for="template_tags">Template Category:</label>
            <input type="text" id="template_tags"></input>
            <br>
            <label for="template_tags">Template Description (keep it short!):</label>
            <input type="text" id="template_description"></input>
            <br>
            <label for="template_tags">Authentication Code:</label>
            <input type="text" id="template_description"></input><br>
            <i>Don't have one? Get one at the official dfpm plot, <code>/join 65037</code></i>
            <br>
            <br>
            <span id="error"></span>
        </div>
        <script src="recode.js"></script>
        <script src="upload.js"></script>
    </body>
</html>