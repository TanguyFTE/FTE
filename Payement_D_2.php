<!DOCTYPE html>
   

    <html class="no-js" lang="fr-FR">
      
    
            
    
    
    
    
    
    
    
        <head>                  
            <?php require("Head.php"); ?>
        </head>

        






        <body>


            
        <!-- Fast access navigation -->
            
            
            <nav id="nav-fast-access">
                <ul class="menu-fastaccess">
                    <li><a href="#" data-anchor="header" role="button" class="menu-fastaccess__menu">Accès direct au menu</a></li>
                    <li><a href="#" data-anchor="footer" class="menu-fastaccess__footer">Accès direct au pied de page</a></li>
                </ul>
            </nav>

            
            <!-- Header -->
            
            
            <header id="header" class="header" role="banner" tabindex="-1">
                <?php require("header.php"); ?>
            </header>


            <main id="main-content" class="main-content" tabindex="-1">
                <section class="hero hero--simple">
	                <div class="hero__header">
		                <div class="container">
			                <h1 class="hero__title">Procéder au payement</h1>
			                <span class="hero__decoration hero__decoration--left" aria-hidden="true"></span>
			                <span class="hero__decoration hero__decoration--right" aria-hidden="true"></span>
		                </div>
	                </div>
	            </section>	
                


                <br>
                <div class="album py-5 bg-light">
                    <div class="container" style="display: flex; justify-content: center">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card shadow-sm" >
                                    <h5 style="text-align:center"></h3>
                                        <div style="text-align: center;">
<!--                                             <a href="Images/Presentation.jpg" alt="image" target="_blank"><img src="Images/Presentation.jpg" style="width: 30%; display: block;margin-left: auto;margin-right: auto;"></a>
 -->                                        </div>
                                        <div class="card-body">
                                            <br><br>
                                            <h6 class="card-text" style="text-align: center; font-size:2em;color:#FFC000">FTE vous remercie d'avance.</h6>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div style="font-size: 2em; text-align:center;">
                                                    <small class="text" style="font-weight: bold; font-size: 200%;">
                                                        <?php
                                                            session_start();
                                                            // Vérifier si la variable de session contenant le prix existe
                                                            if (isset($_SESSION['prix'])) {
                                                                $prix = $_SESSION['prix'];
                                                                echo "Votre don est de " . $prix;
                                                            } else {
                                                                echo "Aucun prix n'est enregistré.";
                                                            }
                                                        ?>
                                                        €
                                                    </small>
                                                    <br><br>
                                                </div>
                                                <div id="smart-button-container">
                                                    <div style="text-align: center; margin-left:12%">
                                                        <div id="paypal-button-container"></div>
                                                    </div>
                                                </div>
                                                <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
                                                <script>
                                                    function initPayPalButton() {
                                                        paypal.Buttons({
                                                            style: {
                                                                shape: 'rect',
                                                                color: 'blue',
                                                                layout: 'vertical',
                                                                label: 'buynow',
                                                            },

                                                            createOrder: function(data, actions) {
                                                                return actions.order.create({
                                                                    purchase_units: [{
                                                                        "amount": {
                                                                            "currency_code": "EUR",
                                                                            "value": <?php echo $prix; ?>
                                                                        },
                                                                        "payee": {
                                                                            "email_address": "tanguy.bourrat@gmail.com"
                                                                        }
                                                                    }]
                                                                });
                                                            },

                                                            onApprove: function(data, actions) {
                                                                return actions.order.capture().then(function(orderData) {
                                                                    // Full available details
                                                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                                    // Show a success message within this page, e.g.
                                                                    /* const element = document.getElementById('paypal-button-container');
                                                                    element.innerHTML = '';
                                                                    element.innerHTML = '<h3>Thank you for your payment!</h3>';
 */
                                                                    actions.redirect('Merci.php');
                                                                });
                                                            },

                                                            onError: function(err) {
                                                                console.log(err);
                                                            }
                                                        }).render('#paypal-button-container');
                                                    }
                                                    initPayPalButton();
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br>
                        



                <!-- BUTTON BACK TO TOP -->


                <button type="button" class="btn btn--scrollup">
                    <span class="sr-only" id="btn-text">Retour en haut</span>
                    <img src="Images/fleche2.png" alt="flèche" style="width: auto;height: 50%;">	
                </button>
            </main> 
        

            <!-- Main content -->


            <footer role="contentinfo" class="footer" id="footer" tabindex="-1">
                <?php require("Footer.php"); ?>
            </footer>


            
            <script type="text/javascript">
                <?php require("JS.php"); ?>
            </script>
        
        </body>


    </html>