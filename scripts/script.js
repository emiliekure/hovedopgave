// Insert icons
feather.replace();

// Menu open/close
function openNav() {
    document.getElementById("nav-links").style.height = "100vh";
    document.getElementById("opennav").style.height = "0";
    document.getElementById("closenav").style.height = "48px";
}

function closeNav() {
    document.getElementById("nav-links").style.height = "0";
    document.getElementById("opennav").style.height = "48px";
    document.getElementById("closenav").style.height = "0";
}