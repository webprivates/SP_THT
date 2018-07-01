<?php echo form_open('admin/login'); ?>

<label for="username">Masukkan Username</label>
<input type="text" name="username"><br><br>
<label for="password">Masukkan Password</label>
<input type="password" name="password"><br><br>
<button type="submit" name="submit">Login</button>
<?php echo form_close() ?>