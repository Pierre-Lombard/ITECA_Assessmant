let cart = document.querySelectorAll('.add');

let products = [
    {
        name: "Blue-ginger",
        price: 25,
        inCart: 0,
        tag: "p1"
    },
    {
        name: 'Flaming Katy Kalanchoe',
        price: 15,
        inCart: 0,
        tag:"p2"
    },
    {
        name: 'Tiger aloe',
        price: 10,
        inCart: 0,
        tag:"p3"
    },
    {
        name: 'Golden pothos',
        price: 25,
        inCart: 0,
        tag:"p4"
    },
    {
        name: 'Fairies Castle',
        price: 30,
        inCart: 0,
        tag:"p5"
    },
    {
        name: 'Whitey',
        price: 17,
        inCart: 0,
        tag:"p5"
    },
    {
        name: 'Rattlesnake plant',
        price: 40,
        inCart: 0,
        tag:"p7"
    },
    {
        name: 'Lace aloe',
        price: 30,
        inCart: 0,
        tag:"p8"
    }    
]

for (let i = 0; i < cart.length; i++){
    cart[i].addEventListener('click', () =>{
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCardNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('cart span').textContent = productNumbers;
    }
}
function cartNumbers(product){
    console.log(product);
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers= parseInt(productNumbers);

    if (productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    }else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    
    setItems(product);
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    console.log("My cart items are", cartItems);
    cartItems = JSON.parse(cartItems);
    
    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]:product
            }
        }
        cartItems[product.tag].inCart += 1;
    }else{
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }  
    
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product){
    let cartCost = localStorage.getItem('totalCost');
    

    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price)
    }else{
        localStorage.setItem("totalCost", product.price);
    }
    
}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');

    if(cartItems && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
                <div class = "product">
                <img src = "images/products/${item.tag}.jpg">
                <span>${item.name}</span>
                <div class = "price">${item.price}</div>
                <div class = "quantity">-</div>
                <span>${item.inCart}</span>
                +
                <div class ="total">
                    R${item.inCart * item.price},00
                </div>
            `
        });

        productContainer.innerHTML += `
            <div class = "basketTotalContainer">
                <h4 class ="basketTotalTitle">
                    Basket Total
                </h4>

                <h4 class="basketTotal">R${cartCost}</h4>
            </div>
        `

    }
}
onLoadCardNumbers();
displayCart();