function move() {
    var y = parseInt(document.all.pic.style.top)
    var x = parseInt(document.all.pic.style.left)
    // новые координаты
    document.all.pic.style.top = y + dy
    document.all.pic.style.left = x + dx
}
function init_move() {
    dx = 8 // приращение по осям
    dy = 3
    setInterval("move()",200)
}