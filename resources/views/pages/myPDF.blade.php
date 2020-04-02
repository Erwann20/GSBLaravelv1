<!DOCTYPE html>
<html>
    <head>
    	<title>Compte-Rendu PDF</title>
    	
    
    	<style type="text/css">
    
        	div {
            font-family: 'Dosis', sans-serif;
        
          }
    
            #blochaut {
              padding: 10px 50px 30px 0;
              background-color:#039dfc;
            }
            
            .font-weight {
              color:white;
              text-align:center;
            }
            
            #card {
              margin-left: auto;
              margin-right: auto;
              width: 20%;
            }
            
            .font-weight-normal{
              font-family: 'Lora', serif;
              margin-bottom:2%
              
            }
    	</style>
    	
    	
    </head>
    <body>
      <div id="blochaut">
        <h1 class="font-weight">
         Compte-Rendu PDF
        </h1>
        <h4 class="font-weight">
         GSB
        </h4>
      </div>
    
    	@forelse ($title as $t)
    
       
     
               
    <div id="card">   
      <p class="font-weight-normal">Numero rapport: {{    $t->RAP_NUM }}
      </p>
    </div >              
    
      <div id="card">  
      <p class="font-weight-normal">Praticien: {{ $t->PRA_NUM }}</p>
      </div>                
      <div id="card">          
        <p class="font-weight-normal">Date: {{ $t->RAP_DATE }} </p>
      </div>
      
      <div id="card"> 
    <p class="font-weight-normal">Bilan: {{ $t->RAP_BILAN }} </p>
      </div>
      
      <div id="card"> 
    <p class="font-weight-normal">Motif: {{ $t->RAP_MOTIF }} </p>
      </div>                
      @empty 
    	
    	@endforelse
    
    </body>
</html>