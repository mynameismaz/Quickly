<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<label for="s" class="sr-only">Search for</label>
	  <input type="text" class="form-control" name="s" placeholder="<?php __( 'Search for...', 'quicklytheme' ) ?>">
	  	<span class="input-group-btn">
	    <button type="submit" class="btn btn-secondary" type="button"><?php __( 'Go!', 'quicklytheme' ) ?></button>
	  </span>
	</div>
</form>