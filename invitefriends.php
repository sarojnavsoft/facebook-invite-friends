<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  
document.getElementById('entryResults').innerHTML = 1;

function facebookShare()
{
	  FB.init({ 
       appId:'204264922938922', cookie:true, 
       status:true, xfbml:true 
     });

FB.ui({ method: 'feed', 
        message: 'I just entered to win Bees Suite Tickets and an iPad 2',
		name:'Enter to win an Apple iPad 2 and Bees Suite Tickets',
		link: 'http://www.facebook.com/slcdailydeal',
		picture: 'http://dl.dropbox.com/u/10943524/dailydeal-bigsteal3.jpg',
		description:'Prizes will be given away each week during the month of May!',
		caption:'Enter once a day for chances to win a Hot Air Balloon ride, U2 Concert Tickets, an IPad 2 and more.'
			},

function(response)
{

	if (response.post_id == undefined) { }

		else {
		document.getElementById('entryResults').innerHTML = 3;
		var email = '<? echo($useremail); ?>';

		updateCount(email,3);


		}
	document.getElementById('divInvite').style.display = "block";
	document.getElementById('divShare').style.display = "none";
});



};

function inviteFriends () {

     FB.ui({ method: 'apprequests', 
       message: 'Here is a new Requests dialog...'
	   },
	   function(response)
{

	if (response.request_ids == undefined) { }

	else {
	var str = "'" + response.request_ids + "'";
	var str2 = str.split(",");
	var num1 = parseInt(document.getElementById('entryResults').innerHTML);
	var num2 = parseInt(str2.length);
	var finalentries = num1 + num2;
	document.getElementById('entryResults').innerHTML = num1 + num2;

		var email = '<? echo($useremail); ?>';
		updateCount(email,parseInt(finalentries));

	}

	document.getElementById('completed').style.display = "block";
	document.getElementById('divInvite').style.display = "none";
});

 };
   </script>
   <div style="font-size:0.9em; overflow:auto">

<!--<h2>Week 1: $50 Daily Deal Bucks</h2>


<h3>&ldquo;Ca – Ching&rdquo;  </h3>
<p> Win $50 in DailyDeal Bucks and be entered to win the grand prize of an I-Pad2!</p>-->
<img src="headerBees.gif" style="display:block;" />
<br />
<div style="position:relative">
    <h3 style="position:absolute;">NUMBER OF ENTRIES: <span id="entryResults">1</span></h3>
   <div id="divShare" style="display:block">
 <br /><br />
      <h3>Get two additional entries by sharing <br />with your friends on facebook.</h3>
      <a href="#" onclick="facebookShare();"><img src="btnShare.jpg" alt="Click here to Share on Facebook" border="0" /></a>
 
    <img src="add-two.png" alt="get 2 additional entries" style="position:absolute; top:0px; right:20px;" />
     <br /><br /><br /><br />

   </div>
   <div id="divInvite" style="display:none">
   <br /><br />
        <h3>Get one additional entry for<br />
         EACH friend you invite to participate. <br />
        *Max 50 invites</h3>
      <a href="#" onclick="inviteFriends();"><img src="btnInvite.jpg" alt="Click to invite Friends" border="0" /></a>
 
    <img src="add-50.png" alt="get up to 50 additional entries" style="position:absolute; top:0px; right:20px;" />
     <br /><br /><br /><br />
  
   </div>
   
     <div id="completed" style="display:none"><br /><br />
           <h2>THANK YOU FOR PARTICIPATING...</h2>
           <H3>Get the best deals at <a href="http://www.slcdailydeal.com" target="_blank">SLCDailyDeal.com</a></H3>
  
  	 </div>
   
    
</div>
<div style="clear:both"></div>
<p> Deal Bucks are good towards any DailyDeal at <a href="http://www.slcdailydeal.com" target="_blank">SLCDailyDeal.com</a>!</p>
<hr/> 

  <ul>
   <li>13 suite tickets - Bees vs River Cats, June 14th at 7:05 pm</li>
  <li>One submission allowed per day. Duplicate submissions will be removed.</li>
 <li>Winners will be notified through e-mail.</li>
 </ul>

 </div>
