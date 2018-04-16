<h2>{$TitleBets}</h2>


<ul>
    {if empty($Bets)}
        <li>Ставок пока нет</li>
    {else}
        {foreach from=$Bets item=bet}
            <li><a href='/cabinet/bets/{$bet->id}'>Ставка #{$bet->id}</a> Общий коэффициент: {$bet->coefficient} [Сумма : {$bet->amount} р.] Статус - {$bet->status}</li>
        {/foreach}
    {/if}
</ul>