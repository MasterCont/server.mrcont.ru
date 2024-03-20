// We get the elements
let html = document.querySelector("html");
let sidebar = document.getElementById("sidebar");
let btn_theme_switch = document.getElementById("btn_theme_switch");

// Scripts for the sidebar
if (sidebar) {
    sidebar.addEventListener("mouseover", () => {
       sidebar.classList.add("active");
       sidebar.classList.remove("not_active");
    });

    sidebar.addEventListener("mouseout", () => {
        sidebar.classList.remove("active");
        sidebar.classList.add("not_active");
    });


    document.addEventListener("DOMContentLoaded",  async () => {
        if (document.querySelector("main")) document.querySelector("main").classList.add("with_sidebar");
        let footers = document.querySelectorAll("footer");
        for (let i = 0; i < footers.length; i++){ footers[i].classList.add("with_sidebar"); }

        // Checking for a cookie to update the theme
        if (!getCookie("data_theme")) document.cookie = `data_theme=light`;

        let nav_links = document.querySelectorAll("#sidebar .nav-link");
        let clicked = null;
        for (let i = 0; i < nav_links.length; i++) {
            clicked = nav_links[0];
            nav_links[i].addEventListener("click", (e) => {
                if (clicked) clicked.classList.remove("active");
                e.target.classList.add("active");
                clicked = e.target;
            });
        }
    });

} else {
    console.error("#sidebar element not found!")
}

// Scripts for the theme switch button
if (btn_theme_switch){
    btn_theme_switch.addEventListener("click",  async () =>{
        await new Theme().toggle();
    });
} else {
    console.error("#btn_theme_switch element not found!");
}

class Theme {
    async toggle(){
        if (html.getAttribute("data-bs-theme") === "dark") {
            html.setAttribute("data-bs-theme", "light");
            localStorage.setItem("data_theme", "light");
            document.cookie = "data_theme=light";
        }
        else {
            html.setAttribute("data-bs-theme", "dark");
            localStorage.setItem("data_theme", "dark");
            document.cookie = "data_theme=dark";
        }
    }
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}