<?php
// Comprobar si se ha enviado una solicitud de "calcular"
if ($_POST['accion'] == 'calcular') {
  // Obtener los valores enviados en la solicitud
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operacion = $_POST['operacion'];

  // Realizar la operación solicitada
  switch ($operacion) {
    case 'suma':
      $resultado = $num1 + $num2;
      break;
    case 'resta':
      $resultado = $num1 - $num2;
      break;
    case 'multiplicacion':
      $resultado = $num1 * $num2;
      break;
    case 'division':
      if ($num2 == 0) {
        $resultado = 'Error: no se puede dividir entre cero';
      } else {
        $resultado = $num1 / $num2;
      }
      break;
    default:
      $resultado = 'Error: operación no válida';
  }

  // Generar la respuesta con el resultado de la operación
  $respuesta = $resultado;
}

// Enviar la respuesta en formato JSON
echo json_encode($respuesta);
?>
