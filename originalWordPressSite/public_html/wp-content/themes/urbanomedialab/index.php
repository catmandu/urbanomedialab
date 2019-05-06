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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div class="overlay">
<div id="logo-animation"></div>
    <div class="leng">
        <button id="eng" class="btn">ENGLISH</button>
        <button id="esp" class="btn">ESPAÑOL</button>
    </div>
</div>
<div id="navbar" class="navbar-top">
    <img src="wp-content/themes/urbanomedialab/assets/img/U1_fondonegro.svg" class="img-logo">
    <a class="menu-toggler" id="btn-toggle-menu"><i class="fas fa-bars"></i></a>
    <ul class="menu-list" id="menu">
        <li data-menuanchor="hero" class="active">
            <a href="#hero" class="btn-menu" data-lng="start">INCIO</a>
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

        <p class="leme">
            CORRECCIÓN DE COLOR & POST PRODUCCIÓN
        </p>
        <div class="btns">
            <button id="to-ultimo" class="btn" data-menuanchor="ultimo">LO ULTIMO</button>
            <button id="to-reels" class="btn">REELS</button>
        </div>
    </div>

        <div class="ultimo section pp-scrollable">
            <label class="title" id="lo-ultimo"><span>LO ÚLTIMO</span></label>
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
                        <img src="https://s3.amazonaws.com/wp.prod.neoauto.pe/noticias/wp-content/uploads/2018/06/04131822/Escape-2018.jpg"
                            data-depth="0.4">
                    </div>
                    <label class="proyect-title">Nombre del proyecto</label>
                </div>

            </div>

            <div class="card-modal back-faded" id="work-info">
                <div class="content">
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
            <label class="title" id="reel"><span>REELS</span></label>
            <div class="content-area">
                <div class="reel-type">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/ediciñon on-off.svg">
                    <label>EDICIÓN </label>
                    <span>ONLINE Y OFFLINE</span>
                </div>

                <div class="reel-type">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/Color_correction.svg">
                    <label>CORRECCIÓN</label>
                    <span>DE COLOR</span>
                </div>

                <div class="reel-type">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/motion graphics.svg">
                    <label>MOTION </label>
                    <span>GRAPHICS</span>
                </div>

                <div class="reel-type">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/3d.svg">
                    <label>ANIMACIÓN </label>
                    <span>3D</span>
                </div>

                <div class="reel-type">
                    <img src="wp-content/themes/urbanomedialab/assets/icons/VFX.svg">
                    <label>VFX</label>
                    <span>&ensp;</span>
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
        </div>

        <div class="contactanos section pp-scrollable">
            <label class="title" id="contacta"><span>CONTACTANOS</span></label>
            <div class="form">
                <form action="">
                    <div class="form-field">
                        <label>Name<span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="form-field">
                        <label>e-mail<span>*</span></label>
                        <input type="email">
                    </div>
                    <div class="form-field">
                        <label>Phone</label>
                        <input type="tel">
                    </div>
                    <div class="form-field">
                        <label>Message<span>*</span></label>
                        <textarea></textarea>
                    </div>
                    <button class="btn">Send Email</button>
                </form>

                <small>DERECHOS RESERVADOS URBANO MEDIA LAB 2019</small>
            </div>


        </div>
    </div>

<?php get_footer(); ?>
