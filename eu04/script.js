alert('Deixa o zoom no 90%, porque eu não adaptei o "eu04" pra mais que 90% de zoom!')

let image = document.getElementById('pexels')
let icon = document.getElementById('x-mark')

function ImageClick() {
    image.style.scale = '1.15'
    icon.style.display = 'block'
}

function IconClick() {
    image.style.scale = '1.0'
    icon.style.display = 'none'
}