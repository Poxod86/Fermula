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
      {assign var='page_file' value='template/guest/pages/'|cat:$page|cat:".tpl"} 
      
      {if empty($page)}
            {include file="guest/pages/index.tpl"}
      {else}
            {if file_exists($page_file)}
              {include file="guest/pages/$page.tpl"}
            {else}
              {include file="errors/404.tpl"}
            {/if}
      {/if}
    </main>

    <footer id="footer" class="footer">
        fermula.mobi @ Recloud 2020, 12+
</footer>