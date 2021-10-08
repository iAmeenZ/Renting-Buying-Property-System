

<?php  if (count($errors) > 0) : ?>
  <div class="error" style="color: red; border: 2px solid red; font-size: 17px; border-radius: 0%; font-family: arial; width: 250px; background-color: black; margin: auto;">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>