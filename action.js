function login(){
    alert('login')
}
function register(){
    
}
function getObject(id){
    return typeof id == 'object' ? id : document.getElementById(id);
}
function getStyle(id){
    return object(id).style
}
function getClass(id){
    return document.getElementsByClassName(id);
}
