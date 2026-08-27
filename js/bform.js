// JavaScript Document

$(document).ready(function() {
	
	//if submit button is clicked
	$('#submit').click(function () {		
		
		//Get the data from all the fields
		var lead = $('input[name=lead]');
		var telephone = $('input[name=telephone]');
	 var nailed = $('input[name=nailed]');
		var email = $('input[name=email]');
		 
		var findus = $('select[name=findus]');

		var moreinfo = $('textarea[name=moreinfo]');

		//Simple validation to make sure user entered something
		//If error found, add hightlight class to the text field
			if (lead.val()=='') {
			lead.addClass('hightlight');
			return false;
		} else  lead.removeClass('hightlight');

if (telephone.val()=='') {
			telephone.addClass('hightlight');
			return false;
		} else  telephone.removeClass('hightlight');

 
if (email.val()=='') {
			email.addClass('hightlight');
			return false;
		} else  email.removeClass('hightlight');

 
		if (findus.val()=='') {
			findus.addClass('hightlight');
			return false;
		} else  findus.removeClass('hightlight');

		
		var data = 'nailed=' + nailed.val()+ '&lead=' + lead.val()	+ '&telephone=' + telephone.val() + '&email=' + email.val() + '&findus=' + findus.val() + '&moreinfo=' + moreinfo.val();
		
		
		//disabled all the text fields
		$('.texty').attr('disabled','true');
		
		//show the loading sign
		$('.loading').show();
		
		
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "bform.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html==1) {					
					//hide the form
					$('.block').slideUp('slow');					
					
					//show the success message
					$('.done').fadeIn('slow');
					
				//if process.php returned 0/false (send mail failed)
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
		
		//cancel the submit button default behaviours
		return false;
	});	
});	
