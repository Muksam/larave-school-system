@if(session('success'))

<div class="alert alert-success" id="alert1">
    <i class="fa fa-check"></i> {{session('success')}}
</div>

@endif

@if(session('error'))

<div class="alert alert-danger" id="alert" >
    <i class="fa fa-times"></i> {{session('error')}}
</div>

@endif
