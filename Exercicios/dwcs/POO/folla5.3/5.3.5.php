<!-- 
    Traits. Crea un trait DatosPersoa, que garde nome, apelidos e idade, e os seus métodos de entrada e
saída. Crea agora 2 clases Vendedor e Cliente, e empreguen ese trait, e comproba que podes empregar
eses métodos para gardar e mostrar información nesas clases. Define o método __toString( ), que chama a
mostrar Valores.  

-->

<?php

include ("trair_5.3.5.php");
class Vendedor{
    use datosPersona;

}
class Cliente{
    use datosPersona;
    
}

$vendedor= new vendedor;
$vendedor->setNome('pedro');
$vendedor->setApelidos('lopez');
$vendedor->setIdade('30');

echo $vendedor;