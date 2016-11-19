<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Bog.app</title>
<meta charset="utf-8" />
<link rel="stylesheet" type=text/css href="{{asset('css/general.css')}}" />
<!--<link rel="stylesheet" href="/cssgeneral.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
-->
</head>
 
<body>
  Hola codigo facilito

<br>
<h1> {{$article->title}}</h1>
<hr>
{{$article->content}}
<hr>
{{$article->user->name}} | {{$article->category->name}}|
@foreach($article->tags as $tag)
    {{$tag->name}}
@endforeach

    
</body>
</html>





