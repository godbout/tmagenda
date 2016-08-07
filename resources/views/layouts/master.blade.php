<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/material.min.css">
        <script src="/js/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>

        <div class="container">
            
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
                
                <div class="mdl-layout__drawer">
                    <span class="mdl-layout__title">TM PAG Agenda</span>
                        <nav class="mdl-navigation">
                            <a href="/members" class="mdl-navigation__link">Members List</a>
                            <a href="/meetings" class="mdl-navigation__link">Meetings List</a>
                            <a href="/meetings/create" class="mdl-navigation__link">Coming Meeting Details</a>
                            <a href="/agendas" class="mdl-navigation__link">Agendas List</a>
                        </nav>
                </div>

                <main class="mdl-layout__content">
                    <div class="page-content">
                        <div class="mdl-grid">
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
    </body>
</html>