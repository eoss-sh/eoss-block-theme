<?php
/**
 * Title: Query: Grid Cover
 * Slug: first-draft/query-grid-cover
 * Categories: theme, query
 * Keywords: query, cover, grid, posts
 * Block Types: core/query
 * Viewport Width: 1376
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull">

	<!-- wp:post-template {"align":"full","className":"is-style-no-gap"} -->

		<!-- wp:group {"tagName":"article","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"},":hover":{"color":{"text":"var:preset|color|primary-100"}}}}},"layout":{"type":"constrained"}} -->
		<article class="wp-block-group has-link-color">

			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"textColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-cover alignfull is-light has-white-color has-text-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
				<div class="wp-block-cover__inner-container">

					<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<header class="wp-block-group">
						<!-- wp:post-title {"isLink":true} /-->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:post-date /-->
						</div>
						<!-- /wp:group -->
					</header>
					<!-- /wp:group -->

				</div>
			</div>
			<!-- /wp:cover -->

		</article>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->
