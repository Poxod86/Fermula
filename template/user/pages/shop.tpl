     
       
       
        <ul class="shopping-card">
        {foreach  $user_tower_list as $tower}
            <li class="shopping-item">
                <img src="template/assets/images/towers/{$tower.image}" width="80px" alt="" class="shopping-img">
                <div class="shopping-desc">
                    <span>
                    {$tower.name} • 
                    <small>
                    {$tower.price}
                    <img src="template/assets/images/icons/coin.png" alt="coin" width="10px">
                    </small>
                    </span>
                    <span>{$tower.description}</span>
                </div>
                <form action data-operation="buy_tower">
                <input type="hidden" name="tower" value="{$tower.id}">
                <button type="button" class="shopping-button" onclick="sendAjax(this)">Купить</button>
                </form>

                
            </li>
        
         {/foreach}
        </ul>

       