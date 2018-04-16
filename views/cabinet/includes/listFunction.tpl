
<style>
    .myborder{
        border: 1px solid black;
    }
</style>

<div class="myborder">
    <p>Список функционала у пользователя</p>

<ul>
    {if empty($UserMappingFunction)}
        <li>Список пуст</li>
    {else}
        {foreach from=$UserMappingFunction item=mapping}
            <li>{$mapping->function->name} ({$mapping->function->description}) [{$mapping->function->price} р.]</li>
        {/foreach}
    {/if}
</ul>
</div>
