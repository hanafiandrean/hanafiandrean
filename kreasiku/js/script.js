// toggle class active search form
const searchFrom = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick = () => {
    searchFrom.classList.toggle('active');
    searchBox.focus()
};

// klik diluar element
const sb= document.querySelector('#search-button');

document.addEventListener('click', function (e){
    if (!sb.contains(e.target) && !searchFrom.contains(e.target)) {
        searchFrom.classList.remove('active');
    }
});