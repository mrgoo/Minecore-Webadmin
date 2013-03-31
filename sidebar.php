<?php
echo"</p>
          <p></p>
          <div class='clr'></div>
        </div>
        <div class='clr'></div>
      </div>
      <div class='sidebar'>
        <div class='gadget'>
          <h2 class='star'>Správa</h2>";
echo"
  <ul>
<li><a href='/vip/index.php?id=$ids&login=$date' >Správa VIP</a></li>
 <li><a href='/tekkit/index.php?id=$ids&login=$date'>Správa VIP Tekkit</a></li></li>
<h2 class='star'>Žádosti</h2>
<li> <a href='/naborlist.php?id=$ids&login=$date&cat=1&active=1' '>Žádosti o GM</a></li>
<li> <a href='/naborlist.php?id=$ids&login=$date&cat=0&active=1  ' '>Žádosti o Helpera</a></li>
<li> <a href='/naborlistarchiv.php?id=$ids&login=$date&status=3&active=0  ' '>K doplnění</a></li>
<li> <a href='/naborlistarchiv.php?id=$ids&login=$date&status=1&active=0  ' '>Archiv schválených</a></li>
<li> <a href='/naborlistarchiv.php?id=$ids&login=$date&status=2&active=0  ' '>Archiv zamítnutých</a></li>

  </ul><form action='nick.php?login=$date&id=$ids' method='post'>
 <h3>Nick</h3>
  <input type='text' name='nick' value='' />
  <input type='submit' value='Odeslat' /></form>
  <form action='ip.php?login=$date&id=$ids' method='post'>
 <h3>IP</h3>
  <input type='text' name='ip' value='' />
  <input type='submit' value='Odeslat' /></form>
   <form action='nabor.php?login=$date&id=$ids' method='post'>
   <h3>ID žádosti</h3>
  <input type='text' name='iu' value='' />
  <input type='submit' value='Odeslat' /></form>
</form>
        </div>
      </div>
      <div class='clr'></div>

    </div>
  </div>


</div>
</body>
</html> ";
?>