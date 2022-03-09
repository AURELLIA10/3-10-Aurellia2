@extends('layouts.main')

@section('container') 
    <div class="title-top mb-5">
       <h2 class="fw-bold"><Contact Us></h2>
    </div>
    <form method="POST" action="{{route('contacts.store')}}">
        {{csrf_field()}}
        <div class="mb-3">
          <label for="inputname">Nama</label>
          <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="inputemail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
        </div>
        <div class="mb-3">
          <label for="floatingTextarea2">Pesan</label>
        <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>   
      </form>

@endsection