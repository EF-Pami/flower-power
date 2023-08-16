const hmimg = document.querySelector(".featured")
const BASE_URL = 'http://localhost/flower-power/wp-json/wp/v2/posts/'

async function fetchdata() {
    try {
        const response = await fetch(BASE_URL);
    const data = await response.json();
    return data;

    } catch (error) {
        //console.error(error);
    }
    
}
fetchdata()


async function renderHTml() {
    const featured = await fetchdata();
    featured.innerHTML = '';
    
        featured.innerHTML += `
        <img src ="${featured.image}"alt ="featured flower">
        
        `
    }


renderHTml()

