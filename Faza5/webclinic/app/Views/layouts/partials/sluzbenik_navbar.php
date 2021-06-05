<header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><?= anchor('', 'Web Clinic')?></h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li>
              <?= anchor('', 'Početna',['class'=>'nav-link '.(url_is('')?'active':'')])?>
            </li>
            <li>
              <?= anchor('/klijent/pregled', 'Zakažite pregled',['class'=>'nav-link '.(url_is('gost/pregled*')?'active':'')])?>    
            </li>
           
            
            <li>
              <?= anchor('/sluzbenik/control-panel', 'Kontrolni panel',['class'=>'getstarted'])?>          
            </li>
            <li>
              <?= anchor('/profile', 'Moj profil',['class'=>'getstarted'])?>          
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>