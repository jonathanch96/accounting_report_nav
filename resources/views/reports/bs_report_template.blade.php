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
			<td></td>
			<td></td>
			<td colspan="2" style="text-align: center;">Balance</td>
			

		</tr>
		<tr>
			<td>Description</td>
			<?php foreach ($data as $key => $d): ?>
				<td>{{date('M Y',strtotime($d["date"]))}}</td>
			<?php endforeach ?>
			<td>&nbsp;</td>

			<td>Description</td>
			<?php foreach ($data as $key => $d): ?>
				<td>{{date('M Y',strtotime($d["date"]))}}</td>
			<?php endforeach ?>
		</tr>
		@foreach ($data as $key => $d)
		@if($loop->first)
		<?php $max_data = count($data_2[0]["detail"]); ?>
		<?php $row_counter=0; ?>
		<?php $cat_counter=0; ?>
		<?php $flag_break=false; ?>
		<?php $flag_break_2=false; ?>
		<?php $minus_counter=0; //for row_counter?>
		<?php $max_counter = count($data_2[0]["detail"][$cat_counter]["detail"]);  ?>
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
					<td>&nbsp;</td>
					<?php if(!$flag_break&&!$flag_break_2){ ?>
						<?php if($max_data>$cat_counter){ ?>
							<?php if($max_counter!=0){ ?>
								<td>{{$data_2[0]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["name"]}} </td>
								<td>{{$data_2[0]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["value"]*-1}} </td>
								<td>{{$data_2[1]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["value"]*-1}} </td>
							<?php } ?>
							<?php $row_counter++; ?>
							<?php 
							if(($row_counter-$minus_counter)>=$max_counter){

								$minus_counter+=($row_counter-$minus_counter);
								$cat_counter++;
								if($max_data>$cat_counter)
									$max_counter = count($data_2[0]["detail"][$cat_counter]["detail"]);
								$flag_break=true;
								$flag_break_2=true;

							}
							?>
						<?php } ?>
					<?php }else if($flag_break){ ?>
						<?php if($cat_counter!=$max_data){ ?>
							<td>{{$data_2[0]["detail"][$cat_counter-1]["name"]}}</td>
							<td>{{$data_2[0]["detail"][$cat_counter-1]["value"]*-1}}</td>
							<td>{{$data_2[1]["detail"][$cat_counter-1]["value"]*-1}}</td>
							<?php $flag_break=false; ?>
						<?php } ?>
					<?php }else{ ?>
						<td>&nbsp;</td>
						<?php $flag_break_2=false; ?>

					<?php } ?>


				</tr>


				

			<?php endforeach ?>

			<tr>
				<td>{{$det["name"]}}</td>
				<?php $checker=null; ?>
				<?php foreach ($data as $key => $d2): ?>
					<?php foreach ($d2["detail"] as $key2=> $det2): ?>
						<?php $checker=$det; ?>
						<?php if($det["name"]==$det2["name"]){ ?>
							<td>{{$det2["value"]}}</td>
						<?php } ?>

					<?php endforeach ?>
				<?php endforeach ?>
				<?php if($checker["id"]==19){ ?>
					<td>&nbsp;</td>

					<td>{{$data_2[0]["detail"][$cat_counter-1]["name"]}}</td>
					<td>{{$data_2[0]["detail"][$cat_counter-1]["value"]*-1}}</td>
					<td>{{$data_2[1]["detail"][$cat_counter-1]["value"]*-1}}</td>
					<?php $flag_break=false; ?>
				<?php } ?>
				<td>&nbsp;</td>
				<?php if(!$flag_break&&!$flag_break_2){ ?>
					<?php if($max_data>$cat_counter){ ?>
						<?php if($max_counter!=0){ ?>
							<td>{{$data_2[0]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["name"]}} </td>
							<td>{{$data_2[0]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["value"]*-1}} </td>
							<td>{{$data_2[1]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["value"]*-1}} </td>
						<?php } ?>
						<?php $row_counter++; ?>
						<?php 
						if(($row_counter-$minus_counter)>=$max_counter){
							$minus_counter+=($row_counter-$minus_counter);
							$cat_counter++;
							if($max_data>$cat_counter)
								$max_counter = count($data_2[0]["detail"][$cat_counter]["detail"]);
							$flag_break=true;
							$flag_break_2=true;

						}
						?>
					<?php } ?>
				<?php }else if($flag_break){ ?>
					<?php if($cat_counter!=$max_data){ ?>
						<td>{{$data_2[0]["detail"][$cat_counter-1]["name"]}}</td>
						<td>{{$data_2[0]["detail"][$cat_counter-1]["value"]*-1}}</td>
						<td>{{$data_2[1]["detail"][$cat_counter-1]["value"]*-1}}</td>
						<?php $flag_break=false; ?>
					<?php } ?>
				<?php }else{ ?>
					<td>&nbsp;</td>
					<?php $flag_break_2=false; ?>

				<?php } ?>


			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<?php if(!$flag_break&&!$flag_break_2){ ?>
					<?php if($max_data>$cat_counter){ ?>
						<?php if($max_counter!=0){ ?>
							<td>{{$data_2[0]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["name"]}} </td>
							<td>{{$data_2[0]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["value"]*-1}} </td>
							<td>{{$data_2[1]["detail"][$cat_counter]["detail"][$row_counter-$minus_counter]["value"]*-1}} </td>
						<?php } ?>

						<?php $row_counter++; ?>
						<?php 
						if(($row_counter-$minus_counter)>=$max_counter){
							$minus_counter+=($row_counter-$minus_counter);
							$cat_counter++;
							if($max_data>$cat_counter)
								$max_counter = count($data_2[0]["detail"][$cat_counter]["detail"]);
							$flag_break=true;
							$flag_break_2=true;

						}
						?>
					<?php } ?>
				<?php }else if($flag_break){ ?>
					<?php if($cat_counter!=$max_data){ ?>
						<td>{{$data_2[0]["detail"][$cat_counter-1]["name"]}}</td>
						<td>{{$data_2[0]["detail"][$cat_counter-1]["value"]*-1}}</td>
						<td>{{$data_2[1]["detail"][$cat_counter-1]["value"]*-1}}</td>
						<?php $flag_break=false; ?>
					<?php } ?>
				<?php }else{ ?>
					<td>&nbsp;</td>
					<?php $flag_break_2=false; ?>

				<?php } ?>

			</tr>
		<?php endforeach ?>
		@endif
		@endforeach
	</tbody>
</table>
