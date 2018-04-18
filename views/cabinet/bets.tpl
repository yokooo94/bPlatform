<a href="/cabinet">Назад</a>

<h2>{$TitleBets}</h2>

<a href="/cabinet/bets/add">Добавить ставку</a>
<ul>
    {if empty($User->ownBet)}
        <li>Ставок пока нет</li>
    {else}
        {foreach from=$User->ownBet item=bet}
            <li><a href='/cabinet/bets/{$bet->id}'>Ставка #{$bet->id}</a> Общий коэффициент: {$bet->coefficient} [Сумма : {$bet->amount} р.] Статус - {$bet->status}</li>
        {/foreach}
    {/if}
</ul>