<nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                     <!-- Logo ( * your text or image into link tag *) -->
                     <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                        <img src="{{ url('/') }}/images/logo.png" alt="GROUPE MAGHREB EXPO MA" />
                        </a>
                    </div>
                <!--new menu-->

                <div class="menu-container">
                <style>
                #lg{margin-right:20px;
                }
                 #lg a:link{
                    display: inline-block;
    width: 18px;
    padding: 2px;
    padding-top: 5px;
    margin-top: 9px;}  
    .active_lg{background-color: #ebb51f;    color: black !important;}
                #search {

}


#search input[type="text"] {
    background: url({{ url('/') }}/images/search-white.png) no-repeat 10px 6px #444;
    border: 0 none;
    font: bold 12px Arial,Helvetica,Sans-serif;
    color: #d7d7d7;
    width:150px;
    padding: 6px 15px 6px 35px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3); 
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    }

#search input[type="text"]:focus {
    background: url({{ url('/') }}/images/search-dark.png) no-repeat 10px 6px #fcfcfc;
    color: #6a6f75;
    width: 200px;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
    text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }
             
                </style>
                
        <div class="menu" >

        <?php
        $activefr='';
        $activeen='';
        $sess=Session::get('lang');
        $current = url()->current();
        $link=url('/');
        if((($sess)&&(strpos($current, url('/').'/fr/') !== false))||(($sess)&&(strpos($current, url('/').'/en/') !== false))||((strpos($current, url('/').'/fr/') !== false))||((strpos($current, url('/').'/en/') !== false)))
        $link=url('/'.Lang::locale().'/');
        if((strpos($current, url('/').'/fr/') !== false)||(strpos($current, url('/').'/en/') !== false)) echo '';else $activefr='active_lg';
        if(($sess)&&(strpos($current, url('/').'/fr/') !== false))$activefr='active_lg';
        if(($sess)&&(strpos($current, url('/').'/en/') !== false))$activeen='active_lg';
        ?>
        <ul id="top_menu">
        <?php $menus = App\TopMenu::all()->translate(config('global.lang_trans'));?>
               <li ><a href="{{ $link }}/request_for_proposal" class="rp">Request for Proposal</a></li>
               <!-- if i move it to the first position it wont have the same effect and attract attention-->
               <li id="lg">
    <a href="{{url('/fr')}}" class="<?php echo $activefr;?>">fr</a>
    <a href="{{url('/en')}}" class="<?php echo $activeen;?>">En</a>
    </li>
               
               <li ><a href="{{ $link }}/exhibitor_order">Exhibitor Order</a></li>
               <li style="display:block;padding-top: 10px;margin-left: 20px;" id="search">
               {!! Form::open(['route' => 'search']) !!}

{!! Form::text('query') !!}

