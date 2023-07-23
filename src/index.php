<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad nomina</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body>

    <h1 class="flex flex-col items-center justify-center text-3xl font-bold">Nomina Empleados</h1>

<div class="my-5 flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
  <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-700">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <form class="space-y-4 md:space-y-6" action="./operation.php" method="post">
        <h4 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">FORMULARIO DE REGISTRO PARA EMPLEADOS</h4>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" name="nombre">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-medium text-gray-900 ">Nro. Horas trabajadas</label>
            <input type="number" name="horas" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-medium text-gray-900">Valor por hora</label>
            <input type="number" name="valorHora" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" min="1" >
          </div>
          <div>
            <button type="submit" class="btn btn-success w-full border border-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Registrar</button>
          </div>
      </form>
    </div>
  </div>
</div>

    <h2 class="text-center font-bold" >Tabla Nomina Empleados</h2>

    <div class="content-center">
      <table class="w-full border-collapse border border-slate-500">
          <thead>
              <tr>
                <th class="border border-slate-600 ...">#</th>
                <th class="border border-slate-600 ...">Nombre</th>
                <th class="border border-slate-600 ...">Horas Trabajadas</th>
                <th class="border border-slate-600 ...">Valor por Hora</th>
                <th class="border border-slate-600 ...">Salario Básico</th>
                <th class="border border-slate-600 ...">Subsidio</th>
                <th class="border border-slate-600 ...">Seguridad Social</th>
                <th class="border border-slate-600 ...">Retención Fuente</th>
                <th class="border border-slate-600 ...">Salario Neto</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <?php
                include('conection.php');
                $sql = "SELECT * FROM nominaEmpleado";
                $cont = 1;
                $resultado = $conn->query($sql);

                while ($persona = $resultado->fetch_assoc()) {
                ?>

                <th class="border border-slate-600 ..."><?=$cont?></th>
                <td class="border border-slate-700 ..."><?=$persona['nombre']?></td>
                <td class="border border-slate-700 ..."><?=$persona['hrsTrabajadas']?></td>
                <td class="border border-slate-700 ..."><?=$persona['valorHora']?></td>
                <td class="border border-slate-700 ..."><?=$persona['salBasico']?></td>
                <td class="border border-slate-700 ..."><?=$persona['subsidio']?></td>
                <td class="border border-slate-700 ..."><?=$persona['seguridadSocial']?></td>
                <td class="border border-slate-700 ..."><?=$persona['retFuente']?></td>
                <td class="border border-slate-700 ..."><?=$persona['salNeto']?></td><br>
              </tr>
          </tbody>
          </table>
          <div class="w-full border-collapse border border-slate-500">
      <?php
        $cont++;
        }
        $conn->close();
      ?>
      </div>
    </div>
  </body>
</html>