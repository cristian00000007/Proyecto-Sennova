<html>
    <body>
        <h1>Programa</h1>
        @foreach ($program as $info)
        <table style="width:100%">
            <tr>
              <th>Nombre Programa</th>
              <th>Codigo</th>
              <th>Version</th>
              <th>Tipo de Duracion</th>
              <th>Duracion</th>
              <th>Fecha De Registro</th>
            </tr>
            <tr>
                <td>{{ $info->Progra_Nombre }}</td>
                <td>{{ $info->Progra_Codigo }}</td>
                <td>{{ $info->Progra_Version }}</td>
                <td>{{ $info->Progra_TipoDuracion }}</td>
                <td>{{ $info->Progra_Duracion }}</td>
                <td>{{ $info->Progra_FechaRegistro }}</td>
            </tr>
          </table>
        @endforeach
    </body>
</html>

<style>
table, th, td {
  border:1px solid black;
}
</style>

