                <li class="nav-item {{ request()->is('home')?'active':''}}">
                        <a class="nav-link sub_link" href="home">
                            <i class="material-icons">home</i>                                    
                            <span class="sidebar-normal">Home</span>
                        </a>
                </li>

                <li class="nav-item has-sub-menu {{ request()->is('jabatan','pegawai','prodi')?'active':''}}">
                    <a class="nav-link" data-toggle="collapse" href="#data_utama">
                        <i class="material-icons">note_add</i>
                        <p>
                            Data Utama
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse sub-menu {{ request()->is('jabatan','pegawai','prodi')?'show':''}}" id="data_utama">
                        <ul class="nav">
                            <li class="nav-item {{ request()->is('jabatan')?'active':''}}">
                                <a class="nav-link sub_link" href="jabatan">
                                    <i class="material-icons">dvr</i>
                                    <span class="sidebar-normal">Jabatan</span>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->is('pegawai')?'active':''}}">
                                <a class="nav-link sub_link" href="pegawai">
                                    <i class="material-icons">playlist_add</i>
                                    <span class="sidebar-normal">Pegawai</span>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->is('prodi')?'active':''}}">
                                <a class="nav-link sub_link" href="prodi">
                                    <i class="material-icons">playlist_add</i>
                                    <span class="sidebar-normal">Program Studi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item has-sub-menu {{ request()->is('d_krs','d_pmb','d_keu')?'active':''}}">
                    <a class="nav-link" data-toggle="collapse" href="#dash">
                        <i class="material-icons">insert_chart</i>
                        <p>
                            Dashboard
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse sub-menu {{ request()->is('d_krs','d_pmb','d_keu')?'show':''}}" id="dash">
                        <ul class="nav">
                            <li class="nav-item {{ request()->is('d_krs')?'active':''}}">
                                <a class="nav-link sub_link" href="d_krs">
                                    <i class="material-icons">dvr</i>
                                    <span class="sidebar-normal">Akademik</span>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->is('d_pmb')?'active':''}}">
                                <a class="nav-link sub_link" href="d_pmb">
                                    <i class="material-icons">playlist_add</i>
                                    <span class="sidebar-normal">PMB</span>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->is('d_keu')?'active':''}}">
                                <a class="nav-link sub_link" href="d_keu">
                                    <i class="material-icons">playlist_add</i>
                                    <span class="sidebar-normal">Keuangan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                 <li class="nav-item has-sub-menu">
                    <a class="nav-link" data-toggle="collapse" href="#pvr_menu_levels">
                        <i class="material-icons">menu</i>
                        <p>
                            Menu Levels
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse sub-menu" id="pvr_menu_levels" style="">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link sub_link" href="javascript:void(0)">
                                    <i class="material-icons">sentiment_dissatisfied</i>
                                    <span class="sidebar-normal">Menu 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub_link" href="javascript:void(0)">
                                    <i class="material-icons">sentiment_neutral</i>
                                    <span class="sidebar-normal">Menu 2</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#pvr_menu_sub_level">
                                    <i class="material-icons">sentiment_satisfied</i>
                                    <p>
                                        Menu 3
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse" id="pvr_menu_sub_level">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link sub_link second_level_link" href="javascript:void(0)">
                                                <i class="material-icons">sentiment_very_satisfied</i>
                                                <span class="sidebar-normal">Menu 3.1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sub_link second_level_link" href="javascript:void(0)">
                                                <i class="material-icons">sentiment_very_satisfied</i>
                                                <span class="sidebar-normal">Menu 3.2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sub_link second_level_link" href="javascript:void(0)">
                                                <i class="material-icons">sentiment_very_satisfied</i>
                                                <span class="sidebar-normal">Menu 3.3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>



