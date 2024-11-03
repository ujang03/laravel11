@extends('admin.layouts.app')

@section('content')

@livewire('data-warga')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  window.addEventListener('close-modal', event => {
  $("#staticBackdrop").modal('hide');
  })
</script>

@endsection