<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dalla Cervejaria</title>
    <meta name="description" content="Ela mudou. Descubra uma nova sensação.  Experimente Dalla, a cerveja dos mestres! "/>
    <meta name="keywords" content="Dalla, Cervejaria, Cerveja Artesanal, Santa Catarina"/>
    <meta name="robots" content="index,follow"/>
    <meta property="og:title" content="Dalla Cervejaria" />
    <meta property="og:description" content="Ela mudou. Descubra uma nova sensação.  Experimente Dalla, a cerveja dos mestres!" />
    <meta property="og:image" content="https://www.dallacervejaria.com.br/img/banner.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />
    <meta property="og:url" content="https://www.dallacervejaria.com.br/" />
    <meta property="og:site_name" content="Dalla Cervejaria" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="article:author" content="https://www.facebook.com/cervejariadalla" />
    <meta property="article:publisher" content="https://www.facebook.com/cervejariadalla" />
</head>
<body>
<div class="content">
    <div class="question">
        <img src="{{asset('img/18mais.png')}}">
    </div>
    <div class="answer">
        <div class="no">
            <div class="p-20">
           <a href="http://google.com"> <img src="{{asset('img/18mais-nao.png')}}"></a>
            </div>
        </div>
        <div class="yes">
            <div class="p-20">
                <a href="{{route('dezoitomais.setcookie')}}">
                    <img src="{{asset('img/18mais-sim.png')}}">
                </a>
            </div>
        </div>
    </div>
</div>

</body>
<style>
    body{
        margin: 0;
        padding: 0;
        background: url("{{asset('img/18mais-bg.jpg')}}");
        /*background: #114447;*/
    }
    .content{
        width: 350px; height: auto;display: block;; margin: 50px auto;
    }
    .question{
        width: 100%;;
        height: auto;
        float: left;
    }

    .question img{
    max-width: 100%;
        height: auto;
    }

    .answer{
        width: 100%;;
        height: auto;
        float: left;
    }
    .answer .no{
        width: 50%;;
        height: auto;
        float: left;
    }
    .answer .no img{
      margin: 20px auto;
        max-width: 100%;

    }
    .answer .yes{
        width: 50%;;
        height: auto;
        float: left;
    }
    .answer .yes img{
        margin: 20px auto;
        max-width: 100%;
    }
    .p-20{
        padding: 20px;
    }
</style>
</html>