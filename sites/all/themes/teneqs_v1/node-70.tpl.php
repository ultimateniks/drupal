<?php
// $Id: node.tpl.php,v 1.4.2.1 2009/05/12 18:41:54 johnalbin Exp $

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_user().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
 global $base_path;
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">

  <?php print $picture; ?>

  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <div class="content">
    <?php
	  echo $node->content['body']['#value'];
	  //print $content;
	?>
  </div>


  
  	<!--<div style="height: 0px; width: 0px; position: relative;" class="sideShareContainer">
	  <div class="sideShare" style="position: absolute; left: -92px; top: 0px;">
	    <ul class="share-counters">
		  <li id="fb-share-counter-side">
			<a id="fb-share-counter-link-side" href="http://www.facebook.com/sharer.php?u=<?php echo url('node/70', array('absolute' => TRUE, 'query' => 't=So You Think Yoursquo;re Creative. Want to see your ideas used in a $20M advertising campaign?')); ?>" target="_blank" onclick="if(document.getElementById('fb-share-counter-link-side').innerHTML=='9999')document.getElementById('fb-share-counter-link-side').innerHTML='10K';else if((document.getElementById('fb-share-counter-link-side').innerHTML.indexOf('K')==-1)&amp;&amp;(document.getElementById('fb-share-counter-link-side').innerHTML.indexOf('M')==-1))document.getElementById('fb-share-counter-link-side').innerHTML = parseInt(document.getElementById('fb-share-counter-link-side').innerHTML)+1;"></a>
	      </li>
		  <li id="twitter-share-counter-side">
		    <iframe scrolling="no" height="63" frameborder="0" width="55" src="http://platform.twitter.com/widgets/tweet_button.html?via=10EQS&amp;related=So You Think Yoursquo;re Creative. Want to see your ideas used in a $20M advertising campaign? This is a really unique opportunity to show you have the right stuff. Think you can drive product awareness and build a brand? Develop a great campaign for a major spirits producer and prove it. Sign up now to receive the brief and contest details. Top 25 entries will receive cash prizes&amp;text=So You Think Yoursquo;re Creative&amp;count=vertical&amp;url=<?php echo url('node/70', array('absolute' => TRUE)); ?>" d30tagged="1" style="visibility: visible;"></iframe>
		  </li>
		  <li id="linkedin-share-counter-side">
		    <a onclick="if(this.innerHTML=='9999')this.innerHTML='10K';else if((this.innerHTML.indexOf('K')==-1)&amp;&amp;(this.innerHTML.indexOf('M')==-1)&amp;&amp;(this.innerHTML!=''))this.innerHTML = parseInt(this.innerHTML)+1;" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;source=10EQS&amp;url=<?php echo url('node/70', array('absolute' => TRUE)); ?>&amp;title=So You Think You&rsquo;re Creative" class="linked"></a>
		  </li>
		</ul>
		<ul class="share-functions">
		  <li>
		    <a href="#"><img src="<?php echo $base_path . file_directory_path() . '/email.png'; ?>" alt="" />&nbsp;Email</a>
		  </li>
		</ul>
		<br style="clear: both;">
	  </div>
	</div>-->

  
  
  
  <?php print $links; ?>

</div></div> <!-- /node-inner, /node -->