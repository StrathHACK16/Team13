
<?php foreach ($result -> locations as $data): ?>
<div class="node">
	<div class="item">
		<div class="box1">
			<a href="<?= base_url('main/add_votes/' . $data['id'] . '/1'); ?>"><div class="upvote"></div></a>
			<div class="count"><?= $this -> votes -> counts($data['id']) ?></div>
			<a href="<?= base_url('main/add_votes/' . $data['id'] . '/0'); ?>"><div class="downvote"></div></a>
		</div>
           <div class="location">
           		<div class="loc_details">
                	<img src="<?php echo base_url('assets/images/'. rand(1, 5) . '.jpg'); ?>"/>
					<div style="width:100%; text-align: center;"><?php echo $data['location_from'] .  ' to '  . $data['location_to'] ?></div>
					<div style="width:100%; text-align: center;"><?php echo $data['date']  ?></div>
                </div>
           </div>
		   <div class="flight">
			<table class="table1" width="250" border="0" >
			<tbody>
			<tr>
			  <th scope="col">Airline</th>
			  <th scope="col">Price</th>
			</tr>
			<tr>
			  <td>ASDASD</td>
			  <td>&1251251;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
		  </tbody>
			</table>
		   </div>
		<div class="hotel">
			<table class="table1" width="250" border="0" >
			<tbody>
			<tr>
			  <th scope="col">Hotel</th>
			  <th scope="col">Price</th>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			</tbody>
		</table>
		</div>
		<div class="car">
			<table class="table1" width="250" border="0" >
			<tbody>
			<tr>
			  <th scope="col">Car</th>
			  <th scope="col">Price</th>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			</tbody>
		</table>
		</div>
		</div>	     
</div>
<?php endforeach; ?>

