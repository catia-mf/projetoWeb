// JavaScript para mudar a imagem e destacar a opção selecionada
const colorOptions = document.querySelectorAll('.colorProduct');
const mainImage = document.getElementById('mainImage');

colorOptions.forEach(option => {
    option.addEventListener('click', () => {
        // Remove a classe 'selected' de todas as opções
        colorOptions.forEach(opt => opt.classList.remove('selected'));
        
        // Adiciona a classe 'selected' ao item clicado
        option.classList.add('selected');

        // Obtém o caminho da nova imagem
        const newImage = option.getAttribute('data-image');
        // Altera o atributo src da imagem principal
        mainImage.setAttribute('src', newImage);
    });
});


// Elementos do DOM
const decreaseBtn = document.getElementById('decrease');
const increaseBtn = document.getElementById('increase');
const quantityDisplay = document.getElementById('quantity');

console.log(quantityDisplay)
// Variável para armazenar a quantidade
let quantity = 1;

// Evento para diminuir a quantidade
decreaseBtn.addEventListener('click', () => {
    if (quantity > 1) { // Evita números menores que 1
        quantity--;
        quantityDisplay.textContent = quantity;
    }
    console.log(quantityDisplay)
});

// Evento para aumentar a quantidade
increaseBtn.addEventListener('click', () => {
    quantity++;
    quantityDisplay.textContent = quantity;
    console.log(quantityDisplay)
});