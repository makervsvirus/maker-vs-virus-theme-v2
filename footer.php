					<footer class="page-footer font-small unique-color-dark pt-4">

						<!-- Footer Elements -->
						<div class="clr-container">

							<!-- Call to action -->
							<div class="list-unstyled list-inline text-center py-2">
								<ul>
									<li><a href="/contact/">Kontakt</a></li>
									<li><a href="/imprint/">Impressum</a></li>
									<li><a href="/privacy/">Datenschutz</a></li>
									<li><a href="/codeofconduct/">Code of Conduct</a></li>
									<li><a href="/faq/">FAQ</a></li>
								</ul>
							</div>
							<!-- Call to action -->

						</div>
						<!-- Footer Elements -->

						<!-- Copyright -->
						<div class="footer-copyright text-center py-3">Made with <span style="color:#ad0000;">&#10084;</span> by <a href="https://www.hammertimekassel.de/">Hammertime Kassel</a>
						</div>
						<!-- Copyright -->

					</footer>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$(".header-hamburger-trigger").on("click", function() {
					$(".main-container").toggleClass("open-hamburger-menu");
				});

				$('.mapcol').click(function() {
					$('.mapcol iframe').css("pointer-events", "auto");
				});

				$(".mapcol").mouseleave(function() {
					$('.mapcol iframe').css("pointer-events", "none");
				});
			});
		</script>
	</body>
</html>