const mode = document.querySelector('.sun .fa-solid');
mode.addEventListener('click', (e) => {
    e.preventDefault();
    document.body.classList.toggle('blackmode');
    mode.classList.toggle('fa-sun');
    mode.classList.toggle('fa-moon');
});

alert('Selamat datang di web bootcamp');

var test_again = true;
while(test_again === true){
    var masuk = prompt("Anda yakin ingin masuk ke web ini? (yakin/tidak): ");
    if(masuk === "yakin"||"Yakin"){
        if(confirm("Apakah Anda yakin ingin masuk ke web ini? ")){
            test_again = true;
            test_again = document.querySelector(html)
        } else {
            alert(" Anda belum yakin, silakan coba lagi.");
            test_again = false;
        }
    } else {
        alert(" Anda belum yakin, silakan coba lagi.");
    }
}

alert('Terima Kasih....');

const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  navLinks.classList.toggle('active');
});
