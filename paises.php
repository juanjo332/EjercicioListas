<?php
 $paises=array();
  $paises ["Mexico"]=array("Guadalajara","Monterrey","D.F.","Sinaloa","Zacatecas","Chihuahua","Tuxtla Gutierez","Colima","Leon","Cancun");
  $paises ["Estados Unidos"]=array("Washington","California","Arizona","Texas","Florida","ohio","Iowa","Louisiana","New Mexico","New York");
  $paises ["Inglaterra"]=array("Londres","Manchester","Durham","Black pool","Liverpool","Nottingham","London","New Forest","Center Bury","Oxford");
  $paises ["Brasil"]=array("Rio de janeiro","Sao paolo","Porto alegre","Cuntiva","Belem","Brazilia","Salvador","Rio branco","Recife","Natal");
  $paises ["Japon"]=array("Tokio","Sapporo","Sendai","Kioto","Yocohama","Nagoya","Kobe","Osaka","Hiroshima","fukuoka");
  $paises ["Argentina"]=array("Chaco","San luis","Santa fe","Buenos Aires","La pampa","La rioja","Chubut","San juan","Mmendoza","Neuquen"); 
  $paises ["España"]=array("Guadalajara","Navara","Zaragoza","Barcelona","Tarragona","Castellon","Valencia","Toledo","Sevilla","Malaga");
  $paises ["Alemania"]=array("Essen","Boon","Berlin","Munich","Brussels","Breman","Hannover","Mainz","Bonn","Numberg");
  $paises ["Australia"]=array("Tasmania","Victoria","New south wales","Queensland","Northern territori","Darwin","Launceston","Cairns","Townsville","Albany");
  $paises ["Francia"]=array("Toulouse","Lourdes","Lyon","Londres","Reims","Dijon","Nantes","Niza","Lille","Marsella");
	echo"<ul>";
  foreach($paises as $pais =>$ciudades){
   
   echo"<li>".$pais."<ul>";
  
  foreach($ciudades as $ciudad){

    echo"<li>".$ciudad."</li>";

  }
 echo"</ul></li>";
}
  
   ?>

