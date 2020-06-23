var calculate = () =>{
    let x = parseFloat(document.querySelector('.x').value);
    let y = parseFloat(document.querySelector('.y').value);
    let cost = document.querySelector('.cost');
    let area = document.querySelector('.area');
    let multiply = x*y;
    cost.innerHTML = 'Powierzchnia całkowita ścian: '.concat(Math.round(multiply* 100)/100);
    money = multiply * 8;
    area.innerHTML = 'Cena całkowita: '.concat(Math.round(money* 100)/100,'zł');
}