<h2>Ставка #{$Bet.id}</h2>

<ul>
        {foreach from=$Content item=row}
        {$row->event->teamHome}
        <li>{$row->event->tour->season->league->sport->name}. {$row->event->tour->season->league->name}. Тур : {$row->event->tour->number}. {$row->event->date} Ставка :  {$row->bettype->name}, Коэффициент : {$row->coefficient}, Статус - {$row->status}</li>
    {/foreach}
</ul>