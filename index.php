<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Minecore WebAdmin
    </title>
    <link href="login-box.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="center">
      <div id="login-box"><H2>Webadmin Login</H2>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Administrace Survival, PvP a Tekkit serveru <br /><br />
        <div id="login-box-name" style="margin-top:20px;">Login:
        </div>
        <div id="login-box-field" style="margin-top:20px;">
          <?php $u = $_GET["u"]; if ($u == "w")  {echo "Špatně zadané uživatelské jméno";} else{}?><form action="login.php" method="GET"><input name="nick" class="form-login" title="Username" value="" size="30" maxlength="2048" />
        </div>
        <div id="login-box-name">Heslo:
        </div>
        <div id="login-box-field">
          <input name="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" />
        </div><br />
        <span class="login-box-options">
          <input type="checkbox" name="1" value="1"> Zapamatovat 
          <a href="#" style="margin-left:30px;">Problem Radim?</a>
        </span><br /><br />
        
          <input style="float:right;"type="submit" value="Odeslat">    </form>
      </div>
    </div>
  </body>
</html>