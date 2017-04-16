@extends('layouts.app')

@section('content')
  @include('partials.page-header')

<div class="row">
	<div class="col-md-4 col-sm-12">
		<aside>
		@include('partials.sidebar')
		</aside>
	</div>
	
 
	<div class="col-md-8 col-sm-12">
		<article>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<?php the_content(); ?>
			<?php endwhile; else: ?> 
		<p>
			<?php _e('Такой страницы несуществует'); ?>
		</p> 
			<?php endif; ?>
		</article>
	</div>
</div>

@include('partials.slides')

@include('partials.slider')

  {!! get_the_posts_navigation() !!}
@endsection
