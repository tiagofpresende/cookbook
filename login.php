<?php
// Retrieve the username and password from the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are correct
if ($username === 'gustavo' && $password === 'pastry123') {
  // If the credentials are correct, redirect the user to the dashboard page
  header('Location: dashboard.php');
  exit;
} else {
  // If the credentials are incorrect, show an error message
  $error_message = 'Usuário ou senha inválido(a).';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Gustavo Ono's Chocolate and Pastry Classes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Navigation menu goes here -->
  </header>

  <main>
    <h1>Login</h1>
    <?php if (isset($error_message)): ?>
      <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
      <div>
        <label for="username">Usuário</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div>
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div>
        <button type="submit">Login</button>
      </div>
    </form>
  </main>

  <footer>
    <!-- Footer content goes here -->
  </footer>
</body>
</html>
