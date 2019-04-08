<?php $this->layout('layouts::login') ?>
<style>
.box {
  margin: 10% auto;
}
.title {
  font-size: 3em;
  margin: auto;
  text-align: center;
  width: 100%;
}
.container {
  border: 2px solid #888888;
  /*border-radius: 5px;*/
  box-shadow: 2px 4px #888888;
  margin: auto;
  position: relative;
  width: 100%
  vertical-align: middle;
  background: white;
  max-width: 400px;
  padding: 45px 20px 35px 20px;
  text-align: center;
}
.login input{
  margin: 0 auto;
  width: 90%;
  padding: 10px;
  margin-bottom: 15px;
}
.submit {
  margin-top: 5%;
  font-weight: bold;
  font-size: 1em;
  /*border-radius: 5px;*/
  border: none;
  padding: 10px 20px;
  /*background-color: green;*/
}
</style>
<div class="box">

<div class="title">
  <h1>CraPi Application</h1>
</div>

<div class="container">
	<form action="<?php echo base_url(); ?>admin/login" method="post" class="login">
		<?php echo $form->messages(); ?>
	    <input type="text" placeholder="Enter username..." name="username" required="">
	    <input type="password" placeholder="Enter password..." name="password" required="">
	    <button class="submit btn-success" name="login_btn">LOGIN</button> 
	</form>
</div>

</div>