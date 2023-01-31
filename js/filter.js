const btn_tous = document.querySelector('.btn_tous');
const btn_html = document.querySelector('.btn_html');
const btn_php = document.querySelector('.btn_php');
const btn_threejs = document.querySelector('.btn_threejs');


btn_tous.addEventListener('click', () => {
    btn_tous.classList.add('active');
    btn_html.classList.remove('active');
    btn_php.classList.remove('active');
    btn_threejs.classList.remove('active');
});

btn_html.addEventListener('click', () => {
    btn_tous.classList.remove('active');
    btn_html.classList.add('active');
    btn_php.classList.remove('active');
    btn_threejs.classList.remove('active');
});

btn_php.addEventListener('click', () => {
    btn_tous.classList.remove('active');
    btn_html.classList.remove('active');
    btn_php.classList.add('active');
    btn_threejs.classList.remove('active');
});

btn_threejs.addEventListener('click', () => {
    btn_tous.classList.remove('active');
    btn_html.classList.remove('active');
    btn_php.classList.remove('active');
    btn_threejs.classList.add('active');
});
