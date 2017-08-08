<!-- Special characters Meta -->
<meta charset="utf-8">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- W3School CSS for buttons -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Favicon -->
<link rel="shortcut icon" href="/images/favicon.ico">

<!-- Bootstrap core CSS -->
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- The Project's core CSS file -->
<link href="/css/styles.css" rel="stylesheet" >
{{--@if (session)--}}

@if (!session()->has("theme"))
    <link href="/css/stylesInside.css" rel="stylesheet" class="estilos" id="themeInside">
@elseif (session("theme") == 'inside')
    <link href="/css/stylesInside.css" rel="stylesheet" class="estilos" id="themeInside">
    @else
    <link href="/css/stylesOutside.css" rel="stylesheet" class="estilos" id="themeOutside">
@endif




