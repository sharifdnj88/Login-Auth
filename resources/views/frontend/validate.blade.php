@if ( $errors -> any()  )
	<p class=" alert alert-danger d-flex justify-content-between "> {{$errors -> first()}} <button class="btn-close" data-bs-dismiss="alert"></button> </p>
@endif

@if (Session::has('success'))
    <p class=" alert alert-success d-flex justify-content-between "> {{ Session::get('success') }} <button class="btn-close" data-bs-dismiss="alert"></button> </p> 
@endif