<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Marketplace - Lojas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <style>
    .table {
      max-width: 800px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
           <th>Nome</th>
           <th>Telefone</th>
           <th>Celular</th>
           <th>Vendedor</th>
        </tr>
      </thead>
      <tbody>
        @if(count($stores)>0)
            @foreach ($stores as $store)
            <tr>
                <td>{{ $store->name }}</td>
                <td>{{ $store->phone }}</td>
                <td>{{ $store->mobile_phone }}</td>
                <td>{{ $store->user_id }}</td>
              </tr>
            @endforeach
        @endif
      </tbody>
      <tfoot>
        <tr>
          <td colspan="6">
            {{ $stores->links() }}
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
