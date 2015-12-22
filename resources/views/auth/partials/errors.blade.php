@if (count($errors) > 0)
  <div class="alert alert-danger hide">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h4>Uuupps!</h4>
      Ada beberapa masalah dengan masukkan Anda.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
  </div>
@endif
