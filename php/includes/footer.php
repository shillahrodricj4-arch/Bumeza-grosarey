
</div>
<footer class="site-footer">
  <div class="container"><p class="footer-note">© 2025 Bumenze Grocery. All rights reserved.</p></div>
</footer>
<script>
function updateCartCount(){ try{ const cart = JSON.parse(localStorage.getItem('bg_cart') || '[]'); var el=document.getElementById('cart-count'); if(el) el.textContent = cart.length; }catch(e){} }
updateCartCount();
</script>
</body></html>
