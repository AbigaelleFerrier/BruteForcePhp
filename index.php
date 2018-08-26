<!DOCTYPE html>
  <html>
    <head>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    </head>

    <body>

    	<div class="container">
			<div class="row">
      			<div class="col s10 offset-s1 bg">

      				<h1>Brute Force : mot de passe</h1>

      				<br><br>

      				<div class="input-field col s8 offset-s2">
			            <input id="pwd" type="password" data-length="10" >
			        	<label for="input_text">Ton mot de passe</label>
			        </div>
			        
			        <div class="input-field col s8 offset-s2" style="text-align: right;">
				        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="actionScript()">
				        	Tester<i class="material-icons right">send</i>
						</button>
					</div>
			        
      			</div> 









      			<div class="col s10 offset-s1 bg" id="str">

      				<br><br>

      				<div class="input-field col s8 offset-s2">
			            <input id="pwd" type="text" value="abcdefghijklmnopqrstuvwxyz123456789">
			        	<label for="input_text">Les caractere tester</label>
			        </div>
			        
			        <div class="input-field col s8 offset-s2" style="text-align: right;">
				        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="calcul()">
				        	Tester<i class="material-icons right">send</i>
						</button>
					</div>


				</div>












      			<div class="col s10 offset-s1 bg">

      				<br><br><br><br>


	      			<blockquote class="col s8 offset-s2">
				       	Les mot de passe que vous essaye ne dont pas stocker ; une fois la découverte de votre mot de passe part le script vous pouvez choisir ou non de l'afficher.
					</blockquote>

					<br>
				</div>

				<div class="col s10 offset-s1 bg" id="str">
				</div>

      		</div>    
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      	M.AutoInit();

      	$(document).ready(function() {
		    $('input#password, textarea#textarea2').characterCounter();
		});


		function actionScript() {
			var value = document.getElementById('pwd').value;
			var xhr = new XMLHttpRequest(); 
		    xhr.open("GET", "script1.php?pwd="+ value);
		    xhr.onreadystatechange = function(){
		        if (xhr.readyState == 4 && xhr.status == 200){
		            document.getElementById('str').innerHTML = xhr.responseText;
		        }
		        

		    };
		    xhr.send();
		}

		function calcul() {
			
			var xhr = new XMLHttpRequest(); 
		    xhr.open("GET", "script2.php");
		    xhr.onreadystatechange = function(){
		        if (xhr.readyState == 4 && xhr.status == 200){
		            document.getElementById('str').innerHTML = xhr.responseText;
		        }
		        

		    };
		    xhr.send();
		}
	   </script>



    </body>
 </html>
        