<nav id="navbar" class="navbar">
  <div class="navbar-logo">Фермула</div>
</nav>
<header id="header" class="header">
  <div class="welcome-text">
     <h3>Фермула | построй свой завод</h3>
      <p>Cтрой заводы, прокачивай свой город <br> и поборись за первое место в топе</p>
  </div>
</header>

    <main id="main" class="main">
      {if isset($page)}
      {include file="guest/pages/$page.tpl"}
{else}
  {include file="guest/pages/index.tpl"}
{/if} 
    </main>

    <footer id="footer" class="footer">
        fermula.mobi @ Recloud 2020, 12+
</footer>