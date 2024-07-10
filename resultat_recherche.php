<!DOCTYPE html>
<html>
	<head>
		<title> Résultats de la recherche </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="resultat_recherche.css"/>
		<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
	</head>    
	<body>
        <div class="results">
            <h1> Résultats de votre recherche </h1>

            <p>Documents correspondant à la requête : </p>
            <br />
<b>Notice</b>:  Undefined index: q1 in <b>/home/IdL/2023/vareilll/public_html/resultat_recherche.php</b> on line <b>17</b><br />
<br />
<b>Notice</b>:  Undefined index: q2 in <b>/home/IdL/2023/vareilll/public_html/resultat_recherche.php</b> on line <b>18</b><br />
<br />
<b>Notice</b>:  Undefined index: q3 in <b>/home/IdL/2023/vareilll/public_html/resultat_recherche.php</b> on line <b>19</b><br />
<br />
<b>Notice</b>:  Undefined index: q4 in <b>/home/IdL/2023/vareilll/public_html/resultat_recherche.php</b> on line <b>20</b><br />
          <script>
             $(document).ready(function(){
                $('.results').on('click', 'span.nomDocument', function(){
                    console.log('Clic détecté sur un élément avec la classe "nomDocument"');
                var nomDocument = $(this).text();
                console.log('Nom du document cliqué : ', nomDocument)
                var image1 = '<img src="DATA/' + nomDocument + '-001" style="max-width: 35%; max-height: 40%;" class="zoom-img">';
                var image2 = '<img src="DATA/' + nomDocument + '-002" style="max-width: 35%; max-height: 40%;" class="zoom-img">';
                var images = image1 + image2;
                $('.image').html(images);
                });
           });
          </script>

        </div>
        <div class="page">
            <h1>  Visionnage de la page </h1>
            <div class ="image">
            </div>
        </div>

        
    </body>
</html>