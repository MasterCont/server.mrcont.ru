document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem("lang") && !getCookie("lang")) {
        document.cookie = `lang=${localStorage.getItem("lang")}`;
        window.location.reload();
    }
    if (getCookie("lang")) localStorage.setItem("lang", getCookie("lang"));
});

async function addGETVars(variables = []){

    let variables_url = window.location.search.split("&");
    let variables_names = [];
    let new_search = ``;

    await variables_url.forEach( (el) => {
        // We cut off the first character "?"
        if (el.slice(0, 1) === "?") el = el.slice(1);
        let el_parts = el.split("=");
        variables_names.push({name: el_parts[0], value: el_parts[1]});
    })


    // Looking for the desired GET variable in the url
    variables.forEach( (object) => {
        let result = variables_names.find( (used_variable) => {
            return used_variable.name === object.name;
        });


        if (result) {

            // Converting an array of Gets to a string
            for (let i = 0; i < variables_names.length; i++) {
                let GET_el = variables_names[i];
                if (GET_el.name === object.name) {
                    GET_el.value = object.value;
                    variables_names[i] = {name: GET_el.name, value: GET_el.value};
                    break;
                }
            }


        }
        else {
            variables_names.push({name: object.name, value: object.value});
        }

    });

    variables_names.forEach( (object, index) => {
        new_search += `&${object.name}=${object.value}`;

        // We cut off the first character "&", because it is not used
        if (index === 0) new_search = new_search.slice(1);
    })

    window.location.search = new_search;
}

async function getGETVar(url, variable){
    let urlParams = await new URLSearchParams(url);
    let params = {};

    await urlParams.forEach((p, key) => {
        params[key] = p;
    });

    return params[variable];
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}