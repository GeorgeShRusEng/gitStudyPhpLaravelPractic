

//Получаем кнопки назад и вперед по селктору и ложим их в соотвествующие переменные (next и prev)
let prev = document.querySelector('#carousel.buttons__control.prev__but');
let next = document.querySelector('#carousel.buttons__control.next__but');

//Получаем картинки по селектору и помещаем их в переменную image
let images = document.querySelectorAll('#carousel.carousel__img.img__item');

let i = 0; // номер текущей картинки на экране

images[i].style.display = 'none'; // пречем текущую картинку

i++;

if (i >= images.length) {
    i = 0;
} //переменная i равна 0

prev.onclick = function () {
    images[i].style.display = 'none';
    i = i - 1;
    if (i < 0) {
        i = images.length - 1;
    }
    images[i].style.display = 'block';
}

