<?php $title='Cart - Bumenze Grocery'; include 'includes/header.php'; ?>

<h2>Your Cart</h2>
<div id='cart-contents'></div>
<script>
function renderCart(){ var cart=JSON.parse(localStorage.getItem('bg_cart')||'[]'); var el=document.getElementById('cart-contents'); if(!cart.length) el.innerHTML='<p>No items in the cart yet.</p>'; else{ var html='<ul>'; var total=0; cart.forEach(function(it,idx){ html+='<li>'+it.name+' — UGX '+it.price+' <button onclick="removeItem('+idx+')">Remove</button></li>'; total+=Number(it.price); }); html+='</ul><p><strong>Total: UGX '+total+'</strong></p>'; el.innerHTML=html; } updateCartCount(); }
function removeItem(i){ var cart=JSON.parse(localStorage.getItem('bg_cart')||'[]'); cart.splice(i,1); localStorage.setItem('bg_cart', JSON.stringify(cart)); renderCart(); }
renderCart();
</script>

<?php include 'includes/footer.php'; ?>