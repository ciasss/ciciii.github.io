var tombolNav = $(".tombol-nav");
var menu = $("nav .navbar ul");

function klikNav(){
    tombolNav.click(function(){
        menu.toggle();
    });
    menu.click(function(){
        menu.toggle();
    });
}

$(document).ready(function(){
    var width = $(window).width();
    // alert('lebar' + width);
    if(width < 990){
        klikNav();
    }
})

$(window).resize(function(){
    var width = $(window).width();
    if(width> 989){
        menu.css("display", "block");

    }else{
        menu.css("display","none");
    }
    klikNav();
});

var element = document.body;

function ubahMode(){
    alert('Tema Sudah Terganti')
    element.classList.toggle("dark");
}
const button = document.getElementById('btn-about');
button.addEventListener("click", function showInfo() {
    const x = document.getElementById('info-about');
    if (x.style.display == 'none'){
        x.style.display = 'block';
    }else{
        x.style.display == 'none';
    }
})

