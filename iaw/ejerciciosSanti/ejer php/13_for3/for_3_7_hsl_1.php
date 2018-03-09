<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Tablas de colores (Formulario). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Tablas de colores (Formulario)</h1>

    <form action="for_3_7_hsl_2.php" method="get">
      <p>Escriba un número (0 &lt; número &le; 20) y mostraré tablas de colores.</p>

      <table>
        <tbody>
          <tr>
            <td><strong>Número:</strong></td>
            <td><input type="number" name="numero" min="1" max="20" value="5" /> </td>
          </tr>
        </tbody>
      </table>

      <p>
        <input type="submit" value="Mostrar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>
  </body>
</html>
