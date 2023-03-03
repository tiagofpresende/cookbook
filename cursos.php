<?php
    $url = 'https://hotmart.com/pt-br/marketplace/produtos/chocolateria-comercial/X70798149O?gclid=Cj0KCQiAo-yfBhD_ARIsANr56g6PQSiiqwDxNbKe_bfhhXvUkoYCJ19EheC-RXv9zvWBnBX4s23CgdkaAlzfEALw_wcB&ref=L79283088G';

    $html = file_get_contents($url);
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($html);
    libxml_use_internal_errors(false);

    $title = $doc->getElementsByTagName('h1')->item(0)->textContent;
    $description = $doc->getElementById('content-text')->getElementsByTagName('p')->item(0)->textContent;
    $thumb = $doc->getElementById('product-cover-image')->getAttribute('data-src');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cursos - Chocolate Course</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="cursos.php">Cursos</a></li>
				<li><a href="contato.html">Contato</a></li>
                <li><a href="login.html">Login</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="curso">
			<h1><?php echo $title ?></h1>
			<img src="<?php echo $thumb ?>">
			<p><?php echo $description ?></p>
		</section>
	</main>
	<footer>
		<p>Chocolate Course - Todos os direitos reservados</p>
	</footer>
</body>
</html>
