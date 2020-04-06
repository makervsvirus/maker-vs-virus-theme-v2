					<footer>
						<div class="text-light" style="background: black; font-size: 15px; line-height: 24px; padding-bottom: 70px; padding-top: 1rem;">
							<div class="footer" style="padding-left: 10vw; padding-right: 10vw;">
								<div class="" style="margin: 0.5rem; width: 100%;">
									<a href="/contact/" class="text-white">Kontakt</a>
								</div>
								<div class="" style="margin: 0.5rem; width: 100%;">
									<a href="/imprint/" class="text-white">Impressum</a>
								</div>
								<div class="" style="margin: 0.5rem; width: 100%;">
									<a href="/privacy/" class="text-white">Datenschutz</a>
								</div>
								<div class="" style="margin: 0.5rem; width: 100%;">
									<a href="/codeofconduct/" class="text-white">Code of Conduct</a>
								</div>
								<div class="" style="margin: 0.5rem; width: 100%;">
									<a href="/faq/" class="text-white">FAQ</a>
								</div>
							</div>
							<div class="row mt-5">
								<div class="clr-col-12 text-center">
									<p>Made with <span style="color:#ad0000;">&#10084;</span> by <a href="https://www.hammertimekassel.de/">Hammertime Kassel</a></p>
								</div>
							</div>
						</div>
					</footer>
				</div>
			</div>
		</div>
	    <script>
			$(document).ready(function() {
				$(".header-hamburger-trigger").on("click", function() {
					$(".main-container").toggleClass("open-hamburger-menu");
				});

				$('.mapcol').click(function () {
					$('.mapcol iframe').css("pointer-events", "auto");
				});

				$( ".mapcol" ).mouseleave(function() {
					$('.mapcol iframe').css("pointer-events", "none"); 
				});
			});
		</script>
	</body>
</html>
