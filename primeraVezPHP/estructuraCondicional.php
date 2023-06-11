<?php
$num1= 10;
$num2= 5;
if($num1 < $num2){  
    echo 'el numero es '.$num2.' es menor que el '.$num1.'';
};
//if elesif
if(10 > 3){
    //insruccion
}else if(10 < 20){
    //instruccion
}else{
    //instruccion
}
/** ejemplo de if */
$autenticado = true;
$admi = false;
if ($autenticado && $admi){
    echo 'usuario autentificado correctamente';
} else{
    echo 'el usuario no autentificado,inicia sesion';
} 
/** if anidado */
$cliente = [
    'nombre' => 'wilfer',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'regular'
    ]
    ];
    echo "<br>";

if(!empty($cliente)){
    echo "el cliento no esta vacio";
    if($cleinte['saldo'] > 0){
        echo "El cliente tiene saldo disponible";
    }else{
        echo "El cliente no tiene saldo";
    }
};
echo "<br>";
/** Switch */
$tecnologia= 'html';
switch($tecnologia){
    case 'php':
        echo "php,un exelente lenguaje";
        break;
    case 'javascript':
        echo "genial , el leguanje para la web";
        break;
    case ' html':
        echo "Emmm ...";
        break;
    default :
        echo " algun lenguaje que no se cual es ";
        break;
};

/** Estructura repetitiva */
// condicional while
echo "<br>";
$i =  0; //inicializamos en 0
while($i <10){
    echo $i . "<br>";
    $i++;//incrementamos
};
echo "<br>";
// consicional do while
$i = 100;
do {
    echo $i. "<br>";
    $i++; 
}while($i < 10);
/** Foreach */
echo "<br>";
$clientes = array('pedro', 'juan', 'Wilfer');
foreach($clientes as $cliente):
    echo $cliente . '<br>';
endforeach;
$cliente = [
    'nombre'=>'wilfer',
    'edad'=>28,
    'saldo'=>200,
    'tipo'=>'premiun'
];
foreach($cliente as $key => $valor):
    echo $key . "=" . $valor . '<br>';
endforeach;

/** Ejemplo de foreach */
$productos =[
    [
    'nombre'=>'table',
    'precio'=>200,
    'disponible'=>true
    ],
    [
    'nombre'=>'televisor 20"',
    'precio'=>500,
    'disponible'=> true
    ],
    [
    'nombre'=>'monitor curvo',
    'precio'=> 400,
    'disponible'=>false
    ]
    ];

foreach($productos as $producto){?>
    <li>
        <p>producto: <?php echo $producto['nombre'];?></p>
        <p>precio: <?php echo $producto['precio'];?></p>
        <p>disponible: <?php echo ($producto['disponible'])? 'disponible':'no disponible';?></p>
    </li>
    <?php
};
?>