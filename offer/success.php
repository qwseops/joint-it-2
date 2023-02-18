<!DOCTYPE html>
<html lang="en">

<head>
<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

  ttq.load('CFNOSPJC77U1MMAFCRD0');
  ttq.page();
}(window, document, 'ttq');
ttq.track('CompletePayment')

</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thank you!</title>
	<link rel="stylesheet" href="cdn/success/css/style.css">
	<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/cdn/js/jquery.js"></script>
    <script type="text/javascript" src="/cdn/js/leadbit_success.js"></script>
</head>
<body>
<div class="page-container">
	<div class="page-container__order">
		<div class="language language__order">
			<div class="language__container">
			</div>
		</div>
		<div class="order page-container__item visible" data-country="IT">
			<div class="order__box">
				<div class="order__header">
					<div class="order__container">
						<div class="order__header-title">Grazie!</div>
						<div class="order__header-subtitle">La sua domanda è stata elaborata e accettata per l'esecuzione dal nostro staff!</div>
						<div class="order__header-description">Per confermare la richiesta, uno specialista li contatterà a breve.</div>
					</div>
				</div>
				<div class="order__body">
					<div class="order__container">
						<div class="order__body-title">Ottieni un codice promozionale per un
							<mark>confezione gratuito</mark> con il suo ordine.
						</div>
						<div class="order__body-description">Lascia la sua e-mail e vi invieremo un codice promozionale con il quale riceverai in omaggio un confezione del prodotto.*</div>
						<div class="order__body-media">
							<img src="/cdn/success/img/ryka.png" alt="">
						</div>
						<div class="order__body-info">*Un confezione gratuito con l'acquisto del corso</div>
					</div>
				</div>
				<div class="order__footer">
					<div class="order__footer-header">
						<div class="order__container">
							<form action="send.php" method="post" class="order__form order-form" id="email_form">
								<div class="order__label">
									<div class="order__label-media">
										<img src="/cdn/success/img/kolokol.png" alt="">
									</div>
									<input type="email" name="email" class="order__input" placeholder="inserisci il tuo indirizzo email">
								</div>
								<input data-error="Inserisci il tuo indirizzo email" data-success="Grazie per l`iscrizione! La tua email è stata salvata!" class="order__btn btn-save" type="submit" value="Ottenere un codice promozionale" onclick="location.href='/cdn/success/pages/check/check.it.html';">
							</form>
						</div>
					</div>
					<div class="order__footer-body">
						<div class="order__container">Conferma la propria e-mail per 2 ore per ricevere il codice promozionale!</div>
					</div>
					<div class="order__footer-bottom">
						<div class="order__container">Non divulghiamo e trasferiamo i dati personali che ci fornite attraverso il nostro sito a terzi. Cliccando su questo pulsante,
							<span>accetti la ricezione di email informative.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>$("form").attr("action", "send.php"); $("form").attr("method", "post");</script></body>
</html>
