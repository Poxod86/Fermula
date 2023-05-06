<main id="main" class="main">
{assign var='page_file' value='template/user/pages/'|cat:$page|cat:".tpl"} 
      
      {if empty($page)}
            {include file="user/pages/menu.tpl"}
      {else}
            {if file_exists($page_file)}
              {include file="user/pages/$page.tpl"}
            {else}
              {include file="errors/404.tpl"}
            {/if}
      {/if}

</main>