<div class="container-fluid banner">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="banner-iner">
                	<img src="<?php echo URL; ?>public/images/slider1.png" class="img-responsive" />
                </div>
            </div>
            <div class="col-md-12">
            	<div class="baner-line"><img src="<?php echo URL; ?>public/images/line.png" class="img-responsive" /></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid login-con">
	<div class="container">
    	<div class="row">
            <div class="col-sm-offset-3 col-xs-offset-1  col-sm-6 col-xs-10">
            	<div class="login-main">
                    <h1>LOGIN</h1>
                    <form action="<?php echo URL; ?>erp/login/run" method="post">
                        <input type="text" placeholder="Username" class="user" name="username" id="username" required autofocus value="<?php echo $_COOKIE['username']; ?>"/>
                        <input type="password" placeholder="Password" class="lock" name="password" id="password" required <?php echo $_COOKIE['password']; ?>/>
                        <button type="submit" name="login" id="login">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
