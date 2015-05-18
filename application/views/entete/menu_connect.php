<div> <img src='<?php echo img_url('image.jpg'); ?>' width = 500 height = 200 /> </div>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='<?php echo site_url('accueil'); ?>'><span>Accueil</span></a></li>
   <li class='has-sub'><a href='<?php echo site_url('config'); ?>'><span>Config</span></a>
   </li>
   <li><a href='<?php echo site_url('nouveauCompte'); ?>'><span>Mon compte</span></a></li>
   <li class='last'><a href='<?php echo site_url('deconnexion'); ?>'><span>Deconnexion</span></a></li>
</ul>
</div>