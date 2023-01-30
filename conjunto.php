<?php

class conjunto
{

    private $arreglo = [];

    public function __construct($tamaño)
    {
        for ($i = 0; $i < $tamaño; $i++) {
            $aux = rand(1, 20);
            $this->arreglo[$i] = $aux;
        }
    }

    public function mostrar($cad, $tamaño)
    {
        echo "<h3 style='text-align:center;'>$cad</h3>";
        echo "<br>";
        echo "<div style='text-align:center;'>";
        echo "[";
        for ($i = 0; $i < $tamaño; $i++) {
            print_r($this->arreglo[$i]);
            echo ",";
        }
        echo "]";
        echo "</div>";
        echo "<br>";
    }

    public function Repetidos()
    {
        $array1 = (array)$this->arreglo;
        $array2 = (array)$this->arreglo;
        //Conjunto 1
        $j = 0;
        $top = 0;
        $repetido = true;

        //Busca Repetidos
        for ($i = 0; $i < count($this->arreglo); $i++) {
            $repetido = false;
            $j = 0;
            while (!$repetido && ($j < $top)) {
                if ($array1[$i] == $array2[$j]) {
                    $repetido = true;
                }
                $j++;
            }
            if (!$repetido) {
                $array2[$top] = $array1[$i];
                $top++;
            }
        }

        //Ordena por Burbuja
        for ($i = 0; $i < $top - 1; $i++) {

            for ($j = 0; $j < $top - 1; $j++) {

                if ($array2[$j + 1] < $array2[$j]) {
                    $aux = $array2[$j + 1];
                    $array2[$j + 1] = $array2[$j];
                    $array2[$j] = $aux;
                }
            }
        }

        //Actualiza el Objeto
        $this->arreglo = null;
        for ($i = 0; $i < $top; $i++) {
            $this->arreglo[$i] = $array2[$i];
        }
        return $top;
    }

    public function Sumar($Conjunto1, $Conjunto2)
    {

        //Variables
        $Array1 = (array)$Conjunto1->arreglo;
        $Array2 = (array)$Conjunto2->arreglo;
        $Contador = 0;
        $tamaño = count($Conjunto1->arreglo) + count($Conjunto2->arreglo);
        $Suma = [$tamaño];

        //Vacia ambos conjuntos dentro de un array $Suma
        for ($i = 0; $i < count($Conjunto1->arreglo); $i++) {
            $Suma[$i] = $Array1[$i];
            $Contador++;
        }
        $j = 0;
        for ($i = $Contador; $i < $tamaño; $i++) {
            $Suma[$i] = $Array2[$j];
            $j++;
        }

        $AUX1 = $Suma;
        $AUX2 = $Suma;
        //Ordena por Burbuja
        for ($i = 0; $i < $tamaño - 1; $i++) {

            for ($j = 0; $j < $tamaño - 1; $j++) {
                if ($AUX2[$j + 1] < $AUX2[$j]) {
                    $aux = $AUX2[$j + 1];
                    $AUX2[$j + 1] = $AUX2[$j];
                    $AUX2[$j] = $aux;
                }
            }
        }

        $AUX1 = $AUX2;
        $j = 0;
        $top = 0;
        $repetido = true;

        //Busca Repetidos
        for ($i = 0; $i < $tamaño; $i++) {
            $repetido = false;
            $j = 0;
            while (!$repetido && ($j < $top)) {
                if ($AUX1[$i] == $AUX2[$j]) {
                    $repetido = true;
                }
                $j++;
            }
            if (!$repetido) {
                $AUX2[$top] = $AUX1[$i];
                $top++;
            }
        }

        echo "<h3 style='text-align:center;'> A u B Es igual a:</h3>";
        echo "<div style='text-align:center;'>";
        echo "[";
        for ($i = 0; $i < $top; $i++) {
            echo "$AUX2[$i],";
        }
        echo "]";
        echo "</div>";
        echo "<br>";
    }

