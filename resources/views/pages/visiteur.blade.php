@extends('layouts.app', ['title' => 'Connexion'])

@section('content')


<section class="engine"><a href="https://mobirise.info/t"></a></section><section class="section-table cid-rInW7shYKf" id="table1-b">

  
  
  <div class="container container-table">
      
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NOM</th><th class="head-item mbr-fonts-style display-7">PRENOM</th><th class="head-item mbr-fonts-style display-7">ADRESSE</th><th class="head-item mbr-fonts-style display-7">
                      VILLE</th><th class="head-item mbr-fonts-style display-7">SEC_CODE</th><th class="head-item mbr-fonts-style display-7">LAB_CODE</th></tr>
            </thead>

            <tbody>

				@foreach ($lesVisiteurs as $visiteur)
                   <tr> 
    
                      <td class="body-item mbr-fonts-style display-7">{{$visiteur->VIS_NOM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$visiteur->Vis_PRENOM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$visiteur->VIS_ADRESSE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$visiteur->VIS_VILLE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$visiteur->SEC_CODE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$visiteur->LAB_CODE }}</td>
                      
                   </tr>
               @endforeach 
                             
           	</tbody>
           	
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>


                          
                    
  <script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('popper/popper.min.js') }}"></script>

  <script src="{{ asset('tether/tether.min.js') }}"></script>
  <script src="{{ asset('smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ asset('touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ asset('datatables/jquery.data-tables.min.js') }}"></script>
                                          
                      
               
              

@stop