	</main>

	<footer class="pt-3 mt-3 text-muted border-top text-end">
		Desenvolvido por LFreitas &middot; 2009-<?php echo date('Y'); ?>
	</footer>
</div>

	<script src="<?php echo $url_site; ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- Abrir links em nova aba -->
	<script type="text/javascript">
		var all_links = document.querySelectorAll('a');
		for (var i = 0; i < all_links.length; i++){
				var a = all_links[i];
				if(a.hostname != location.hostname) {
					a.rel = 'noopener';
					a.target = '_blank';
				}
		}
	</script>

	</body>
</html>