const flowers = document.querySelector(".flowers")
const flowers_block = document.querySelector(".flowers-block")
const WOO_API_KEY ='ck_6524121645e71d16b42553d87b9327fa150f0973'
const WOO_API_SECRET ='cs_7c36ea27b9e646b8b3da5553fbc748620066273d'
const BASE_URL = `https://localhost/flower-power/wp-json/wc/v2/products?consumer_key=${WOO_API_KEY}&consumer_secret=${WOO_API_SECRET}`

async function fetchdata() {
    try {
        console.log (BASE_URL)
        const response = await fetch(BASE_URL);
    const data = await response.json();
    return data;

    } catch (error) {
        //console.error(error);
    }
    
}


async function renderHTml() {
    const products = await fetchdata();
    //console.log({products})
    //console.log({html: flowers_block.innerHTML})
    flowers_block.innerHTML = ``;
    products.forEach(function (element, index) {
        flowers_block.innerHTML += `
        <a href="productdetails.html?id=${element.id}"><img src ="${element.images}"alt ="flowers"></a>
        
        `
    })
}

renderHTml()

