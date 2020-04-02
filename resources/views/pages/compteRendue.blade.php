@extends('layouts.app')

@section('content')

<section class="engine"><a href="https://mobirise.info/o"></a></section><section class="section-table cid-rInW7shYKf" id="table1-b">

  
  
  <div class="container container-table">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-9">
				  @if(Session::has('mdpSuccess'))
                	<p class="alert alert-success">{{ Session::get('mdpSuccess') }}</p>
                  @endif
				</div>
				<div class="col-md-4">
					
					<a href="{{route('newCompteRendu') }}" ><button type="button" class="btn btn-primary btn-form display-4">
						Nouveau Compte-Rendu
					</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>

  <div class="container container-table">
      
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NUM RAPPORT</th><th class="head-item mbr-fonts-style display-7">NUM PRATICIEN</th><th class="head-item mbr-fonts-style display-7">
                      DATE</th><th class="head-item mbr-fonts-style display-7">BILAN</th><th class="head-item mbr-fonts-style display-7">RAP_MOTIF</th>
                      <th class="head-item mbr-fonts-style display-7">PDF</th></tr>
            </thead>

            <tbody>

				@foreach ($lesRapports as $rapport)
                   <tr> 
    
                 	
                      <td class="body-item mbr-fonts-style display-7">{{$rapport->RAP_NUM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$rapport->PRA_NUM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$rapport->RAP_DATE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$rapport->RAP_BILAN}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$rapport->RAP_MOTIF }}</td>
                      <td class="body-item mbr-fonts-style display-7">
                      <a href="{{ route('PDFController.generatePDF', $rapport->RAP_NUM)}}">
                      <img src="{{ asset('images/logopdf.png')}}"style="height: 2rem;">
                      </a></td>
                      
                   </tr>
               @endforeach 
                             
           	</tbody>
           	
          </table>
          
       </div>
     </div>
    </div>
    </div>
    
    </section>
@stop