{!! Form::close() !!}
               </li>
               </ul>
            <ul id="bottom_menu">
               <li ><a href="{{ $link }}/contact">Contact</a></li>
               
                <li ><a href="{{ $link }}{{$menus[0]->link}}">{{$menus[0]->menu}}</a></li>
                <li><a href="{{ $link }}{{$menus[1]->link}}">{{$menus[1]->menu}}</a>
                    <ul>
                        <li><a href="{{ $link }}{{$menus[2]->link}}">{{$menus[2]->menu}}</a></li>
                        <li><a href="{{ $link }}{{$menus[3]->link}}">{{$menus[3]->menu}}</a></li>
                        <li><a href="{{ $link }}{{$menus[4]->link}}">{{$menus[4]->menu}}</a></li>
                        <li><a href="{{ $link }}{{$menus[5]->link}}">{{$menus[5]->menu}}</a></li>
                    </ul>
                </li>
                
                            
                <li><a href="{{$menus[6]->link}}">{{$menus[6]->menu}}</a>
                    <ul >
                        <li><img src="{{ Voyager::image( $menus[7]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[7]->link}}" class="head">{{$menus[7]->menu}}</a>
                        
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[8]->link}}">{{$menus[8]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[9]->link}}">{{$menus[9]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[10]->link}}">{{$menus[10]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[50]->link}}">{{$menus[50]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[11]->link}}">{{$menus[11]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[12]->link}}">{{$menus[12]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[13]->link}}">{{$menus[13]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[14]->link}}">{{$menus[14]->menu}}</a></li>
                            </ul>
                        </li>
                        <li><img src="{{ Voyager::image( $menus[15]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[15]->link}}" class="head">{{$menus[15]->menu}}</a>
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[16]->link}}">{{$menus[16]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[17]->link}}">{{$menus[17]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[18]->link}}">{{$menus[18]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[19]->link}}">{{$menus[19]->menu}}</a></li>
                                
                            </ul>
                        </li>
                        <li><img src="{{ Voyager::image( $menus[20]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[20]->link}}" class="head">{{$menus[20]->menu}}</a>
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}/projects/{{$menus[21]->menu}}/1">{{$menus[21]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}/projects/{{$menus[22]->menu}}/2">{{$menus[22]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}/projects/{{$menus[23]->menu}}/3">{{$menus[23]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}/projects/{{$menus[24]->menu}}/4">{{$menus[24]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}/projects/{{$menus[25]->menu}}/5">{{$menus[25]->menu}}</a></li>
                                
                            </ul>
                        </li>
                        <li><img src="{{ Voyager::image( $menus[26]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[26]->link}}" class="head">{{$menus[26]->menu}}</a>
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[27]->link}}">{{$menus[27]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[28]->link}}">{{$menus[28]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[29]->link}}">{{$menus[29]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[30]->link}}">{{$menus[30]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[31]->link}}">{{$menus[31]->menu}}</a></li>
                                
                            </ul>
                        </li>
                        <li><img src="{{ Voyager::image( $menus[32]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[32]->link}}" class="head">{{$menus[32]->menu}}</a>
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{$menus[33]->link}}">{{$menus[33]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{$menus[34]->link}}">{{$menus[34]->menu}}</a></li>
                                
                            </ul>
                        </li>
                        <li><img src="{{ Voyager::image( $menus[35]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[35]->link}}" class="head">{{$menus[35]->menu}}</a>
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{$menus[36]->link}}">{{$menus[36]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{$menus[37]->link}}">{{$menus[37]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{$menus[38]->link}}">{{$menus[38]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{$menus[39]->link}}">{{$menus[39]->menu}}</a></li>
                                
                            </ul>
                        </li>
                        <li><img src="{{ Voyager::image( $menus[40]->image ) }}" alt="GROUPE MAGHREB EXPO MA"/><a href="{{ $link }}{{$menus[40]->link}}" class="head">{{$menus[40]->menu}}</a>
                            <ul>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[41]->link}}">{{$menus[41]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[42]->link}}">{{$menus[42]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[43]->link}}">{{$menus[43]->menu}}</a></li>
                                <li><i class="fa fa-angle-right" style="color: white;"></i><a href="{{ $link }}{{$menus[44]->link}}">{{$menus[44]->menu}}</a></li>
                                
                            </ul>
                        </li>
                       <!-- <li><img src="{{ $link }}/images/promo-4.png" alt="GROUPE MAGHREB EXPO MA"/><a href="#">Signalétique | Impression Grand Format</a></li>-->
                    </ul>
                </li>
               <li><a href="{{$menus[45]->link}}">{{$menus[45]->menu}}</a>
                    <ul>
                        <li><a href="{{ $link }}{{$menus[46]->link}}">{{$menus[46]->menu}}</a></li>
                        <li><a href="{{ $link }}{{$menus[47]->link}}">{{$menus[47]->menu}}</a></li>
                        <li><a href="{{ $link }}{{$menus[48]->link}}">{{$menus[48]->menu}}</a></li>
                    </ul>
                </li>
               <li ><a href="{{ $link }}{{$menus[49]->link}}">{{$menus[49]->menu}}</a></li> 
            </ul>
        </div>
    </div>

                <!--end new menu-->
                    
                  
                    
                </div>
            </nav>