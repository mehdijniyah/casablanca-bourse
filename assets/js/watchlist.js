function getWatchlist() {

	let watchlist = localStorage.getItem("watchlist");
	return watchlist == null ? [] : watchlist.split(',');
}

function addToWatchlist(codeValeur)
{
	let watchlist = getWatchlist();
	watchlist.push(codeValeur);
	localStorage.setItem("watchlist", watchlist);
}

function removeFromWatchlist(codeValeur)
{
	let watchlist = getWatchlist();
	watchlist = watchlist.filter(action => action != codeValeur);
	localStorage.setItem("watchlist", watchlist);
}

function isInWatchlist(codeValeur)
{
	let watchlist = getWatchlist();
	return watchlist.includes(codeValeur);
}
