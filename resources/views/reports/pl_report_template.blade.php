<table style="text-align: left;">
	<thead>
		<tr>
			<th>PT. Graha Citra Pratama</th>
		</tr>
		<tr>
			<th>Profit &amp; Loss</th>
		</tr>
		<tr>
			<th>For Period of {{$period_from}} and YTD {{$period_to}}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<?php foreach ($data as $key => $d): ?>
				<td colspan="2">{{date('M Y',strtotime($d["date"]))}}</td>
			<?php endforeach ?>
			
		</tr>
		<tr>
			<td>Description</td>
			<?php foreach ($data as $key => $d): ?>
				<td>In IDR</td>
				<td>%</td>
			<?php endforeach ?>
		</tr>
		<?php $counter_data = 0; ?>
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
									<td>{{$catdet2["percentage"]}}</td>

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
							<td>{{$det2["percentage"]}}</td>
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
