
$('.produtosCategorias').slick({
  dots: true,
  autoplay: true,
  infinite: false,
  speed: 2000,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 601,
      settings: {
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        dots: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 3
      }
    }
  ]
});

//   wow
new WOW().init();

// queryselector seleciona QUALQUER elemento. (seja ele, class, target, id ou outros)
document.querySelector(".abrirMenu").onclick = function () {
  document.documentElement.classList.add("menuMobile");
}
document.querySelector(".fecharMenu").onclick = function () {
  document.documentElement.classList.remove("menuMobile");
}

$(function () {
  Swal.fire({
    title: '<img src="./img/logo.png">',
    text: 'Você é maior de 18 anos?',
    showClass: { popup: 'animate__animated animate__fadeInDown' },
    hideClass: { popup: 'animate__animated animate__fadeOutUp' },
    confirmButtonText: 'Sim',
    cancelButtonText: 'Não',
    showCancelButton: true,
    showCloseButton: false,

  })

    .then((result) => {
      if (result.isDismissed) {
        window.location.href = "";


      }
    })

});



function performSearch() {
  var searchInput = document.getElementById('searchInput');
  var searchResults = document.getElementById('searchResults');

  var searchTerm = searchInput.value.toLowerCase();

  // Lista de produtos
  var productList = [
    { name: "Vinho Pérgola", price: "R$ 23,40" },
    { name: "Diablo Black", price: "R$ 65,90" },
    { name: "Rose Freixenet", price: "R$ 75,91" },
    { name: "Chandon - 750ml", price: "R$ 89,90" },
    { name: "Natural One", price: "R$ 14,99" },
    { name: "Del Valle - 1L", price: "R$ 7,39" },
    { name: "Maguary - 1L", price: "R$ 5,89" },
    { name: "Aurora - 1,5L", price: "R$ 17,50" },
    { name: "RedBull - 250ml", price: "R$ 7,12" },
    { name: "Monster - 269 ml", price: "R$ 5,29 " },
    { name: "Vibe - 2L", price: "R$ 16,00" },
    { name: "Baly - 2L", price: "R$ 9,99" },
    { name: "Skol litrão", price: "R$ 8,99" },
    { name: "Heineken 250 ml", price: "R$ 4,49" },
    { name: "Brahma 350 ml", price: "R$ 9,17" },
    { name: "Budweiser 269 ml", price: "R$ 2,88" },
    { name: "Gelo - 10kg", price: "R$ 12,90" },
    { name: "Vodka- 4500ml", price: "R$ 71,57" },
    { name: "Gin Torquay - 740ml", price: "R$ 79,89" },
    { name: "Licor 43 - 700 Ml", price: "R$ 72,92" },
    { name: "51 - 965ml", price: "R$ 197,88" }
    // Adicione mais produtos conforme necessário
  ];

  // Filtra os resultados com base no termo de busca
  var filteredProducts = productList.filter(product => product.name.toLowerCase().includes(searchTerm));

  // Exibe ou oculta os resultados com base no termo de busca
  searchResults.style.display = searchTerm.trim() !== '' ? 'block' : 'none';

  // Limpa os resultados anteriores
  searchResults.innerHTML = '';

  // Exibe os novos resultados
  filteredProducts.slice(0, 5).forEach(function (product) {
    var cardEnergia = document.createElement('div');
    cardEnergia.classList.add('card');

    var productImage = document.createElement('div');
    productImage.innerHTML = '<img src="./img/' + product.name.toLowerCase().replace(/\s/g, '') + '.png" alt="' + product.name + '">';

    var productName = document.createElement('h3');
    productName.textContent = product.name;

    var productPrice = document.createElement('h4');
    productPrice.textContent = product.price;

    var fundoComprar = document.createElement('div');
    fundoComprar.classList.add('fundoComprar');

    var buyLink = document.createElement('a');
    buyLink.href = 'produto.php';
    buyLink.textContent = 'Comprar';

    fundoComprar.appendChild(buyLink);

    cardEnergia.appendChild(productName);
    cardEnergia.appendChild(productPrice);
    cardEnergia.appendChild(fundoComprar);

    searchResults.appendChild(cardEnergia);
  });
}

// Adiciona um ouvinte de eventos para detectar alterações na barra de pesquisa
document.getElementById('searchInput').addEventListener('input', performSearch);

const handlePhone = (event) => {
  let input = event.target
  input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g, '')
  value = value.replace(/(\d{2})(\d)/, "($1) $2")
  value = value.replace(/(\d)(\d{4})$/, "$1-$2")
  return value
}

const inputName = document.querySelector('#nome');

inputName.addEventListener('keypress', function (e) {
   const keyCode = (e.keyCode ? e.keyCode : e.wich);

   if (keyCode > 47 && keyCode < 58) {
      e.preventDefault();

   }

});