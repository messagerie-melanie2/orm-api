/**
 * Envoi de la requête
 */
function send() {
    document.body.style.cursor = 'wait'
    document.querySelector('#result').value = "Lancement de la requête...";

    const apikey = document.querySelector('#apikey').value,
        url = document.querySelector('#url').value
        method = document.querySelector('#method').value;

    let myHeaders = new Headers();
    myHeaders.append("Authorization", "Apikey " + apikey);

    let myInit = { 
        method: method,
        headers: myHeaders,
        cache: 'default'
    };

    if (method == 'POST') {
        myHeaders.append("Content-type", "application/json");
        myInit.body = document.querySelector('#json').value;
    }

    let myRequest = new Request(url, myInit);

    fetch(myRequest, myInit).then(function(response) {
        let contentType = response.headers.get("content-type");
        document.body.style.cursor = 'default'
        if (contentType && contentType.indexOf("application/json") !== -1) {
            return response.json().then(function(json) {
                // traitement du JSON
                document.querySelector('#result').value = JSON.stringify(json, null, 2);
            });
        } else {
            document.querySelector('#result').value = "Oops, nous n'avons pas du JSON!";
        }
    }); 
}

/**
 * Changement dans le select
 * 
 * @param {string} value 
 */
function change(value) {
    if (value == 'POST') {
        document.querySelector('#request div.data').style.display = 'block';
    }
    else {
        document.querySelector('#request div.data').style.display = 'none';
    }
}

/**
 * Initialisation du script
 */
function init() {
    change(document.querySelector('#method').value);
    document.querySelector('#result').value = "";
}

init();