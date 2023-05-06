<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Lojas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Cadastro de Lojas</h1>
    <form method="POST" action="/admin/stores/create">
      @csrf
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da loja" required>
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Digite a descrição da loja"></textarea>
      </div>
      <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone da loja">
      </div>
      <div class="form-group">
        <label for="mobile_phone">Celular</label>
        <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="Digite o celular da loja">
      </div>
      <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Digite o slug da loja">
      </div>
      <div class="form-group">
        <label for="slug">Vendedor</label>
        <select class="form-control" name="user_id" id="">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Criar Loja</button>
    </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
