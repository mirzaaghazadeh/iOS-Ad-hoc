<?php
	      $response = file_get_contents("https://wtfismyip.com/json"); //check ip
				$responseArray = (array)json_decode($response);
				$countryCode = $responseArray["YourFuckingLocation"];


							if ($countryCode == "Iran, Islamic Republic of") { //check country

								Download();

							} else {

								 Invalid();
							}

						

							function Download() {
							
							$link  = "itms-services://?action=download-manifest&url=";
							$plist = "https://example.com/x.plist";
							
														 header('Location: '.$link.$plist);
														 
														 }

							function Invalid() {
							 header('Location: http://navidm.ir/error');
							}

?>
