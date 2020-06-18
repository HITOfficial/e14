var choice = (a) => {
    var fontStyle = document.querySelector('select').value;
    var change = document.querySelector('.change');
    var fontSize = String(Number(document.querySelector('.size').value));
    var size = fontSize.concat('%');
    console.log(size);
    change.style.fontSize = size;
    change.classList.remove('red','green','blue');
    if(fontStyle == 'prosty') {
        change.classList.remove('italic');
        change.classList.add('normal');
    } else if (fontStyle == 'kursywa') {
        change.classList.remove('normal');
        change.classList.add('italic')
    }
    switch(a){
        case 1:
            change.classList.add('red');
            break;
        case 2:
            change.classList.add('green');
            break;
        case 3:
            change.classList.add('blue');
            break;    
            
    }
}