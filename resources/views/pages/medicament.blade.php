  @extends('layouts.app', ['title' => 'Connexion'])

@section('content')

<section class="engine"><a href="https://mobirise.info/o"></a></section><section class="section-table cid-rInW7shYKf" id="table1-b">

   <!-- <div class="sub-main">
      <button class="button-three">Click Me</button>
    </div>-->
    

  
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

                  <th class="head-item mbr-fonts-style display-7">DEPOTLEGAL</th>
                  <th class="head-item mbr-fonts-style display-7">NOMCOMMERCIAL</th>
                  <th class="head-item mbr-fonts-style display-7">CODE</th>
                  <th class="head-item mbr-fonts-style display-7">COMPOSITION</th>
                  <th class="head-item mbr-fonts-style display-7">EFFETS</th>
                  <th class="head-item mbr-fonts-style display-7">CONTREINDIC</th>
                  <th class="head-item mbr-fonts-style display-7">PRIXECHANTILLON</th>
              </tr>
            </thead>

            <tbody>

				@foreach ($lesMedicaments as $medicament)
                   <tr> 
    
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->MED_DEPOTLEGAL}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->MED_NOMCOMMERCIAL}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->FAM_CODE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->MED_COMPOSITION}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->MED_EFFETS}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->MED_CONTREINDIC }}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$medicament->MED_PRIXECHANTILLON }}</td>
                      
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