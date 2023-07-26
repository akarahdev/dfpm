let recode = new WebSocket('ws://localhost:31371/');

recode.onerror = () => {
    alert("Could not connect to recode.\nSome features of this site may not work.");
};

function popup(message) {

}