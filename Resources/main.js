let cart = document.querySelectorAll('.add');
let products = [
    {name: 'Blue-ginger', price: 25, inCart: 0},
    {name: 'Flaming Katy Kalanchoe', price: 15, inCart: 0},
    {name: 'Tiger aloe', price: 10, inCart: 0},
    {name: 'Golden pothos', price: 25, inCart: 0},
    {name: 'Fairies Castle', price: 30, inCart: 0},
    {name: 'Whitey', price: 17, inCart: 0},
    {name: 'Rattlesnake plant', price: 40, inCart: 0},
    {name: 'Lace aloe', price: 30, inCart: 0}    
]

for (let i =0; i < cart.length; i++){
    cart[i].addEventListener('click', () =>{
        cartNumbers();
    })
}

function onLoadCardNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('cart span').textContent = productNumbers;
    }
}
function cartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers= parseInt(productNumbers);

    if (productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    }else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    
}

onLoadCardNumbers();