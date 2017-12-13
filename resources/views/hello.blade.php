<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
  </head>
  <body>
    <h1>Hello <?php echo $name." ".$sirname; ?> </h1>
    @foreach ($rejected_auths as $rejected_auth)
      <li> {{ $rejected_auth->switch_id }} </li>
      <li> {{ $rejected_auth->port }} </li>
    @endforeach
  </body>
</html>
