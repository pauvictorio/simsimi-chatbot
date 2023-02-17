<?php foreach ($chats as $chat): ?>
	<div class="chat">
		<div class="user">
			<img src="/assets/user.jpg">
			<div class="user-in">
				<p><?= $chat['utext'] ?></p>
			</div>
		</div>
		
		<div class="simsimi">
			<img src="/assets/simsimi.png">
			<div class="simsimi-in">
				<p><?= $chat['atext'] ?></p>
			</div>
		</div>
	</div>
<?php endforeach ?>