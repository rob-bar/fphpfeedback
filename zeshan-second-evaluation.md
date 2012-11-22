#Feedback
---
##Zeshan

**Make sure your project is clean when you begin. There are 6 files in your root dir that can be removed(all the md,build.xml, etc)**

1. Remove Documentation in your controllers this is not neccesairy and makes your file extremely long

	<?php
	/**
	 * The Ajax Controller.
	 *
	 * Ajax controller .
	 *
	 * @package  app
	 * @extends  Controller
	 *
	 *  Author: Zeshan Khattak
	 *  Company: Proximity BBDO
	 */

	class Controller_Ajax extends Controller
	{

	TO =>

	<?php
	class Controller_Ajax extends Controller {


2. Don't use exit; use return; exit stops the execution flow **(You can use exits to debug right after an echo or a var_dump but be sure to not have those exits in your production code)**

3. $records = Model_User::find('all'); echo count($records); exit; TO =>
		DB::select(DB::expr('COUNT(id) as count'))
			->from('users')
			->execute()
			->current()
			->as_array()['count']

4. Mobile detection:
	- Use <code>Agent::is_mobiledevice()</code>; for detection
	- Redirect using <code>Response::redirect($this->param('lang') . '/mobile');</code>
	see ing.php line 35

5. Be consistent in viewloading tactics
      $counter_to_show = str_pad($countre_str, 5, "0", STR_PAD_LEFT);
      $data['counter'] = $counter_to_show;

      $this->template->title = 'ProximityBBDOWebFramework';
      $this->template->set_global('title','ProximityBBDOWebFramework');
      $this->template->set_global('class','facebook');
      $this->template->set_global('counter',$data['counter']);
      $this->template->content = View::forge('ing/index', $data);


      //GOOD
			$view = View::forge('home/index');
			$view->username = 'Joe14';
			//FILTERED
			$view->title = 'Home';
			$view->set('username', 'Joe14');
			$view->set('title', 'Home');
			//NOT FILTERED
			$view->set_safe('pag', $pagination);
			return $view;
			//GOOD

			//BAD
			$data['username'] = 'Joe14';
			$data['title'] = 'Home';
			return View::forge('home/index', $data);
			//BAD


6. You are using to many views. "**Templates**" is not the correct name. Use "**partials**" for small pieces of HTML.
7. Use **yml** instead of php for multilang. We've also metioned that before.
8. Reduce code as much as possible.
9. turn of loging in your config line104
10. no long php logic block in the views this is the whole principle of mvc...
	<?php
		$url = Uri::current();
		if(strpos($url, 'nl') !== false) {
			echo 'NL | ';
		} else {
			echo Html::anchor(Uri::base().'nl/campaign', 'NL').' | ';
		}

        if(strpos($url, 'fr') !== false) {
        	echo 'FR';
        } else {
        	echo Html::anchor(Uri::base().'fr/campaign', 'FR');
        }

	?>

	in header.php

11. separate javascript form your views.
12. layout.php <?=$content?> => <?= $content; ?>
13. if u user shorthand tags use the everywere, shorthand or not. index.php has all echoes and layout.php uses <?= ?> (Consistency is very important)
14. Avoid empty code blocks. footer.php
  <script type="text/javascript">
  $(document).ready(function() {



  });
  </script>