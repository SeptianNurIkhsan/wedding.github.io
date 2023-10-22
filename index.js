function musik() {
    var msc=document.querySelector("#musik");
    (!msc.muted)
    ?msc.muted = true : msc.muted = false;
    
}

function galeri(gmbr) {
    var image = document.querySelectorAll(".besar img");
    var actv = document.querySelector(".active");
    actv.classList.remove("active");
    image[gmbr-1].classList.add("active");


}

function profileover() {
    var nama = document.querySelector (".overlay span");
    nama.classList.add("active");
    
}

function profilleave() {
    var nama = document.querySelector (".overlay span")
    nama.classList.remove("active")
}
    