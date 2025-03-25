let list = document.getElementById('tb_user');
let list_conn = document.getElementById('tb_sess');
let liste = document.getElementById('list');
let liste_conn = document.getElementById('conn');

list.style.display = "none";
list_conn.style.display = "none";


liste.addEventListener("click", function(){
    list.style.display = "block";
    list_conn.style.display = "none";
})

liste_conn.addEventListener("click", function(){
    list.style.display = "none";
    list_conn.style.display = "block";
})