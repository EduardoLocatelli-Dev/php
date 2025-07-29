<?php 

$name = "images";

if (!is_dir($name)) {

	mkdir($name);
	echo "Diretória $name criado com sucesso!";

} else {

	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}

?>