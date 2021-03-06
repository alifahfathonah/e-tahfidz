@extends('masterLay')

@section('title')
   Bayar SPP
@endsection

@section('content')
    <div class="panel">
       <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-edit"></i> SPP
          </h3>
       </div>
       <div class="panel-body">
         @if ($spp[0]['status'] == 'non-checked' || $spp[0]['status'] == null)
             <h5>Fitur Ini Belum Diaktifkan, Silahkan Aktifkan Di Menu AKtivasi Fitur</h5>
         @else 
         <div class="row">
            <div class="col-md-4">
             <form action="{{route('spp.search')}}" method="get">
               @include('suAdmin.search.search')
             </form>
            </div>
         </div>
         <br>
          <table class="table table-hover">
             <thead>
                <tr>
                   <th>#</th>
                   <th>Nama Murid</th>
                   <th>Bayar SPP</th>
                </tr>
             </thead>
             @foreach ($murids as $murid)
                <tr>
                   <td>{{$loop->iteration}}</td>
                   <td>{{$murid->nama}}</td>
                   <td>
                      <a href="{{route('suAdmin.bayar',$murid)}}" class="btn btn-grad"><i class="fa fa-search-plus"></i></a>
                   </td>
                </tr>
             @endforeach
             {{ $murids->links() }}
         @endif
      </div>
   </div>
 
@endsection
                  
