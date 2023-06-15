let cards = document.querySelectorAll(".card");

cards.forEach(card => card.addEventListener("mouseover", (e) => {
  cards.forEach(card => card.classList.remove('active'));
  e.target.classList.add('active');
}));