<?php


function search_food($name){
	
	include 'connectasdb.php';

	if($name){
	
		$result=mysqli_query($in, "SELECT * FROM menu WHERE cancelstatus='0' AND FoodName LIKE '%$name%'");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
	
			echo '
	
			 <div style="padding: 30px; background-color: #ecf0f1; border: solid 5px white;">
					<div>
						<div>
								 <img src="http://localhost/IWT2017/customer/photos/'.$row['image'].'" width=100px height=100px style="margin-left: 5px;"/>
						</div>
	
						
							<div>
								<h2>'.$row[FoodName].' </h2>
								<h2>'.$row[prices].' </h2>
							</div>
	
							
						
	
					</div>
	
					</div>';
	
		}

	}
}

