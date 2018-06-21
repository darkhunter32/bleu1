<nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                        <img src="{{ url('/') }}/images/logo.png" alt="GROUPE MAGHREB EXPO MA" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li ><a href="{{ url('/') }}/home">Home</a></li>
                            <li ><a href="{{ url('/') }}/company">Company</a></li>
                            <li ><a href="{{ url('/') }}/exhibitor_order">Exhibitor Order</a></li>
                            <li ><a href="#" class="mn-has-sub">Nos Produits<i class="fa fa-angle-down"></i></a>
                            <ul class="mn-sub" style="display: none;">
                                    
                                    <li>
                                        <a href="{{ url('/') }}/installation_generale">Installation Generale</a>
                                        <img src="http://localhost/images/logo.png" alt="GROUPE MAGHREB EXPO MA">
                                        </li>
                                        <li>
                                        <a href="{{ url('/') }}/audio-visuel-and-eclairage">Audio Visuel & Éclairage</a>
                                        </li>
                                        <li>
                                        <a href="{{ url('/') }}/exhibition">Exposition</a>
                                        </li>
                                        <li>
                                        <a href="{{ url('/') }}/decoration">Déco & Scénographie</a>
                                        </li>
                                        </ul>
                            </li>
                            <li ><a href="{{ url('/') }}/references">Nos Références</a></li>
                            <li ><a href="{{ url('/') }}/contact">Contact</a></li>
                            <li><form id="searchForm" action="http://localhost:8888">
<input type="text" id="searchField" name="q" placeHolder="Search Voyager"/>
<input type="button" value="Submit"/>
</form></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>