<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WpParallax
 */

get_header();
?>
<div class="overlay">
<div id="logo-animation"></div>
    <div class="leng">
        <button id="eng" class="btn">ENGLISH</button>
        <button id="esp" class="btn">ESPAÑOL</button>
    </div>
</div>
<div id="navbar" class="navbar-top">
    <img src="wp-content/themes/urbanomedialab/assets/icons/urbano-h.svg" class="img-logo">
    <a class="menu-toggler" id="btn-toggle-menu"><i class="fas fa-bars"></i></a>
    <ul class="menu-list" id="menu">
        <li data-menuanchor="hero" class="active">
            <a href="#hero" class="btn-menu" data-lng="home">INCIO</a>
        </li>
        <li data-menuanchor="ultimo">
            <a href="#ultimo" class="btn-menu" data-lng="latest">LO ÚLTIMO</a>
        </li>
        <li data-menuanchor="reels">
            <a href="#reels" class="btn-menu" data-lng="reels">REELS</a>
        </li>
        <li data-menuanchor="contacto">
            <a href="#contacto" class="btn-menu" data-lng="contact">CONTÁCTANOS</a>
        </li>
    </ul>
</div>
<div id="papeleo" class="papeles">

    <div id="her" class="hero section">
        <div class="btns">
            <i id="to-ultimo" class="fas fa-angle-double-down down-arrows"></i>
        </div>
    </div>

        <div class="ultimo section pp-scrollable">
            <label class="title" id="lo-ultimo" data-lng="latest"><span>LO ÚLTIMO</span></label>
            <div class="work-grid">

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://material.angular.io/assets/img/examples/shiba2.jpg" data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto largo largo largo</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="http://ecuatorianoenvivo.com/wp-content/uploads/2015/04/364.jpg" data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                    <img src="https://material.angular.io/assets/img/examples/shiba2.jpg" data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

                <div class="item">
                    <div class="card escenas" data-hover-only="true" data-relative-input="true">
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

            </div>

            <div class="card-modal back-faded" id="work-info">
                <div class="content hidden">
                    <div class="sec-img"></div>
                    <div class="sec-info">
                        <div class="sec-title"><label class="title">SMIRNOFF</label><span class="close-modal">x</span>
                        </div>
                        <p class="description">
                            Descripción del proyecto, IPSUM LOPEM IPSUL galletitas de pastel con crema
                            y chocolate, agua de limón y fresa, se aplica una cucharadita de potasio,
                            (FVX y POST PRODUCCIÓN).
                        </p>
                        <div class="btn-area">
                            <button class="btn btn-video">VER MÁS</button>
                        </div>
                    </div>
                    <div class="sec-video">
                        <div class="vid-info"><label class="title">SMIRNOFF</label><span class="close-video">x</span>
                        </div>
                        <iframe class="video"></iframe>
                        <!-- hacer que al hacer click y ver el video se cambie el tamaño al 100% del contenedor  -->
                    </div>
                </div>
            </div>
        </div>

        <div class="reels section">
            <label class="title" id="reel"><span data-lng="reels">REELS</span></label>
            <div class="content-area">
                <div class="reel-type reel-video">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/ONLINE1.svg">
                    <label data-lng="onlineEditing1">EDICIÓN </label>
                    <span data-lng="onlineEditing2">ONLINE</span>
                </div>
                
                <div class="reel-type" id="edition-off">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/OFFLINE.svg">
                    <label data-lng="offlineEditing1">EDICIÓN</label>
                    <span data-lng="offlineEditing2">OFFLINE</span>
                </div>

                <div class="reel-type reel-video">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/CORRECCION1.svg">
                    <label data-lng="colorCorrection1">CORRECCIÓN</label>
                    <span data-lng="colorCorrection2">DE COLOR</span>
                </div>

                <div class="reel-type reel-video">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/MOGRAPH1.svg">
                    <label data-lng="motionGraphics1">MOTION </label>
                    <span data-lng="motionGraphics2">GRAPHICS</span>
                </div>

                <div class="reel-type reel-video">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/3D1.svg">
                    <label data-lng="3DAnimation1">ANIMACIÓN </label>
                    <span data-lng="3DAnimation2">3D</span>
                </div>

                <div class="reel-type reel-video">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/VFX1.svg">
                    <label data-lng="vfx1">VFX</label>
                    <span data-lng="vfx2">&nbsp; &ensp;</span>
                </div>


            </div>
            <div class="card-modal-reel back-faded" id="reel-info">
                <div class="content mod-video">
                    <div class="sec-video">
                        <div class="vid-info"><label class="title">SMIRNOFF</label><span class="close-video-reel">x</span>
                        </div>
                        <iframe class="video"></iframe>
                        <!-- hacer que al hacer click y ver el video se cambie el tamaño al 100% del contenedor  -->
                    </div>
                </div>
            </div>
            <div class="card-modal-reel back-faded" id="reel-persona">
                <div class="content">
                    <div class="sec-video sec-carrousel">
                        <span class="close-carrousel"><span class="exit-carrousel">x</span></span>
                        <div class="carrousel-personas">
                            <div><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/lqj-QNYsZFk?controls=1""></iframe></div></div>
                            <div><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/lqj-QNYsZFk?controls=1"></iframe></div></div>
                            <div><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/lqj-QNYsZFk?controls=1"></iframe></div></div>
                        </div>
                    </div>
                    <div class="sec-persona">
                        <span class="close-video-reel-persona"><span class="exit-persona">x</span></span>
                        <div class="sec-personas">
                            <div class="persona">
                                <label class="p-name">Nombre de la Persona</label>
                                <button class="btn btn-carousel">ACCIÓN</button>
                            </div>
                            <div class="persona">
                                <label class="p-name">Nombre de la Persona</label>
                                <button class="btn btn-carousel">ACCIÓN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contactanos section pp-scrollable">
            <label class="title" id="contacta"><span data-lng="contact">CONTACTANOS</span></label>
            <div class="form">
                <form action="">
                    <div class="form-field">
                        <label data-lng="name">Name<span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="form-field">
                        <label data-lng="email">e-mail<span>*</span></label>
                        <input type="email">
                    </div>
                    <div class="form-field">
                        <label data-lng="phone">Phone</label>
                        <input type="tel">
                    </div>
                    <div class="form-field">
                        <label data-lng="message">Message<span>*</span></label>
                        <textarea></textarea>
                    </div>
                    <button class="btn" data-lng="sendEmail">SEND EMAIL</button>
                </form>

<?php get_footer(); ?>
