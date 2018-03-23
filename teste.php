<?php
	function greet($name, $color){
		echo "<p>Olá, meu nome é $name e minha cor favorita é $color!</p>";
	}

	greet('Rodrigo', 'Cinza');
?>
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo( 'description' ) ?></p>

<?php
  $myName = "Rodrigo";
  $nomes = array('Rodrigo', 'Meowsalot', 'Bork Bork', 'Borksalot');
 ?>
<p>Olá, menu nome é <?php echo $myName; ?>.</p>
<h4>Trabalhando com Arrays</h4>
<p>Olá, menu nome é <?php echo $nomes[0]; ?> e meus amigos são <?php echo $nomes[1]; ?> e <?php echo $nomes[2]; ?></p></p>
<h4>While Loop</h4>
<?php
  $count = 1;
  while( $count <= 15) {
    echo "<li>$count</li>";
    $count++;
  }
 ?>
<h4>Array Loop</h4>
<?php
  $count = 0;
  while( $count < count( $nomes )) {
    echo "<p>Olá, menu nome é $nomes[$count].</p>";
    $count++;
  }
 ?>
