<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Actionable emails e.g. reset password</title>
<link href="{{ asset('css/emails/styles.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>

<body itemscope itemtype="http://schema.org/EmailMessage">

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" width="600">
			<div class="content">
				<table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction">
					<tr>
						<td class="content-wrap">
							<meta itemprop="name" content="Confirm Email"/>
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block">
                                        Hi Venkatesh, new inquiry received
                                        
									</td>
								</tr>
								<tr>
										<td class="content-block">
											 Name -   {{ $name }} 
										</td>
										
								</tr>
								<tr>
									<td class="content-block">
									<img src="https://wbxpress.com/wp-content/uploads/2011/08/housing-loan.jpg" width="200" height="200" alt="" srcset="">
									</td>
								</tr>
								<tr>
										<td class="content-block">
												Email id -  {{ $email }}
										</td>
								</tr>
								<tr>
										<td class="content-block">
												 Contact no.  -  {{ $mobile }}
										</td>
								</tr>
								<tr>
										<td class="content-block">
												 Message by Client -
										</td>
								</tr>
								
								<tr>
									<td class="content-block">
									 {{   $message_body  }}
									</td>		
								</tr>
								
								<tr>
									<td class="content-block">
										&mdash; Please Follow up the Same!
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div class="footer">
					<table width="100%">
						<tr>
							<td class="aligncenter content-block">Follow <a href="http://twitter.com/mail_gun">@vkfinance</a> on Facebook.</td>
						</tr>
					</table>
				</div></div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>
