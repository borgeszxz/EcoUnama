document.getElementById('go-to-register').addEventListener('click', function() {
    document.getElementById('form-title').innerText = 'Cadastro';
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'block';
  });

  document.getElementById('go-to-login').addEventListener('click', function() {
    document.getElementById('form-title').innerText = 'Login';
    document.getElementById('login-form').style.display = 'block';
    document.getElementById('register-form').style.display = 'none';
  });

  // Event listener for form submission
  document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the form from submitting in the default way
    window.location.href = "index.php"; // Replace with the destination page URL
  });

  document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the form from submitting in the default way
    window.location.href = "index.php"; // Replace with the destination page URL
  });