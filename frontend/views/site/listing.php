<?php
$this->title = 'Lista de Oficinas';
?>
<!-- Header 02
================================================== -->
<header class="header_01 header_inner">
    <div class="header_btm">
        <h2>Encontre Oficinas</h2>
    </div>
</header>

<!-- End Header 02
================================================== -->


<!-- Main
================================================== -->
<main>
    <div class="job_container">
        <div class="container">
            <div class="row job_main">
                <div class="sidebar">
                    <ul class="user_navigation">
                        <li class="is-active">
                            <a href="browse-jobs.html"><i class="fas fa-search"></i> Encontrar Oficinas </a>
                            <a class="filter_btn" href="#sidebar_filter_option">
                                <i class="fas fa-filter"></i>
                                <i class="fas fa-times"></i>
                            </a>
                        </li>
                        <li>
                            <form id="#sidebar_filter_option" class="filter_option">
                                <div class="form-group">
                                    <label>Localização</label>
                                    <div class="field">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <select class="js-example-basic-single" name="state">
                                            <option value="AL">São Paulo</option>
                                            <option value="WY">Minas Gerais</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Categorias</label>
                                    <div class="field">
                                        <i class="fas fa-briefcase"></i>
                                        <select class="js-example-basic-single" name="state">
                                            <option>Alfaiataria</option>
                                            <option>Bolsas</option>
                                            <option>Bonés</option>
                                            <option>Camisetas</option>
                                            <option>Carteiras</option>
                                            <option>Cintos</option>
                                            <option>Jeans</option>
                                            <option>Lingeries</option>
                                            <option>Moda Feminina</option>
                                            <option>Moda Praia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tags</label>
                                    <div class="field">
                                        <div class="form-group custom_checkboxes">
                                            <label class="custom_checkbox" for="tag-1">
                                                <input type="checkbox" name="usertype" id="tag-1" value="job seeker">
                                                <span><i class="fas fa-check"></i>CAMISETAS</span>
                                            </label>
                                            <label class="custom_checkbox" for="tag-2">
                                                <input type="checkbox" name="usertype" id="tag-2" value="employer">
                                                <span><i class="fas fa-check"></i> CUECAS</span>
                                            </label>
                                            <label class="custom_checkbox" for="tag-3">
                                                <input type="checkbox" name="usertype" id="tag-3" value="employer">
                                                <span><i class="fas fa-check"></i> JEANS</span>
                                            </label>
                                            <label class="custom_checkbox" for="tag-4">
                                                <input type="checkbox" name="usertype" id="tag-4" value="employer">
                                                <span><i class="fas fa-check"></i> UNIFORMES</span>
                                            </label>
                                            <label class="custom_checkbox" for="tag-5">
                                                <input type="checkbox" name="usertype" id="tag-5" value="employer">
                                                <span><i class="fas fa-check"></i> LINGERIES</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </li>
                        <!--                        <li >-->
                        <!--                            <a href="job-seeker-dashboard.html">-->
                        <!--                                <i class="fas fa-border-all"></i> Job Dashboard-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                    </ul>
                    <h5>Organizar e Gerenciar</h5>
                    <ul class="user_navigation">
                        <li>
                            <a href="my-stared-jobs.html"><i class="fas fa-star"></i> Minhas Oficinas Favoritas</a>
                        </li>
                    </ul>
                    <!--                    <h5>Account</h5>-->
                    <!--                    <ul class="user_navigation">-->
                    <!--                        <li>-->
                    <!--                            <a href="edit-profile.html"><i class="fas fa-user"></i> Update My Profile</a>-->
                    <!--                        </li>-->
                    <!--                        <li>-->
                    <!--                            <a href="edit-password.html"><i class="fas fa-key"></i>Change Password</a>-->
                    <!--                        </li>-->
                    <!--                        <li>-->
                    <!--                            <a href="edit-password.html"><i class="fas fa-power-off"></i> Logout</a>-->
                    <!--                        </li>-->
                    <!--                    </ul>-->
                </div>
                <div class=" job_main_right">
                    <div class="section-divider">
                    </div>
                    <div class="jm_headings">
                        <!--                        <h5>Browse Jobs in grid</h5>-->
                    </div>
                    <div class="row two_col featured_box_outer">
                        <div class="col-sm-6">
                            <div class="featured_box ">
                                <div class="fb_image">
                                    <img alt="brand logo" src="/img/main/c-logo-01.webp">
                                </div>
                                <div class="fb_content">
                                    <h4>Restaurant General Manager</h4>
                                    <ul>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="fas fa-landmark"></i>-->
<!--                                                Magna Aliqua-->
<!--                                            </a>-->
<!--                                        </li>-->
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-map-marker-alt"></i>
                                                New York
                                            </a>
                                        </li>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="far fa-clock"></i>-->
<!--                                                2 days ago-->
<!--                                            </a>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                                <div class="fb_action">
                                    <a title="add to favourite" href="#"><i class="far fa-heart"></i></a>
                                    <a class="btn btn-primary" href="#">Mostrar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="featured_box ">
                                <div class="fb_image">
                                    <img alt="brand logo" src="/img/main/c-logo-02.webp">
                                </div>
                                <div class="fb_content">
                                    <h4>Restaurant General Manager</h4>
                                    <ul>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="fas fa-landmark"></i>-->
<!--                                                Magna Aliqua-->
<!--                                            </a>-->
<!--                                        </li>-->
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-map-marker-alt"></i>
                                                New York
                                            </a>
                                        </li>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="far fa-clock"></i>-->
<!--                                                3 days ago-->
<!--                                            </a>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                                <div class="fb_action">
                                    <a title="add to favourite" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="btn btn-primary" href="#">Mostrar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="featured_box ">
                                <div class="fb_image">
                                    <img alt="brand logo" src="/img/main/c-logo-03.webp">
                                </div>
                                <div class="fb_content">
                                    <h4>Restaurant General Manager</h4>
                                    <ul>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="fas fa-landmark"></i>-->
<!--                                                Magna Aliqua-->
<!--                                            </a>-->
<!--                                        </li>-->
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-map-marker-alt"></i>
                                                New York
                                            </a>
                                        </li>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="far fa-clock"></i>-->
<!--                                                5 days ago-->
<!--                                            </a>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                                <div class="fb_action">
                                    <a title="add to favourite" href="#"><i class="far fa-heart"></i></a>
                                    <a class="btn btn-primary" href="#">Mostrar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="featured_box ">
                                <div class="fb_image">
                                    <img alt="brand logo" src="/img/main/demo-restro.jpg">
                                </div>
                                <div class="fb_content">
                                    <h4>Restaurant General Manager</h4>
                                    <ul>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="fas fa-landmark"></i>-->
<!--                                                Magna Aliqua-->
<!--                                            </a>-->
<!--                                        </li>-->
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-map-marker-alt"></i>
                                                New York
                                            </a>
                                        </li>
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <i class="far fa-clock"></i>-->
<!--                                                5 days ago-->
<!--                                            </a>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                                <div class="fb_action">
                                    <a title="add to favourite" href="#"><i class="far fa-heart"></i></a>
                                    <a class="btn btn-primary" href="#">Mostrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

