<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>PDF de Client</title>
	<style>
.page-break {
    page-break-after: always;
}
</style>
</head>
<body dir="rtl">
		<div class="container">
		
    <div class="row">
    	<table style="width: 100%">
    		<tr>
    			<td>
    		<div class="col-sm-4">
    		Royaume de Maroc <br>
    		<p>--------</p>
    	Office Marocain de la Propriété <br> 
    	Industrielle et Commerciale
    	</div>
    			</td>
    			<td>
    				<div class="col-sm-4">
<!--     		<img src="{{ asset('/images/ompic_logo.jpg') }}" alt="">  
 -->    	           </div>
    			</td>
    			<td>
    				 	<div class="col-sm-4">
    		<h3 dir="rtl" lang="ar" >
    			الملكية المغربية
    			<p>--------</p>
    		 المكتب المغربي للملكية الصناعية والتجارية  
    		</h3>
    	</div>
    			</td>
    		</tr>
    	</table>
   </div>

   <div class="row center" style="text-align: center;">
   	<div class="card">
   		<table style="width: 70%;height: 70%;margin: 5%;text-align: center;">
   			@foreach($cns as $cn)
    		<tr>
          	<th>Nom prenom  : </th>
    			<td>{{$cn->bénificier}}</td>
    		</tr>
    		<tr>
          	<th>Forme Juridique  : </th>
    			<td>{{$cn->FormJuridique}}</td>
    		</tr>
    		<tr>
          	<th>Ville  : </th>
    			<td>{{$cn->ville}}</td>
    		</tr>
    		<tr>
          	<th>Date Expération : </th>
    			<td>{{$cn->dateExpération}}</td>
    		</tr>
    		@endforeach
    	</table>
   	</div>
   </div>

      <div class="row center" style="text-align: center;">
   	<div class="card" style="background-color: white;">
   		
           <p  style="width: 70%;height: 70%;margin: 30%;">
           	OMPIC 
           </p>
    	
   	</div>
   </div>

	</div>

</body>
</html>