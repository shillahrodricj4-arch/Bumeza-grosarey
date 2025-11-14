<?php $title='Contact - Bumenze Grocery'; include 'includes/header.php'; ?>

<h2>Contact</h2>
<form onsubmit="event.preventDefault(); alert('Message sent.');">
<label>Email</label><br>
<input type='email' required placeholder='you@example.com'><br><br>
<label>Message</label><br>
<textarea rows='5' required></textarea><br><br>
<button class='btn' type='submit'>Send message</button>
</form>

<?php include 'includes/footer.php'; ?>