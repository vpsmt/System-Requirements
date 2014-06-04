(function() {

	var $errorDiv = $('div.alert.alert-danger');
	var $successDiv = $('div.alert.alert-success');

	var okIcon = '<span class="glyphicon glyphicon-ok-circle"></span>';
	var errorIcon = '<span class="glyphicon glyphicon-remove-circle"></span>';

	var progress = $('div.progress');

	$.ajax({
		type: 'POST',
		url: 'requirements.php',
		dataType: 'JSON'
    }).then(
		function(serverResult) {
			if (serverResult.php && serverResult.ioncube && serverResult.mysql && serverResult.fsockopen && serverResult.pdo && serverResult.mcrypt && serverResult.curl) {
				
				for (var key in serverResult) {
					if (serverResult.hasOwnProperty(key)) {
						var currentTR = $('#' + key);
						currentTR.find('span').text(' ... ' + serverResult[key]);
						if (serverResult[key] != 'ok') {
							currentTR.attr('class', 'danger').find('td:last-child').html(errorIcon);
						}
						else {
							currentTR.find('td:last-child').html(okIcon);
						}
			        }
				}//for

				if ($('tr.danger').length == 0) {
					$successDiv.text('Success! You should be able to run VPS MT on this server!').slideDown();
				}
				else
					$errorDiv.text('Error: Please fix the below error(s), refresh this page and try again').slideDown();

				progress.fadeOut().prev().slideDown();
			}
			else {

				$errorDiv.text('Error: Unable to get Ajax Results!').slideDown();
				progress.fadeOut().prev().slideDown();
			}
		}, 
		function(serverError) {
			serverError = 'Server Error: ' + jQuery(serverError.responseText).text();
			$errorDiv.text(serverError).slideDown();
			progress.fadeOut().prev().slideDown();
		}
	);
})();