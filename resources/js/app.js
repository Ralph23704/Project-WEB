import './bootstrap';
import '../sass/app.scss'


function burger(){
    window.document.getElementById('menu-burger').classList.toggle('open');
    window.document.querySelector('nav ul li ul').classList.toggle('open')
}
