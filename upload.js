const sleep = ms => new Promise(r => setTimeout(r, ms));

recode.onmessage = (message) => {
    let data = JSON.parse(message.data);
    console.log("Recieved data!");
    if(data["received"]) {
        data = data["received"];
        data = JSON.parse(data);
        if(data.code) {
            // It is a valid template - make the request.
            let id = document.getElementById("template_id").value;
            let author = document.getElementById("template_author").value;
            let tags = document.getElementById("template_tags").value;
            let desc = document.getElementById("template_description").value;
            let data2 = {
                id: id,
                author: author,
                tags: tags,
                code: data.code,
                description: desc,
            };

            document.getElementById("error").textContent = "";

            let identifier = /^[a-zA-Z_][a-zA-Z_0-9]*$/;
            if(id.length < 3) {
                document.getElementById("error").textContent = "The name must be atleast 3 characters long.";
                return
            }
            if(author == "") {
                document.getElementById("error").textContent = "You need to provide your username as an author.";
                return
            }
            
            console.log(identifier.test(id));
            if(!identifier.test(id)) {
                document.getElementById("error").textContent = "The name provided must have no spaces or special characters.";
                return
            };
            if(desc.length > 60) {
                document.getElementById("error").textContent = `The description is too long, reaching ${desc.length}/60 characters.`;
                return
            };

            let valid_tags = [
                "commands", // Commands or command utilities
                "gameplay", // Gameplay mechanics
                "music", // Noteblock songs
                "utility", // Utilities
                "variables", // Variable manipulation
                "tools", // Tools
                "misc", // Miscellaneous items
            ];
            if(!valid_tags.includes(tags)) {
                document.getElementById("error").textContent = `${tags} is not a valid tag. Check the homepage for a list of valid tabs.`;
                return
            }
            console.log(JSON.stringify(data2));
            console.log("Attempting to fetch to upload_req");
            fetch("../upload_req.php", {
                method: "POST",
                body: JSON.stringify(data2),
            }).then(
                (x) => {
                    x.text().then((x) => {
                        console.log(x);
                        window.location.href = "../"; 
                    });
                }
            );
            
            
        }
    }
}