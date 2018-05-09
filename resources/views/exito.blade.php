@extends('layouts.app')
@section('content')
<div class="header-filter" style="background-size: cover; background-position: top center;height: auto;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
					<div class="alert alert-success">
					    <div class="container-fluid">
						  <div class="alert-icon">
							<i class="material-icons">check</i>
						  </div>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<a href="/"></a>
						  </button>
					      <b>La compra se realizó con Exito</b>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	setInterval(function(){
		location.href = '/';
	}, 1500);
</script>
@endsection