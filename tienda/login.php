<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Artesanias de Morelos!!" name="keywords">
        <meta content="Artesanias de Morelos!!" name="description">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        body,
html {
    background-color: #ebecf0;
}

body,
p,
input,
select,
textarea,
button {
        font-family: "Montserrat", sans-serif;
        letter-spacing: -0.2px;
        font-size: 16px;
}

div,
p {
        color: #babecc;
        text-shadow: 1px 1px 1px #fff;
}

form {
        padding: 16px;
        width: 320px;
        margin: 0 auto;
}

.segment {
    padding: 32px 0;
    text-align: center;
    color: #69190b;
}

button,
input {
    border: 0;
    outline: 0;
    font-size: 16px;
    border-radius: 320px;
    padding: 16px;
    background-color: #ebecf0;
    text-shadow: 1px 1px 0 #fff;
}

label {
    display: block;
    margin-bottom: 24px;
    width: 100%;
}

input {
    margin-right: 8px;
    box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #fff;
    width: 100%;
    box-sizing: border-box;
    transition: all 0.2s ease-in-out;
    appearance: none;
    -webkit-appearance: none;
}
input:focus {
    box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
}

button {
    color: #69190b;
    font-weight: bold;
    box-shadow: -5px -5px 20px #fff, 5px 5px 20px #babecc;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    font-weight: 600;
}
button:hover {
    box-shadow: -2px -2px 5px #fff, 2px 2px 5px #babecc;
}
button:active {
    box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
}
button .icon {
    margin-right: 8px;
}
button.unit {
    border-radius: 8px;
    line-height: 0;
    width: 48px;
    height: 48px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 8px;
    font-size: 19.2px;
}
button.unit .icon {
    margin-right: 0;
}
button.red {
    display: block;
    width: 100%;
    color: #ae1100;
}

.input-group {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.input-group label {
    margin: 0;
    flex: 1;
}
    </style>
    <head>
        <meta charset="utf-8">
        <title>Artesanias</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <link href="img/favicon.ico" rel="icon">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    
                </div>
            </div>
        </div>

        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">Menú</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="quienes_somos.html" class="nav-item nav-link ">¿Quiénes Somos?</a>
                            <a href="product-list.html" class="nav-item nav-link">Productos</a>
                            <a href="carrito.html" class="nav-item nav-link">Carrito</a>
                            <a href="checkout.html" class="nav-item nav-link">Pedidos</a>
                            <a href="my-account.html" class="nav-item nav-link">Mi Cuenta</a>
                            <a href="wishlist.html" class="nav-item nav-link ">Wishlist</a>
                            <a href="contact.html" class="nav-item nav-link">Contáctanos</a>
                            
                        </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Entrar</a>
                                <div class="dropdown-menu">
                                    <a href="login.html" class="dropdown-item">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <form action="">

            <div class="segment">
                <h1>Ingresar</h1>
            </div>
            
            <label>
                <input type="text" placeholder="Coreo Electrónico"/>
            </label>
            <label>
                <input type="password" placeholder="Password"/>
            </label>
            <input  class="btn btn-warning" type="submit" value="Log in">
            <p>¿No tienes una cuenta con nosotros?</p>
            <a href="registro.html">Crear cuenta</a>
        </form>
        
        <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Nuestro Contacto</h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>Cuautla, Morelos, México</p>
                            <p><i class="fa fa-envelope"></i>artesanias@artesanias.com</p>
                            <p><i class="fa fa-phone"></i>123-456-7845</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Síganos</h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Información</h2>
                        <ul>
                            <li><a href="#">¿Quienés somos?</a></li>
                            <li><a href="#">Términos y Condiciones</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Información de Pago</h2>
                        <ul>
                            <li><a href="#">Politica de Pago</a></li>
                            <li><a href="#">Reembolsos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row payment align-items-center">
                <div class="col-md-6">
                    <div class="payment-method">
                        <h2>Aceptamos:</h2>
                        <img src="img/payment-method.png" alt="Payment Method" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    
    <script src="js/main.js"></script>
    </body>
</html>
