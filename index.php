

<html>
    <head>
        <title>dfpm Home</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <h1>dfpm <span style="color:#555;">DiamondFire Package Manager</span></h1>
            <h2>Home Page</h2>
            Welcome to the website! Here you can download various DiamondFire libraries & templates.<br>
            To upload a template, go to <a href="./upload.php">here</a>, fill out the fields, and use <code>/sendtemplate</code> ingame.
            <br>
            <h3>Notice</h3>
            This site is in an <b>alpha</b> state. Things may break or have issues at any time.<br>
            If you run into them, please report them on the dfpm discord.<br>
            <h3>Discord</h3>
            If you enjoy using dfpm or want to report an issue, you should join our <a href="https://discord.gg/WeQVHXCufv">discord</a>!<br>
            Over there, we have extra features like:<br>
            <ul>
                <li>A log of new packages coming in via a webhook,</li>
                <li>Changelogs whenever there is an update,</li>
                <li>And more!</li>
            </ul>

            <h3>Search by Category</h3>
            <a href="../search.php?filter=category:commands">
                Commands 
                <span style="color:#555;">(commands)</span>
            </a>
            <br>
            <a href="../search.php?filter=category:gameplay">
                Gameplay Mechanics 
                <span style="color:#555;">(gameplay)</span>
            </a>
            <br>
            <a href="../search.php?filter=category:music">
                Noteblock Songs 
                <span style="color:#555;">(music)</span>
            </a>
            <br>
            <a href="../search.php?filter=category:tools">
                Tools
                <span style="color:#555;">(tools)</span>
            </a>
            <br>
            <a href="../search.php?filter=category:utility">
                Utilities
                <span style="color:#555;">(utility)</span>
            </a>
            <br>
            <a href="../search.php?filter=category:variables">
                Variable Manipulation
                <span style="color:#555;">(variables)</span>
            </a>
            <br>
            <br>
            <h3>Or, search manually:</h3>
            <form id="form">
                <input type="text" id="searchbox" onsubmit="search()">
            </form>
        </div>
        <script src="recode.js"></script>
        <script src="search_redirect.js"></script>

        
    </body>
</html>