<div class="3u">
	<div id="sidebar2">
		<section>
			<div class="sbox1">
				<h2>Subscribe</h2>
				<form method="post" action="http://ieee.tamu.edu/mailman/subscribe/listserv_ieee.tamu.edu">
					<div style="margin-bottom: 10px;"><label style="font-weight: bold; display: inline-block; width: 25%;">Name: </label><input type="text" name="full_name" placeholder="Optional" style="width: 75%; box-sizing: border-box;" /></div>
					<div style="margin-bottom: 10px;"><label style="font-weight: bold; display: inline-block; width: 25%;">Email: </label><input type="email" name="email" style="width: 75%; box-sizing: border-box;" /></div>
					<center><input type="submit" value="Subscribe" class="button" /></center>
				</form>
			</div>
			<div class="sbox2">
				<h2>Upcoming Events</h2>
				<ul class="style1">
				<?php
					date_default_timezone_set('America/Chicago');
					$params = array(
						'singleEvents' => true,
						'orderBy' => 'startTime',
						'timeMin' => date(DateTime::ATOM),
					);
					$events = $cal->events->listEvents($calendarId, $params);

					$count = 0;
					$items_to_show = 5;

					foreach ($events->getItems() as $event) { 
						if($count < $items_to_show)
						{
							$eventDateStr = $event->start->dateTime;
							if(empty($eventDateStr))
								$eventDateStr = $event->start->date;
							?>
							<li>
								<a href="<?php echo $event->htmlLink;?>" target="_blank" title="<?php echo date('M d, Y', strtotime($eventDateStr)); if(!empty($event->start->dateTime)) echo ' at '.date('h:i a', strtotime($event->start->dateTime)); ?>"><?php echo $event->summary; ?></a>
							</li>
						<?php $count++; }
					} ?>
				</ul>
			</div>
		</section>
	</div>
</div>