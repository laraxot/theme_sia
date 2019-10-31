 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

        <!-- SEO -->
        <title>SIA S.p.A. | Servizi di Informatica Assicurativa</title>

        <!-- URL CANONICAL -->
		<meta name="robots" content="index, follow">
		<meta name="description" content="Soluzioni modulari per gestire in modo integrato il business dell'impresa assicurativa. Oltre 35 anni di esperienza al servizio di compagnie, agenzie e broker. Scegli il tuo software gestionale assicurativo con SIA S.p.A.!">
		<link rel="canonical" href="https://www.siaworld.com">

        <!-- SOCIAL CARDS -->
		<meta property="og:url"                content="https://www.siaworld.com" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="SIA S.p.A. | Servizi di Informatica Assicurativa" />
		<meta property="og:description"        content="Soluzioni modulari per gestire in modo integrato il business dell'impresa assicurativa. Oltre 35 anni di esperienza al servizio di compagnie, agenzie e broker." />
		<meta property="og:image"              content="#TODO" />

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.google.com/" crossorigin>

        <!-- MAIN CSS -->
        {{--
        <link href="{{asset('css/frontend_css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{asset('css/frontend_css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{asset('css/frontend_css/socicon.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{asset('css/frontend_css/cookieconsent.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{asset('css/frontend_css/theme-sia.css')}}" rel="stylesheet" type="text/css" media="all"/>


         PAGE CSS 
	<link href="{{asset('css/frontend_css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all"/>

         OVERRIDE CSS 
        <link href="{{asset('css/frontend_css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        --}}
        @php

        Theme::add('pub_theme::css/bootstrap.css');
        Theme::add('pub_theme::css/stack-interface.css');
        Theme::add('pub_theme::css/socicon.css');
        Theme::add('pub_theme::css/cookieconsent.min.css');
        Theme::add('pub_theme::css/theme-sia.css');
         //PAGE CSS 
        Theme::add('pub_theme::css/iconsmind.css');
         //OVERRIDE CSS 
        Theme::add('pub_theme::css/custom.css');
        @endphp
        {!! Theme::showStyles(false) !!}

        <!-- FAVICON -->
        @include('pub_theme::layouts.partials.favicon')
</head>