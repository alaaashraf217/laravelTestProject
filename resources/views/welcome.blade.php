
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>crud operation</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
                <link href="/css/app.css" rel="stylesheet">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class='container'>
      <h1 class='display-1 my-5 py-5'>crud operations test</h1>
      <a href="{{ url('/books/create') }}" class='btn btn-success my-3'>create</a>
      <a href="{{ url('/books') }}" class='btn btn-success my-3'>get books list</a>
     
  </tbody>
</table>
        </div>
<script src="/js/app.js"></script>

    </body>
    
</html>
