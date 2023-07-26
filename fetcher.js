console.log("Getting URL params");
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

let id = urlParams.get("id");

fetch(`../templates/${id}.jsonc`).then((obj) => obj.json().then((data) => {
    console.log(data);
    let data_sent = {
        type: "template",
        data: JSON.stringify({
            data: data.data,
            author: data.author,
            name: id,
            version: 1,
        }),
        source: "dfpm",
    };
    console.log("Sending to recode..");
    recode.send(JSON.stringify(data_sent));

    window.location.href = "../";
}));