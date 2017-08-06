<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>@yield('title') - VikingTrivia</title>
        <meta name="description" content="@yield('description', 'Sabes de vikingos? Competi con tus amigos y demostra quien es el mejor Vikingo.')">
        <meta name="_token" content="{{csrf_token()}}">
        @include("front.partials.head")
        @yield('head')
    </head>
    
    <body>
        <div class='container'> <!-- abre container principal-->
            <form>
                <button id="theme" class="themeButton">THEME</button>
            </form>
            <div class="container_logo"> <!-- abre container del logo -->
                <a href="/vikingtrivia"><img class="img_logo" src="{{ asset("/images/LogoVT.png") }}" alt="Logo del juego"></a>
            </div> <!-- cierra container del logo -->

            <div class="container_menu"> <!-- abre container menu -->
                @include("front.menu.index")
            </div><!-- cierra container menu -->

            @yield('content')

            @include("front.partials.slider")

            @include("front.partials.footer")

            @include("front.partials.scripts")

            @yield('scripts')
        </div> <!-- cierra container principal-->
    </body>
</html>
