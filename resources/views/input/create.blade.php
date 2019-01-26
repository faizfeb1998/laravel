@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}">
      @csrf
          <div class="form-group">              
              <label for="Serial_Number">Serial Number</label>
              <input type="text" class="form-control" name="Serial_Number"/>
          </div>
          <div class="form-group">              
              <label for="Nomor_Inventaris">Nomor Inventaris</label>
              <input type="text" class="form-control" name="Nomor_Inventaris/>
          </div>
          <div class="form-group">              
              <label for="Merek">Merek</label>
              <input type="text" class="form-control" name="Merek"/>
          </div>
          <div class="form-group">              
              <label for="Kondisi">Kondisi</label>
              <input type="text" class="form-control" name="Kondisi"/>
          </div>
          <div class="form-group">              
              <label for="Nomor_Kontrak">Nomor Kontrak:</label>
              <input type="text" class="form-control" name="Nomor Kontrak"/>
          </div>
          <div class="form-group">              
              <label for="Tahun_Perolehan">Tahun_Perolehan</label>
              <input type="text" class="form-control" name="Tahun_Perolehan"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