    public function Interseccion($Conjunto1, $Conjunto2)
    {

        $Array1 = (array)$Conjunto1->arreglo;
        $Array2 = (array)$Conjunto2->arreglo;
        $Interseccion = [];
        $k = 0;
        $Contador = 0;
        $tamaño = count($Conjunto1->arreglo) + count($Conjunto2->arreglo);
        $Suma = [$tamaño];

        for ($i = 0; $i < count($Conjunto1->arreglo); $i++) {
            $Suma[$i] = $Array1[$i];
            $Contador++;
        }

        $j = 0;

        for ($i = $Contador; $i < $tamaño; $i++) {
            $Suma[$i] = $Array2[$j];
            $j++;
        }

        $AUX1 = $Suma;
        $AUX2 = $Suma;

        //Ordena por Burbuja
        for ($i = 0; $i < $tamaño - 1; $i++) {

            for ($j = 0; $j < $tamaño - 1; $j++) {

                if ($AUX2[$j + 1] < $AUX2[$j]) {
                    $aux = $AUX2[$j + 1];
                    $AUX2[$j + 1] = $AUX2[$j];
                    $AUX2[$j] = $aux;
                }
            }
        }
        $AUX1 = $AUX2;
        $j = 0;
        $top = 0;
        $repetido = true;

        //Busca Repetidos
        for ($i = 0; $i < $tamaño; $i++) {
            $repetido = false;
            $j = 0;
            while (!$repetido && ($j < $top)) {
                if ($AUX1[$i] == $AUX2[$j]) {
                    $Interseccion[$k] = $AUX2[$j];
                    $k++;
                    $repetido = true;
                }
                $j++;
            }
            if (!$repetido) {
                $AUX2[$top] = $AUX1[$i];
                $top++;
            }
        }

        echo "<h3 style='text-align:center;'> A n B Es igual a:</h3>";
        echo "<div style='text-align:center;'>";
        echo "[";
        for ($i = 0; $i < $k; $i++) {
            echo "$Interseccion[$i],";
        }
        echo "]";
        echo "</div>";
        echo "<br>";
    }

    public function Diferencia($Conjunto1, $Conjunto2, $op)
    {


        $AUX1 = (array)$Conjunto1->arreglo;
        $AUX2 = (array)$Conjunto2->arreglo;

        $tamaño1 = count($Conjunto1->arreglo);
        $tamaño2 = count($Conjunto2->arreglo);
        $k = 0;
        $Resta = [];

        for ($i = 0; $i < $tamaño2; $i++) {
            for ($j = 0; $j < $tamaño1; $j++) {
                if ($AUX2[$i] == $AUX1[$j]) {
                    $Resta[$k] = $AUX1[$j];
                    $k++;
                }
            }
        }

        if ($k == $tamaño1) {
            $Band = 1;
        } else {
            if ($tamaño1 > $k) {
                $Posicion = 0;
                $Posiciones = [];
                $j = 0;

                for ($i = 0; $i < $tamaño1; $i++) {
                    if ($AUX1[$i] == $Resta[$Posicion]) {
                        $Posiciones[$j] = $i;
                        $j++;
                        $Posicion++;
                    }
                }
            }
        }

        for ($i = 0; $i < $j; $i++) {
            unset($AUX1[$Posiciones[$i]]);
        }

        /*echo "Arreglo Resta<br>";
        for($i=0;$i<$k;$i++){
            echo "$Resta[$i] ";
        }
        echo "<br>";

        echo "Arreglo Posiciones<br>";
        for($i=0;$i<=$j;$i++){
            echo "$Posiciones[$i] ";
        }
        echo "<br>";*/

        $y = 0;
        $aux = 0;
        $Resta2 = [];

        for ($i = 0; $i < $tamaño1; $i++) {
            $x = $AUX1[$i];
            for ($j = $aux; $j < $tamaño2; $j++) {
                if ($x == $AUX2[$j]) {
                    break;
                } else {
                    $Resta2[$y] = $x;
                    $y++;
                    break;
                }
            }
        }

        if ($op == 1) {
            echo "<h3 style='text-align:center;'> A - B Es igual a:</h3>";
        } else {
            echo "<h3 style='text-align:center;'> B- A Es igual a:</h3>";
        }

        if ($Resta2 == null) {
            echo "<p style='text-align:center;'>Vacio...</p>";
        } else {
            if ($Band == 1) {
                echo "<div style='text-align:center;'>";
                echo "[Vacio]";
                echo "</div>";
                echo "<br>";
            } else {
                echo "<div style='text-align:center;'>";
                echo "[";
                for ($i = 0; $i < $tamaño1; $i++) {
                    echo "$AUX1[$i] ";
                }
                echo "]";
                echo "</div>";
                echo "<br>";
            }
        }
    }
}
