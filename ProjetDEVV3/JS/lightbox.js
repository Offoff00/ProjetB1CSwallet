
let images = document.querySelectorAll('.lightboxable');

images.forEach(image => {
image.addEventListener('click', function () {
    
 let source = this.getAttribute('src');


 let div = document.createElement('div');
  div.setAttribute('id', 'lightbox');


 let img = document.createElement('img');
    img.setAttribute('src', source);

   let close = document.createElement('img');
   close.setAttribute('src', 'images/close.svg');
     close.setAttribute('id', 'close');

    div.appendChild(img);
    div.appendChild(close);

    document.body.appendChild(div);


    close.addEventListener('click', function () {
      document.body.removeChild(div);
    });
  });
});
