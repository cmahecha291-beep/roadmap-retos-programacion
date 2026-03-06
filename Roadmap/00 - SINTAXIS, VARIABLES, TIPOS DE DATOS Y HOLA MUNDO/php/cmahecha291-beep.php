<?php
    //WEB OFICIAL PHP
        // https://www.php.net
    //TIPOS DE COMENTARIOS EN PHP :
        // Comentario de una sola linea " // " es utilizando dos barras o slash.
        # Comentario de una sola linea " # " este se genera utilisando un numeral.
        /* 
            Comentario multilinea " / * * / " se genera utilizando una barra al inicio con un asterisco y se cierra 
            al final con un asterisco y una barra, y sirve para hacer que todo el texto o codigo que este dentro de 
            dichos simbolos no se tomara en cuenta a la hora de ejecutar el codigo.
        */
    //DECLARACION DE VARIABLES
        /*
            Para declara variables en el leguaje de programacion PHP se utiliza el simbolo "$" segudo del nombre de
            la variable, luego en el signo " = " con el cual se le asigna un valor a dicha variable y por ultimo se finaliza 
            con un punto y coma " ; ", ejemplo : $myfloat = 19,9; oh $name = value; , como php es un lenguje de tipado 
            dinamico no es necesario asignar directamente el tipo de valor a ingresar, si es una cadena de texto seria 
            " $mystring = "Christian"; " con comillas dobles para identificar que es una cadena de texto.
        */
            $my_integer = 17;
            $my_float = 17,5;
            $my_string = "Christian";
            $my_array = array(1, 2, 3);
            $my_boolean = true;
            $my_boolean = false;
        //  Constantes en PHP
            /*
                Una variable se caracteriaza por que no cambia su contenido despues de asignarlo, en php a diferencia de las 
                las variables no es necesario declararlas con el signo " $ " y dichas constantes se utilizan para definir 
                informacion fija. 
             */
            public const pi = 3.1415926535;
            define("MI_CONSTANTE", 17);
        // Imprimir en  PHP
            /*
                Para imprimir en PHP debemos escribir echo, luego dentro de comillas ponemos en texto y terminamos con punto y coma,
                ejemplo : echo "Hola soy PHP";
             */
            echo " Hola soy PHP ! ";
            /* 
                Imprimir textoy variables al tiempo
                    Para imprimir un texto y una variable al tiempo debemos escibir echo, luego enttre comillar el texto y para concatenar
                    utilizamnos un punto " . ", luego el nombre de la variable, ejemplo: echo "Soy una cadena de texto: " . $mysting; 
                    " Siempre que llamemos una variable la tendremos que llamar con el signo $".
            */
            echo " Soy una cadena de texto: " . $my_string;
    
        // OPERADORES EN PHP
            // Operadores Aritmeticos
                $a = 10;
                $b = 5;
                echo " La suma de a + b es: " . ($a + $b);
                echo " La resta de a - b es: " . ($a - $b);
                echo " La multiplicacion de a * b es: " . ($a * $b);
                echo " La division de a / b es: " . ($a / $b);
                echo " El modulo de a % b es: " . ($a % $b);
        
        //INCREMENTO Y DECREMENTO
            $a = 10;
            $a++; // Incremento, ahora a es igual a 11
            $b = 5;
            $b--; // Decremento, ahora b es igual a 4

        // CONCATENACIÓN DE CADENAS
            $firstName = "Christian";
            $lastName = "Mahecha";
            $fullName = $firstName . " " . $lastName; // Concatenación de cadenas
            echo " Mi nombre completo es: " . $fullName;
        
        //COMPARACIÓN Y IDENTIDAD
            $x = 10;
            $y = "10";
            // Comparación de valores
            if ($x == $y) {
                echo " x y y son iguales en valor.";
            } else {
                echo " x y y no son iguales en valor.";
            }
            // Comparación de tipo y valor
            if ($x === $y) {
                echo " x y y son iguales en tipo y valor.";
            } else {
                echo " x y y no son iguales en tipo y valor.";
            }

        //LOGICOS
            $a = true;
            $b = false;
            // Operador AND lógico
            if ($a && $b) {
                echo " Ambas condiciones son verdaderas.";
            } else {
                echo " Al menos una de las condiciones es falsa.";
            }
            // Operador OR lógico
            if ($a || $b) {
                echo " Al menos una de las condiciones es verdadera.";
            } else {
                echo " Ambas condiciones son falsas.";
            }
            // Operador NOT lógico
            if (!$a) {
                echo " a es falso.";
            } else {
                echo " a es verdadero.";
            }

        //ASIGNACIÓN COMPUESTA
            $a = 10;
            $a += 5; // Ahora a es igual a 15
            $b = 20;
            $b -= 3; // Ahora b es igual a 17
            $c = 4;
            $c *= 2; // Ahora c es igual a 8
            $d = 16;
            $d /= 4; // Ahora d es igual a 4
            $e = 10;
            $e %= 3; // Ahora e es igual a 1

        //OPERADORES BIT A BIT
            $a = 5; // En binario: 0101
            $b = 3; // En binario: 0011
            // Operador AND bit a bit
            $andResult = $a & $b; // Resultado: 1 (0001)
            // Operador OR bit a bit
            $orResult = $a | $b; // Resultado: 7 (0111)
            // Operador XOR bit a bit
            $xorResult = $a ^ $b; // Resultado: 6 (0110)
            // Operador NOT bit a bit
            $notResult = ~$a; // Resultado: -6 (en complemento a dos)

        //OPERADORES ESPECIALES DE PHP 7/8
            $maybe = null;
            $valor = $maybe ?? "Valor por defecto"; // Si $maybe es null, se asigna "Valor por defecto"
            echo $valor; // Imprime "Valor por defecto"
            
            $maybe2 = $maybe ??= "Valor asignado"; // Si $maybe es null, se asigna "Valor asignado"
            echo $maybe2; // Imprime "Valor asignado"

        //ERROR CONTROL OPERATORS
            $file = fopen("archivo.txt", "r") or die("No se pudo abrir el archivo!");
            // El operador "@" suprime los mensajes de error
            $result = @file_get_contents("archivo_inexistente.txt");
            if ($result === false) {
                echo " No se pudo leer el archivo.";
            }
        //PERTENENCIA (IN_ARRARY) Y ARRAY OPERATOR (+)
            $array1 = array(1, 2, 3);
            $array2 = array(4, 5, 6);
            // OPERADOR DE PERTENENCIA IN_ARRAY
            if (in_array(2, $array1)) {
                echo " El número 2 está en el array1.";
            } else {
                echo " El número 2 no está en el array1.";
            }
            // OPERADOR DE UNIÓN DE ARRAYS
            $unionArray = $array1 + $array2; // Resultado: array(1, 2, 3, 4, 5, 6)
            print_r($unionArray);

        //ESTRUCTURAS DE CONTROL
            //CONDICIONALES
                $age = 18;
                if ($age >= 18) {
                    echo " Eres mayor de edad.";
                } else {
                    echo " Eres menor de edad.";
                }
            // BUCLES
                // BUCLE WHILE
                $i = 0;
                while ($i < 5) {
                    echo " El valor de i es: " . $i;
                    $i++;
                }
                // BUCLE FOR
                for ($j = 0; $j < 5; $j++) {
                    echo " El valor de j es: " . $j;
                }
                // BUCLE FOREACH
                $array = array("a", "b", "c");
                foreach ($array as $value) {
                    echo " El valor es: " . $value;
                }
                //SWITCH
                    $color = "rojo";
                    switch ($color) {
                        case "rojo":
                            echo " El color es rojo.";
                            break;
                        case "azul":
                            echo " El color es azul.";
                            break;
                        case "verde":
                            echo " El color es verde.";
                            break;
                        default:
                            echo " Color desconocido.";
                    }
                //DO WHILE
                    $k = 0;
                    do {
                        echo " El valor de k es: " . $k;
                        $k++;
                    } while ($k < 5);
                //BREAK Y CONTINUE
                    for ($m = 0; $m < 10; $m++) {
                        if ($m == 5) {
                            break; // Sale del bucle cuando m es igual a 5
                        }
                        if ($m % 2 == 0) {
                            continue; // Salta a la siguiente iteración si m es par
                        }
                        echo " El valor de m es: " . $m;
                    }
                //QUE ES Y PARA QUE SIRVE "GOTO"
                    /* El operador "goto" permite saltar a una etiqueta específica en el código. Sin embargo, 
                    su uso no es recomendado ya que puede hacer que el código sea difícil de entender y mantener.*/
                    goto etiqueta;
                    echo " Este código se saltará.";
                    etiqueta:
                    echo " Se ha saltado a esta etiqueta.";
                //USO REAL DE UN GOTO
                    $i = 0;
                    while ($i < 5) {
                        if ($i == 3) {
                            goto salto; // Salta a la etiqueta "salto" cuando i es igual a 3
                        }
                        echo " El valor de i es: " . $i;
                        $i++;
                    }
                    salto:
                    echo " Se ha saltado a esta etiqueta.";
                
            //EXCEPCIONES: TRY / CATCH / FINALLY / THROW 
                try {
                    // Código que puede generar una excepción
                    $result = 10 / 0; // Esto generará una excepción de división por cero
                } catch (DivisionByZeroError $e) {
                    // Manejo de la excepción
                    echo " Error: " . $e->getMessage();
                } finally {
                    // Código que se ejecuta siempre, independientemente de si se lanzó una excepción o no
                    echo " Este bloque se ejecuta siempre.";
                }
                
                // Lanzar una excepción personalizada
                function divide($numerator, $denominator) {
                    if ($denominator == 0) {
                        throw new Exception("No se puede dividir por cero.");
                    }
                    return $numerator / $denominator;
                }
                
                try {
                    echo divide(10, 0);
                } catch (Exception $e) {
                    echo " Excepción capturada: " . $e->getMessage();
                }
            
            //FUNCIONES, CLOSURES, OPERADORES EN CONTEXTO Y FUNCIONES ANÓNIMAS 
                //FUNCIONES
                    function greet($name) {
                        return "Hola, " . $name . "!";
                    }
                    echo greet("Christian");
                //CLOSURES
                    $greetClosure = function($name) {
                        return "Hola, " . $name . "!";
                    };
                    echo $greetClosure("Mahecha");
                //FUNCIONES ANÓNIMAS
                    $sum = function($a, $b) {
                        return $a + $b;
                    };
                    echo $sum(5, 10);
                          
                

                

    
 
?>