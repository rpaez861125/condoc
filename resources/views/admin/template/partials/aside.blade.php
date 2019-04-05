<aside class="sidebar">
        <div class="sidebar-container">
            <div class="sidebar-header">
                <div class="brand">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div> Control Docente </div>
            </div>
            <nav class="menu">
                <ul class="sidebar-menu metismenu" id="sidebar-menu">
                    <li class="active">
                        <a href="{{ route('front')}}">
                            <i class="fa fa-home"></i> Dashboard </a>
                    </li>
                    @if (Auth::user()->admin())                    
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i> Usuarios
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ route('users.index') }}"> Lista</a>
                            </li>
                            <li>
                                <a href="{{ route('users.create') }}"> Crear </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="">
                            <i class="fa fa-book"></i> Docente
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ route('units.index') }}"> Unidad </a>
                            </li>
                            <li>
                                <a href="{{ route('grades.index') }}"> Grado </a>
                            </li>
                            <li>
                                <a href="{{ route('groups.index') }}"> Grupo </a>
                            </li>
                            <li>
                                <a href="{{ route('groups.index') }}"> Curso </a>
                            </li>
                            <li>
                                <a href="{{ route('groups.index') }}"> Asignaturas </a>
                            </li>
                            <li>
                                <a href="{{ route('groups.index') }}"> Estudiantes </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-hotel"></i> Vivienda
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ route('munic.index') }}"> Munucipio </a>
                            </li>
                            <li>
                                <a href="{{ route('cons_pop.index') }}"> Consejo Popular </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="forms.html">
                            <i class="fa fa-pencil-square-o"></i> Forms </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-desktop"></i> UI Elements
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="cards.html"> Cards </a>
                            </li>
                            <li>
                                <a href="typography.html"> Typography </a>
                            </li>
                            <li>
                                <a href="icons.html"> Icons </a>
                            </li>
                            <li>
                                <a href="grid.html"> Grid </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-file-text-o"></i> Pages
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="login.html"> Login </a>
                            </li>
                            <li>
                                <a href="signup.html"> Sign Up </a>
                            </li>
                            <li>
                                <a href="reset.html"> Reset </a>
                            </li>
                            <li>
                                <a href="error-404.html"> Error 404 App </a>
                            </li>
                            <li>
                                <a href="error-404-alt.html"> Error 404 Global </a>
                            </li>
                            <li>
                                <a href="error-500.html"> Error 500 App </a>
                            </li>
                            <li>
                                <a href="error-500-alt.html"> Error 500 Global </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-sitemap"></i> Menu Levels
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Second Level Item
                                    <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="#"> Third Level Item </a>
                                    </li>
                                    <li>
                                        <a href="#"> Third Level Item </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> Second Level Item </a>
                            </li>
                            <li>
                                <a href="#"> Second Level Item
                                    <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="#"> Third Level Item </a>
                                    </li>
                                    <li>
                                        <a href="#"> Third Level Item </a>
                                    </li>
                                    <li>
                                        <a href="#"> Third Level Item
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="#"> Fourth Level Item </a>
                                            </li>
                                            <li>
                                                <a href="#"> Fourth Level Item </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="screenful.html">
                            <i class="fa fa-bar-chart"></i> Agile Metrics
                            <span class="label label-screenful">by Screenful</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/modularcode/modular-admin-html">
                            <i class="fa fa-github-alt"></i> Theme Docs </a>
                    </li>
                </ul>
            </nav>
        </div>
        <footer class="sidebar-footer">
            <ul class="sidebar-menu metismenu" id="customize-menu">
                <li>
                    <ul>
                        <li class="customize">
                            <div class="customize-item">
                                <div class="row customize-header">
                                    <div class="col-4"> </div>
                                    <div class="col-4">
                                        <label class="title">fixed</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="title">static</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="title">Sidebar:</label>
                                    </div>
                                    <div class="col-4">
                                        <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="title">Header:</label>
                                    </div>
                                    <div class="col-4">
                                        <label>
                                            <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label>
                                            <input class="radio" type="radio" name="headerPosition" value="">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="title">Footer:</label>
                                    </div>
                                    <div class="col-4">
                                        <label>
                                            <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label>
                                            <input class="radio" type="radio" name="footerPosition" value="">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>                                        
                        </li>
                    </ul>
                    <a href="">
                        <i class="fa fa-cog"></i> Customize </a>
                </li>
            </ul>
        </footer>
    </aside>