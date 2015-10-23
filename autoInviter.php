<?php    
    date_default_timezone_set('America/Los_Angeles');
	mb_internal_encoding("UTF-8");

	$typeformApiKey='75ec564ba7202f6fe58124ace777d081323d7586';
	$typeformFormId='Ayy08n';
	$typeformEmailField='email';
	$typeformFirstNameField='textfield_12523794';
	$typeformLastNameField='textfield_12523795';
	$previouslyInvitedEmailsFile= __DIR__.'/previouslyInvitedEmails.json';

	// your slack team/host name 
	$slackHostName='EventJive';

	// find this when checking the post at https://eventjive.slack.com/admin/invites/full
	$slackAutoJoinChannels='';
	// generate token at https://api.slack.com/
	$slackAuthToken='xoxp-11319684084-11323471664-11391815712-ba863dae9e';

    // 
	if(@!file_get_contents($previouslyInvitedEmailsFile)) {
		$previouslyInvitedEmails=array();
	}
	else {
		$previouslyInvitedEmails=json_decode(file_get_contents($previouslyInvitedEmailsFile),true);
	}
	$offset=count($previouslyInvitedEmails);

	$typeformApiUrl='https://api.typeform.com/v0/form/'.$typeformFormId.'?key='.$typeformApiKey.'&completed=true&offset='.$offset;

	if(!$typeformApiResponse=file_get_contents($typeformApiUrl)) {
		echo "Sorry, can't access API";
		exit;
	}

	$typeformData=json_decode($typeformApiResponse,true);

	$usersToInvite=array();
	foreach($typeformData['responses'] as $response) {
		$user['email']=$response['hidden'][$typeformEmailField];
		$user['first_name']=$response['answers'][$typeformFirstNameField];
		$user['last_name']=$response['answers'][$typeformLastNameField];
		if(!in_array($user['email'],$previouslyInvitedEmails)) {
			array_push($usersToInvite,$user);
		}
	}
// 

$slackInviteUrl='https://'.$slackHostName.'.slack.com/api/users.admin.invite?t='.time();

	$i=1;
	foreach($usersToInvite as $user) {
		echo date('c').' - '.$i.' - '."\"".$user['name']."\" <".$user['email']."> - Inviting to ".$slackHostName." Slack\n";

		// 
			$fields = array(
				'email' => urlencode($user['email']),
				'channels' => urlencode($slackAutoJoinChannels),
				'first_name' => urlencode($user['first_name']),
				'last_name' => urlencode($user['last_name']),
				'token' => $slackAuthToken,
				'set_active' => urlencode('true'),
				'_attempts' => '1'
			);

			// url-ify the data for the POST
				$fields_string='';
				foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
				rtrim($fields_string, '&');

			// open connection
				$ch = curl_init();

			// set the url, number of POST vars, POST data
				curl_setopt($ch,CURLOPT_URL, $slackInviteUrl);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch,CURLOPT_POST, count($fields));
				curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

			// exec
				$replyRaw = curl_exec($ch);
				$reply=json_decode($replyRaw,true);
				if($reply['ok']==false) {
					echo date('c').' - '.$i.' - '."\"".$user['name']."\" <".$user['email']."> - ".'Error: '.$reply['error']."\n";
				}
				else {
					echo date('c').' - '.$i.' - '."\"".$user['name']."\" <".$user['email']."> - ".'Invited successfully'."\n";
				}

			// close connection
				curl_close($ch);

				array_push($previouslyInvitedEmails,$user['email']);

		// 
		$i++;
	}
// 