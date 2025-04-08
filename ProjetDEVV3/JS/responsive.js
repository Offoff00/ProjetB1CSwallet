let menunav = document.querySelector('#menunav'); 
let menulink = document.querySelector('#menulink');

menunav.addEventListener('click', function() {
    if (menulink.style.display === "block") {
        menulink.style.display = "none";
    } else {
        menulink.style.display = "block";
    }
});
