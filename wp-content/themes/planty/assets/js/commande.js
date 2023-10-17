document.addEventListener("DOMContentLoaded", function() {
    const produits = document.querySelectorAll('.produit');
  
    produits.forEach(function(produit) {
      const input = produit.querySelector('input[type="number"]');
      const bouton_plus = produit.querySelector('.bouton_plus');
      const bouton_moins = produit.querySelector('.bouton_moins');
  
      bouton_plus.addEventListener('click', function() {
        input.stepUp(); // Incrémente la valeur de l'input
      });
  
      bouton_moins.addEventListener('click', function() {
        input.stepDown(); // Décrémente la valeur de l'input
      });
    });
  });