<!DOCTYPE html>
<?//php get_header(); ?>
	<!-- Content -->
	<div class="wrapper content margin-top">
		<div class="columns intro">
        <div class="blog-header">
            <h1 class="blog-title"><?php bloginfo('name') ?></h1>
            <p class="blog-description"><?php bloginfo('description') ?></p>
        </div>
			<br>
			<table class="jobs" border="1">
				<tr class="main-headings">
					<td>POSITION AND EXPERIENCE</td>
					<td>JOB STATEMENT</td>
                </tr>
                <?php if(have_post()): ?>
                <?php while(have_post()): the_post(); ?>
				<tr class="blog-post">
					<td class="blog-post-title"><?php the_title(); ?></td>
					<td class="blog-post-meta"><?php the_content(); ?></td>
                </tr>
                <!-- <tr class="blog-post">
					<td class="blog-post-title">Chief Inspectors x 4 permanent positions exists in Gauteng, CT, PE and Durban ● Minimum Requirements: Bachelor Degree or National Diploma in Agricultural Science or Food Sciences or Microbiology ● 5 years’ relevant experience in quality control inspections, in the dairy industry processing or regulatory environment ● Valid driver’s license and own reliable car ● Computer literate.</td>
					<td class="blog-post-meta">Purpose: Enforcing Agricultural Products Standards Act and regulations applicable to edible ice; complaints investigations; prohibition of sale of non-complying products; establish sound working relationships with clients; compile budgets and reports; ensure competent workforce.</td>
				</tr> -->
				<!-- <tr class="blog-post">
					<td class="blog-post-title">Senior Inspector x 1 permanent position exists in Bloemfontein ● Minimum Requirements: Bachelor Degree or National Diploma in Agricultural Science or Food Sciences or Microbiology ● 3 years’ relevant experience in quality control inspections, in the dairy industry processing or regulatory environment.● Valid driver’s license and own reliable car ● Computer literate.</td>
					<td class="blog-post-meta">Purpose: Enforcing Agricultural Products Standards Act and regulations applicable to edible ice; complaints investigation; inspection and certification of edible ice, dairy and imitation dairy products; prohibition of sale of non-complying products; establish sound working relationships with clients; compile budgets and reports; ensure competent workforce.</td>
				</tr>
				<tr class="blog-post">
					<td class="blog-post-title">Inspector x 11 permanent positions exists in Gauteng, CT, PE, Durban and Bloemfontein ● Minimum Requirements: Bachelor Degree or National Diploma in Agricultural Science or Food Sciences or Microbiology ● 1 year relevant experience in quality control inspections, in the dairy industry  processing or regulatory environment. ● Valid driver’s license and own reliable car ● Computer literate.</td>
					<td class="blog-post-meta">Purpose: Enforcing Agricultural Products Standards Act and regulations applicable to edible ice; complaints investigation; inspection and certification of edible ice, dairy and imitation dairy products; prohibition of sale of non-complying products; establish sound working relationships with clients;</td>
				</tr>
				<tr class="blog-post">
					<td class="blog-post-title">Office Administrator x 2 permanent positions exists in Gauteng ● Minimum Requirements: Bachelor Degree or National Diploma in Office Management or Accounting or Administration or Public Administration ● 3 years’ relevant experience ● Computer literacy and sage pastel operations and are a critical requirement.</td>
					<td class="blog-post-meta">Purpose: Manage accounts payables and receivables, manage and operate sage pastel systems; administrative support role; procurement of goods and services; data capturing; administer meetings; recordkeeping; deal with queries; perform general administration roles.</td>
				</tr>
				<tr class="blog-post">
					<td class="blog-post-title">Administrator Assistant x 4 permanent position exists in Gauteng ● Minimum Requirements: Senior Certificate or Grade 12 ● 1 year relevant experience ● Computer literate.</td>
					<td class="blog-post-meta">Purpose: Data capturing; administrative support role; administer meetings; recordkeeping; deal with queries; perform general administration roles.</td>
				</tr>
				<tr class="blog-post">
					<td class="blog-post-title">Accountant x 1 (Gauteng). Minimum Requirements.  Bachelors Degree in B Com Accounts.  3 years relevant experience in managing finances.</td>
					<td class="blog-post-meta">Purpose: Prepare, examine, and analyze accounting records, financial statements, and other financial reports to assess accuracy, completeness, and conformance to reporting and procedural standards.  Compute taxes owed and prepare tax returns, ensuring compliance with payment, reporting and other tax requirements. Develop, maintain, and analyze budgets, preparing periodic reports that compare budgeted costs to actual costs.  Report to management regarding the finances of establishment</td>
                </tr> -->
                <?php endWhile; ?>
                <?php else: ?>
                <p><?php _('No Job Post available') ?></p>
                <?php endif; ?>
			</table>
			<br>
			<p>Please forward applications to – info@nejahmogul.co.za.  All queries should be directed to Mr Patrick Mphahlele at 0824992445 <strong>Application closes:  19 June 2017</strong></p><br>
			<p>Nejahmogul Technologies is an equal opportunity employer offering market related salaries that can be structured to suit individual needs and circumstances.</p>
		</div>
	</div>
	
	<!-- Footer -->
	<footer>
		<div class="wrapper social">
			<img src="images/Follow Us Text.png" id="follow-text">
			<a href="#"><img alt="facebook" src="<?php bloginfo('template_url') ?>/images/Facebook Icon.png" title="Nejah Mogul Facebook"></a>
			<a href="#"><img alt="g+" src="<?php bloginfo('template_url') ?>/images/Google + Icon.png" title="Nejah Mogul Google Plus"></a>
			<a href="#"><img alt="twitter" src="<?php bloginfo('template_url') ?>/images/twitter-icon.png" title="Nejah Mogul Twitter"></a>
			<div class="form">
				<form method="post" enctype="multipart/form-data">
				<input type="text" name="inpout"> <input type="image" src="<?php bloginfo('template_url') ?>/images/Search Button.png" value="Submit">
				</form>
			</div>
		</div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>