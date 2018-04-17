<a href="/cabinet/bets">Назад</a>

<h2>Ставка #{$Bet.id}</h2>

        {foreach from=$Bet->ownBetcontent item=content}
        
        
        <p> {$content->event->tour->season->league->sport->name}.
            {$content->event->tour->season->league->name}.
            Тур : {$content->event->tour->number}.
                {$content->event->teamHome} - {$content->event->teamAway}
            {$content->event->date}
            Ставка :  {$content->bettype->name},
            Коэффициент : {$content->coefficient},
            Статус - {$content->status}
        </p>
    {/foreach}
