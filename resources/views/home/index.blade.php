<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Newsletter Top</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #ffffff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    h1 {
      margin-bottom: 1rem;
      font-size: 1.5rem;
      color: #444;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    input[type="text"] {
      padding: 0.8rem;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }

    button {
      padding: 0.8rem 1.5rem;
      font-size: 1rem;
      font-weight: bold;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Cadastre-se para receber novidades</h1>
    <form action="{{ route('home.store') }}" method="POST">
      @csrf
      <input name="email" type="text" placeholder="Informe seu email">
      <button type="submit">Cadastrar</button>
      @error('email')
      <span style="color: red;">{{ $message }}</span>
      @enderror
    </form>
  </div>
</body>

</html>