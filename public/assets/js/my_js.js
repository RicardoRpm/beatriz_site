const typeSolicitation = document.querySelector("#typeSolicitation");

const sectionProduct = document.querySelector("#section-product");
const sectionService = document.querySelector("#section-service");


typeSolicitation.addEventListener("change", (event) => {
    if (typeSolicitation.value == 'product') {
        sectionService.style.display = 'none';
        sectionProduct.style.display = 'block';
    } else {    
        sectionProduct.style.display = 'none';
        sectionService.style.display = 'block';
    }
});
