<article id="article">
	<h2>
		<?php echo __('Create Classroom'); ?>
	</h2>
	<form method="post" action="create">
		<input type="hidden" name="action" value="create" />
		<table>
			<tr>
				<td>
					<?php echo __('Class Number'); ?>
				</td>
				<td>
					<input type="password" name="number" />
				</td>
			</tr>
			<tr>
				<td>
					<?php echo __('Class Days'); ?>
				</td>
				<td>
					<input type="checkbox" id="chkSun" name="sun"/>
					<label for="chkSun">
						Sunday
					</label>
					<br>
					<input type="checkbox" id="chkMon" name="mon"/>
					<label for="chkMon">
						Monday
					</label>
					<br>
					<input type="checkbox" id="chkTue" name="tue"/>
					<label for="chkTue">
						Tuesday
					</label>
					<br>
					<input type="checkbox" id="chkWed" name="wed"/>
					<label for="chkWed">
						Wednesday
					</label>
					<br>
					<input type="checkbox" id="chkThu" name="thu"/>
					<label for="chkThu">
						Thursday
					</label>
					<br>
					<input type="checkbox" id="chkFri" name="fri"/>
					<label for="chkFri">
						Friday
					</label>
					<br>
					<input type="checkbox" id="chkSat" name="sat"/>
					<label for="chkSat">
						Saturday
					</label>
					<br>
				</td>
			</tr>
		</table>
		<input type="submit" id="btnAddClass" value="<?php echo __('Create Classroom'); ?>"/>
		<?php echo $this->Form->error('classroom_id'); ?>
	</form>
</article>