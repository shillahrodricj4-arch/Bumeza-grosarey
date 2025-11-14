<?php $title='Products - Bumenze Grocery'; include 'includes/header.php'; ?>

<h2>Products</h2>
<div class='products-grid'>
  <div class='card'><img src='../images/mangoes.jpg'><h4>Mangoes</h4><p>UGX 300</p><button onclick="addToCart('Mangoes',300)">Add to cart</button></div>
  <div class='card'><img src='../images/fruits.jpg'><h4>Apples</h4><p>UGX 1500</p><button onclick="addToCart('Apples',1500)">Add to cart</button></div>
</div>

<script>
function addToCart(name,price){ var cart=JSON.parse(localStorage.getItem('bg_cart')||'[]'); cart.push({name:name,price:price}); localStorage.setItem('bg_cart', JSON.stringify(cart)); updateCartCount(); alert(name+' added to cart'); }
</script>

<?php include 'includes/footer.php'; ?>