
<style>
    .myborder{
        border: 1px solid black;
    }
</style>

<div class="myborder">
    <p>Список функционала у пользователя</p>

<ul>
    {if empty($User->ownUserFunction)}
        <li>Список пуст</li>
    {else}
        {foreach from=$User->ownUserFunction item=map}
            <li>Статус: {$map->status}. Активен до : {$map->dateLimitation} {$map->function->name} ({$map->function->description}) [{$map->function->price} р.]</li>
        {/foreach}
    {/if}
</ul>
</div>
