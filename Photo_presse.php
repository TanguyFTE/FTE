<!DOCTYPE html>
   

    <html class="no-js" lang="fr-FR">
      
    
            
    
    
    
    
    
    
    
        <head>               
            <link href="Photo_presse.css" rel="stylesheet">
            <title>France Transition énergétique</title>
            <meta charset="UTF-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        </head>



      
            <header>
                <div id="degrade"></div>
                <img class="logo" src="Images/logo.png" width="170" height="auto" alt=""/>
            </header>


            <div class="logoHP_column" class="cards">
                <img class="cards" src="Images/Photo_Presse.png" width="434" height="178" alt=""/>
            </div>


            <section>
                <div id="AccessRef" class="txtAccessRef">
                    <form action="Photo_presse_connection.php" method="post" name="connectform">
                        <table width="186px" height="100px" border="0" align="center" cellpadding="0px" cellspacing="0">
                            <tr>
                                <td height="20px" valign="bottom"  align="center" ></nbsp></td>
                            </tr>
                            <tr>
                                <td width="100%" height="16px" valign="bottom" align="center"><input name="identifiant" type="text" id="pseudo" placeholder="Identification de connexion" autocomplete="on" size="32"></td>
                            </tr>
                            <tr>
                                <td height="10px" valign="bottom"  align="center" ></nbsp></td>
                            </tr>
                            <tr>
                                <td valign="bottom" height="16px" align="center"><input name="mdp" type="password" id="password" placeholder="Mot de passe" value="" size="32"></td>
                            </tr>
                            <tr>
                                <td height="12px" valign="bottom"  align="center" ></nbsp></td>
                            </tr>
                            <tr>
                                <td height="20px" valign="bottom"  align="center" ><input type="submit" name="Login"value="Connexion" id="btconnexion" /></td>
                            </tr>
                        </table>
                    </form>  
                    <div id="lienCpte">
                        <table width="300px" height="47px" border="0" align="center" cellpadding="0px" cellspacing="0">
                            <tr>
                                <td height="40px" align="right"><a href="Demande_inscription.php">Demande d'inscription</a></td>
                                <td align="center" width="20px">|</td>
                                <td align="left"><a href="MDP_presse.php">Mot de passe oublié ?</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>


            </main> 

            
            <script type="text/javascript">
                <?php require("JS.php"); ?>
            </script>
        
        </body>


    </html>
