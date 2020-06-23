submit = document.querySelector('.submit');
submit.addEventListener('click',() =>{
    let number = Number(document.querySelector('.number').value);
    let checkbox = document.querySelector('.checkbox').checked;
    const result = document.querySelector('.result');
    let cena = number * 100;
    console.log(number)
    console.log(cena)
    if(checkbox == true) {
        console.log('x');
        cena = cena * 1.3;
    }
    result.innerHTML = 'koszt wesela to '+ cena;
    
});