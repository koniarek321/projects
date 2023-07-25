const productItems = document.querySelectorAll('.product-item.on-sale');

  productItems.forEach((item) => {
    item.addEventListener('click', () => {
      const id = item.getAttribute('id');
      location.href = "product.php?id="+id;
    });
  });
