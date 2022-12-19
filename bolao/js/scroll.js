
window.addEventListener('scroll', function(){
    let scroll = document.querySelector('.voltarTopo');
        scroll.classList.toggle('active', window.scrollY > 300)
})

function voltarTopo(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}