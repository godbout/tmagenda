<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        {{-- <link rel="stylesheet" href="/css/material.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> --}}

        <!-- Material Design fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

        <script type="text/javascript" src="/js/jquery.min.js"></script>
    </head>
    <body>

        <div class="container">

            <div class="navbar navbar-default">
                <div class="container-fuild">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar">test</span>
                            <span class="icon-bar">test</span>
                            <span class="icon-bar">test</span>
                        </button>
                        <a href="/" class="navbar-brand">TM Agendas Manager</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/members" class="mdl-navigation__link">Members List</a></li>
                            <li><a href="/meetings" class="mdl-navigation__link">Meetings List</a></li>
                            <li><a href="/meetings/create" class="mdl-navigation__link">Coming Meeting Details</a></li>
                            <li><a href="/agendas" class="mdl-navigation__link">Agendas List</a></li>
                        </ul>
                    </div>


                </div>
            </div>
            
                <main class="">
                    <div class="page-content">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>


        {{-- <div class="container">

            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">

                <header class="mdl-layout__header">

                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">TM Agenda Generator</span>
                    </div>

                    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
                        <a href="/members" class="mdl-layout__tab is-active" id="members">List of Members</a>
                        <a href="/meetings" class="mdl-layout__tab" id="meetings">List of Past Meetings</a>
                        <a href="/meetings/create" class="mdl-layout__tab" id="coming-meeting">Coming Meeting Details</a>
                    </div>

                </header>
  
                <main class="mdl-layout__content">
    
                    <section class="mdl-layout__tab-panel is-active" id="members">
                        <div class="page-content">@yield('content')</div>
                    </section>

                    <section class="mdl-layout__tab-panel" id="meetings">
                        <div class="page-content"></div>
                    </section>

                    <section class="mdl-layout__tab-panel" id="coming-meeting">
                        <div class="page-content"></div>
                    </section>
                </main>
            </div>

        </div> --}}
        <script type="text/javascript" src="/js/material.min.js"></script>
        <script type="text/javascript" src="/js/ripples.min.js"></script>
        <script>$.material.init()</script>
    </body>
</html>