function handleWatchlist()
{
	let codeValeur = application.detailsAction[0].code_valeur.trim();
	if(isInWatchlist(codeValeur))
	{
		removeFromWatchlist(codeValeur);
		alert("Action a été supprimé de la watchlist");
	}
	else
	{
		addToWatchlist(codeValeur);
		alert("Action a été ajouté à la watchlist");
	}

	application.$forceUpdate();
}
