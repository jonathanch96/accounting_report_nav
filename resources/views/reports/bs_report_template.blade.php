<table style="text-align: left;">
	<thead>
		<tr>
			<th>PT. Graha Citra Pratama</th>
		</tr>
		<tr>
			<th>Balance Sheet</th>
		</tr>
		<tr>
			<th>As of {{$period_from}} &amp; {{$period_to}}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2" style="text-align: center;">Balance</td>
			
		</tr>
		<tr>
			<td>Description</td>
			<?php foreach ($data as $key => $d): ?>
				<td>{{date('M Y',strtotime($d["date"]))}}</td>
			<?php endforeach ?>
		</tr>
		@foreach ($data as $key => $d)
		@if($loop->first)
		<?php foreach ($d["detail"] as $key => $det): ?>
			<?php foreach ($det["detail"] as $key => $catdet): ?>
				<tr>
					<td>{{$catdet["name"]}}</td>
					<?php foreach ($data as $key => $d2): ?>
						<?php foreach ($d2["detail"] as $key => $det2): ?>
							<?php foreach ($det2["detail"] as $key => $catdet2): ?>
								<?php if($catdet2["id"]==$catdet["id"]){ ?>
									<td>{{$catdet2["value"]}}</td>

								<?php } ?>
							<?php endforeach ?>
						<?php endforeach ?>
					<?php endforeach ?>

				</tr>
			<?php endforeach ?>
			<tr style="font-weight: bold;text-align: right">
				<td>{{$det["name"]}}</td>
				<?php foreach ($data as $key => $d2): ?>
					<?php foreach ($d2["detail"] as $key2=> $det2): ?>
						<?php if($det["name"]==$det2["name"]){ ?>
							<td>{{$det2["value"]}}</td>
						<?php } ?>

					<?php endforeach ?>
				<?php endforeach ?>

			</tr>
			<tr><td>&nbsp;</td></tr>
		<?php endforeach ?>
		@endif
		@endforeach
	</tbody>
</table>
