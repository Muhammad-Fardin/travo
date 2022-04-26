let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.nav-links');

menu.onclick = () => {
     menu.classList.toggle('fa-times');
     navbar.classList.toggle('active');
}

let loadMore = document.querySelector('.packages-main .load-more .btn');
let currentItem = 3;

loadMore.onclick = () => {
     let boxes = [...document.querySelectorAll('.packages-main .box-container-main .box-main')];
     for (var i = currentItem; i < currentItem + 3; i++) {
          boxes[i].style.display = 'inline-block';
     
     };
     currentItem += 3;
     if(currentItem >=  boxes.length){
          loadMore.style.display = 'inline-block';
     }
}

