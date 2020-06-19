var photo = document.querySelectorAll('.img');
var photoBig = document.querySelector('.photo-big');
// console.log(photo[0].src = C:/xampp/htdocs/E.14%20-%2011%20-%2019.01/pies1-szary.jpg);
// photo[0].src = 'C:/xampp/htdocs/E.14%20-%2011%20-%2019.01/pies1-szary.jpg'
// console.log(photo[0]);

    // photo[0].addEventListener('mouseenter',()=> {
    //    photo[0].src="pies1-szary.jpg";
    // })
    // photo[0].addEventListener('mouseleave',()=> {
    //     photo[0].src="pies1.jpg";
    //  })
    //  photo[1].addEventListener('mouseenter',()=> {
    //     photo[1].src="pies2-szary.jpg";
    //  })
    //  photo[1].addEventListener('mouseleave',()=> {
    //      photo[1].src="pies2.jpg";
    //   })

    //   photo[2].addEventListener('mouseenter',()=> {
    //     photo[2].src="pies3-szary.jpg";
    //  })
    //  photo[2].addEventListener('mouseleave',()=> {
    //      photo[2].src="pies3.jpg";
    //   })
    //   photo[0].addEventListener('click',() => {
    //       photoBig.src="pies1.jpg";
    //   })
    //   photo[1].addEventListener('click',() => {
    //     photoBig.src="pies2.jpg";
    // })
    // photo[2].addEventListener('click',() => {
    //     photoBig.src="pies3.jpg";
    // })

photo.forEach((x) => {
    x.addEventListener('mouseenter', () => {
        x.src = x.src.replace('.jpg','-szary.jpg');
    })
    x.addEventListener('mouseleave', () => {
        x.src =  x.src.replace('-szary.jpg','.jpg');
    })
    x.addEventListener('click', () => {
        photoBig.src = x.src.replace('-szary.jpg','.jpg');
    })
    })