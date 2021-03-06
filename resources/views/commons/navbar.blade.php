<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span style="font : normal 20pt 'Monotype Corsiva'">JET-kun</span></a>
                
                
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span style="font : normal 20pt 'Monotype Corsiva'" aria-hidden="true">
                            Lessons</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/resources/views/lessons/html">HTML</a></li>
                            <li><a href="/resources/views/lessons/css">CSS</a></li>
                            <li><a href="/resources/views/lessons/php">PHP</a></li>
                            <li><a href="/resources/views/lessons/mysql">MySQL</a></li>
                            <li><a href="/resources/views/lessons/git">Git/GitHub</a></li>
                            <li><a href="/resources/views/lessons/laravel">Laravel</a></li>
                            <li><a href="/resources/views/lessons/bootstrap">Bootstrap</a></li>
                            <li><a href="/resources/views/lessons/heroku">Heroku</a></li>
                            <li><a href="/resources/views/lessons/others">Others</a></li>
                        </ul>
                </li>
                    
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span style="font : normal 20pt 'Monotype Corsiva'" aria-hidden="true">
                            KPT-form</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('kpts.index') }}">List</a></li>
                            <li><a href="{{ route('kpts.create') }}">Input</a></li>
                        </ul>
                </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>