<main id="main" class="main">
{if isset($page)}
  {include file="user/pages/$page.tpl"}
{else}
  {include file="user/pages/profile.tpl"}
{/if}

</main>