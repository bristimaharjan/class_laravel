<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    
</body>
</html>
<div>
<h1>Chirps</h1>
<form action=" " method="post">
    @csrf
    <textarea name="content" rows="3" placeholder="What's happening" id=""></textarea>
    <button type="submit">Chirps</button>
</form>
</div>
