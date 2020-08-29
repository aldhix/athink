@extends('altar::page-extra',['title'=>'Error 404. Oops! Page not found','body_class'=>'error-page'])
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-warning"> 404</h2>
        <div class="error-content pt-4">
          <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="{{route('demo.index')}}">return to dashboard</a> or try using the search form.
          </p>

        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
@endsection

@push('css')
<style type="text/css">

.error-page{
	background-color: #e9ecef;
	padding-top: 30px;
}

</style>
@endpush